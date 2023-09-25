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
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td><a href="edit_category.php"><i class="bi bi-pencil-square"></i></a></td>
                    <td><a href=""><i class="bi bi-trash-fill"></i></a></td>
                    </tr>
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