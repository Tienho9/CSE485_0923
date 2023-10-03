<?php
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["ma_tloai"])) {
    // Lấy mã thể loại từ URL
    $ma_tloai = $_GET["ma_tloai"];

    // Truy vấn SQL DELETE
    $sql = "DELETE FROM theloai WHERE ma_tloai = :ma_tloai";

    // Chuẩn bị và thực thi truy vấn
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":ma_tloai", $ma_tloai, PDO::PARAM_INT);

    try {
        $stmt->execute();
        header("Location: category.php");
        exit();
    } catch (PDOException $e) {
        echo "Lỗi: " . $e->getMessage();
    }
}

$conn = null; // Đóng kết nối PDO
?>
