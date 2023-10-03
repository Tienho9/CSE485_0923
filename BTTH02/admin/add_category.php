<?php
include("connect.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    //KIEM TRA NUT "THEM" DA DUOC NHẤN
    if(isset($_POST["add"])){
        //lay du lieu tu form
        $ten_tloai=$_POST["ten_tloai"];
        //thuc hienj truy van sql de them the loai
        $sql="INSERT INTO theloai(ten_tloai) VALUES (:ten_tloai)";
        $stmt=$conn->prepare($sql);
        $stmt->bindParam(':ten_tloai', $ten_tloai, PDO::PARAM_STR);
        try{
            $stmt->execute();
            header("Location: category.php");
        }
        catch(PDOException $e){
            echo"lỗi".$e->getMessage();
        }
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<body>
    <div>
        <nav class="navbar navbar-expand-lg bg-white">
            <div class="col-2">
                <a class="navbar-brand" href="#">Administration</a>
            </div>
            <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Trang ngoài</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="">Thể loại</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Tác giả</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Bài viết</a>
                </li>
            </ul>  
            </div>
        </nav>
        <div class="container">
            <center><h1>THÊM MỚI THỂ LOẠI</h1></center>
            <form method="POST" action="">
                <div class="input-group mb-3 mt-4">
                    <span class="input-group-text" id="">Tên thể loại</span>
                    <input type="text" class="form-control" name="ten_tloai">
                </div>
                <div class="mt-2 d-flex justify-content-end mb-5">
                    <button type="submit" class="btn btn-success mx-2" name="add">Thêm</button>
                    <a href="category.php" class="btn btn-warning">Quay lại</a>
                </div>
            </form>
        </div>
        <footer>
                <hr>
                <h3 class="text-center text-dark"><strong>TLU'S MUSIC GARDEN</strong></h3>
        </footer>
    </div>
</body>
</html>