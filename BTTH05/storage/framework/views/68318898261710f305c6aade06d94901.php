<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Default Title'); ?></title>
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('font/font/bootstrap-icons.min.css')); ?>" rel="stylesheet">
    
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="<?php echo e(route('authors.index')); ?>">Author</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('books.index')); ?>">Book</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    <footer>

    </footer>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
</body>
</html> 
<?php /**PATH E:\CN Web\ThucHanh\laravel-crud\resources\views/layouts/app.blade.php ENDPATH**/ ?>