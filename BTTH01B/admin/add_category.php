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
            <div class="input-group mb-3 mt-4">
                <span class="input-group-text" id="">Tên thể loại</span>
                <input type="text" class="form-control">
            </div>
            <div class="mt-2 d-flex justify-content-end mb-5">
                <a href="#" class="btn btn-success mx-2">Thêm</a>
                <a href="category.php" class="btn btn-warning">Quay lại</a>
            </div>
        </div>
        <footer>
                <hr>
                <h3 class="text-center text-dark"><strong>TLU'S MUSIC GARDEN</strong></h3>
        </footer>
    </div>
</body>
</html>