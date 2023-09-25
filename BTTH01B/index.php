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
                            <a class="nav-link" href="login.php">ĐĂNG NHẬP</a>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Nội dung cần tìm" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Tìm</button>
                    </form>
            </div>
        </nav>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" height="300px" src="content.png" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" height="300px" src="v-pop.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" height="300px" src="us-uk.png" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
        <div>
            <h6 class="heading-title text-center mt-2 text-primary"><a href="#" style="text-decoration:none">TOP BÀI HÁT YÊU THÍCH</a></h6>
        </div>
        <div class="content row m-2 ">
            <div class="box col-md-2 rounded border mb-1 p-0 mx-3 ">
                <a href="detail.php" style="text-decoration:none">
                    <img src="caygio.png" class="img-fluid">
                    <div class="text-center p-2">
                        <p class="title text-primary text-align-center">Cây, lá và gió</p>
                    </div>
                </a>
            </div>
            <div class="box col-md-2 rounded border mb-1 p-0 mx-3 ">
                <a href="" style="text-decoration:none">
                    <img src="csmenthuong.png" class="img-fluid p-0">
                    <div class="text-center p-2">
                        <p class="title text-primary text-align-center">Cuộc sống mến thương</p>
                    </div>
                </a>
            </div>
            <div class="box col-md-2 rounded border mb-1 p-0 mx-3">
                <a href="" style="text-decoration:none">
                    <img src="longme.png" class="img-fluid">
                    <div class="text-center p-2">
                        <p class="title text-primary text-align-center">Lòng mẹ</p>
                    </div>
                </a>
            </div>
            <div class="box col-md-2 rounded border mb-1 p-0 mx-3">
                <a href="" style="text-decoration:none">
                    <img src="phoipha.png" class="img-fluid">
                    <div class="text-center p-2">
                        <p class="title text-primary text-align-center">Phôi pha</p>
                    </div>
                </a>
            </div>
            <div class="box col-md-2 rounded border mb-1 p-0 mx-3">
                <a href="" style="text-decoration:none">
                    <img src="tybatdau.png" class="img-fluid">
                    <div class="text-center p-2">
                        <p class="title text-primary text-align-center">Nơi tình yêu bắt đầu</p>
                    </div>
                </a>
            </div>
            
            <footer>
                <hr>
                <h3 class="text-center text-dark"><strong>TLU'S MUSIC GARDEN</strong></h3>
            </footer>
        </div>
    </div>
</body>
</html>