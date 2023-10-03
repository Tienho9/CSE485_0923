<?php 
session_start();
    if(!isset($_SESSION['username'])){
        header("Location: ../login.php");
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
            <a href="add_category.php" class="btn btn-success mt-5">Thêm mới</a>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên thể loại</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include("connect.php");
                        $sql="SELECT * FROM theloai";
                        $result=$conn->query($sql);
                        while($row=$result->fetch(PDO::FETCH_ASSOC)){
                            ?>
                             <tr>
                                <td><?= $row["ma_tloai"]?></td>
                                <td><?= $row["ten_tloai"]?></td>
                                <td><a href="edit_category.php?ma_tloai=<?= $row["ma_tloai"]?>"><i class="bi bi-pencil-square"></i></a></td>
                                <td><a name="delete" href="delete_category.php?ma_tloai=<?= $row["ma_tloai"]?> "><i class="bi bi-trash-fill"></i></a></td>
                            </tr>
                    <?php
                        }
                    ?>
            
                   
                </tbody>
            </table>
        </div>
        <footer>
                <hr>
                <h3 class="text-center text-dark"><strong>TLU'S MUSIC GARDEN</strong></h3>
        </footer>
    </div>
</body>
</html>