<?php
session_start();
include('admin/connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Truy vấn SQL để kiểm tra người dùng
    $sql = "SELECT * FROM nguoidung WHERE username = :username AND pass = :password";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    
    try {
        $stmt->execute();
        
        // Kiểm tra xem người dùng có tồn tại trong cơ sở dữ liệu hay không
        if ($stmt->rowCount() > 0) {
            $_SESSION['username'] = $username;
            header("Location: admin/category.php");
            exit();
        } else {
            header("Location: login.php?b=error");
        }
    } catch (PDOException $e) {
        echo "Lỗi: " . $e->getMessage();
    }
}

$conn = null; // Đóng kết nối PDO
?>