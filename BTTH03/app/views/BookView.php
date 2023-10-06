<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Mângement System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<body>
    <div class="container">
        <h3 class="text-center text-uppercase text-success my-3">Danh sách sách</h3>
        <a href="<?= DOMAIN.'/views/book/add.php'; ?>" class ='btn btn-success'>Thêm</a>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Mã sách</th>
                <th scope="col">Tên sách</th>
                <th scope="col">Tác giả</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($books as $book){
                ?>
                        <tr> 
                            <th scope="row"><?= $book->getBookID(); ?></th>
                            <td><?= $book->getBookName(); ?></td>
                            <td><?= $book->getPublicationYear(); ?></td> 
                            <td><?= $book->getAuthorId(); ?></td>
                            <td>
                                <a href="<?= DOMAIN.'app/views/book/edit.php ?id='.$book->getBookID() ;?>"><i class="bi bi-pencil-square"></i></a>
                            </td>
                            <td>
                                <a href="<?= DOMAIN.'app/views/book/remove.php ?id='.$book->getBookName() ;?>"><i class="bi bi-trash3"></i></a>
                            </td>
                        </tr>
                <?php
                    }
                ?>
            </tbody>
            </table>
    </div>
</body>
</html>