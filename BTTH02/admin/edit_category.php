<?php
include("connect.php");

    if(isset($_POST['update'])) {
        $tentheloai = $_POST['ten_tloai'];
        $matheloai = $_POST['ma_tloai'];
        $query_check = "SELECT * FROM theloai WHERE ten_tloai = '$tentheloai'";
        $stmt = $conn->prepare($query_check);
        $stmt->execute();
        if($stmt->rowCount() > 0) {
            header("Location: edit_category.php?ma_tloai=$matheloai&err=1");
        } else {
            $query = "UPDATE theloai SET ten_tloai = '$tentheloai' WHERE ma_tloai = $matheloai";
            $stmt = $conn->prepare($query);
            if($stmt->execute()) {
                header("Location: category.php");
            } else {
                header("Location: edit_category.php?ma_tloai=$matheloai&err=2");
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
        <center><h1>SỬA THÔNG TIN THỂ LOẠI</h1></center>
        <?php if(isset($_GET['err'])) {
            if($_GET['err'] === 1) {
                ?> <p>Category already exist</p>
            <?php } else { ?>
                    <p>Edit category failed</p>
                    <?php } } ?>
        <form method="POST" action="edit_category.php">
            <div class="input-group mb-3 mt-4">
                <span class="input-group-text" id="">Mã thể loại</span>
                <input type="text" class="form-control" value="<?php echo $_GET['ma_tloai']; ?>" name="ma_tloai">
            </div>
            <div class="input-group mb-3 mt-4">
                <span class="input-group-text" id="">Tên thể loại</span>
                <input type="text" class="form-control" name="ten_tloai">
            </div>
            <div class="mt-2 d-flex justify-content-end mb-5">
                <button class="btn btn-success" type="submit" name="update">Lưu</button>
                <a href="category.php" class="btn btn-warning">Quay lại</a>
            </div>
        </form>
        <footer>
                <hr>
                <h3 class="text-center text-dark"><strong>TLU'S MUSIC GARDEN</strong></h3>
        </footer>
    </div>
    </div>
</body>
</html>