
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
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="logo.png" alt="logo" width="230px" height="70px"></a>
                    <div class="navbar-collapse">
                        <ul class="navbar-nav me-auto mt-3 pd-4">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">TRANG CHỦ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">ĐĂNG NHẬP</a>
                            </li>
                        </ul>
                        <form class="d-flex mt-3" role="search" method="POST" action="login_process.php">
                            <input class="form-control me-2" type="search" placeholder="Nội dung cần tìm" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Tìm</button>
                        </form>
                </div>
        </nav>
        <div class="container w-50 bg-secondary mt-5 ">
            
            <div class="position-relative">
                    Sign In
            <div>
                <form action="login_process.php" method="POST">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-fill"></i></span>
                <input type="text" class="form-control" placeholder="username" aria-label="Username" aria-describedby="basic-addon1" name="username">

            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-key-fill"></i></span>
                <input type="password" class="form-control" placeholder="password" aria-label="Username" aria-describedby="basic-addon1" name="password">

            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                <label class="form-check-label" for="flexCheckChecked"> Remember Me</label>
            </div>
            <div>
                <button type="submit" name="signin" class="btn btn-warning text-body">Login</button>
            </div>
            </form>
            </div>
            <?php if(isset($_GET['b'])){
                echo '<p class="bg-danger text-light mt-3 p-3">Thong tin dang nhap khong chinh xac!</p>';
            } ?>
            <div>
                <center>
                Don't have an account? <a href="#" class="text-warning">Sign up</a> 
                <br><a href="#" class="text-warning">Forgot your password</a></center>
            </div>
            </div>
        </div>
        <footer>
                <hr>
                <h3 class="text-center text-dark"><strong>TLU'S MUSIC GARDEN</strong></h3>
        </footer>
    </div>

</body>
</html>