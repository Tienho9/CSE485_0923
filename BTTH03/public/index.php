<?php

require_once('../app/config/config.php');

require_once APP_ROOT.'/app/controllers/AuthorController.php';
require_once APP_ROOT.'/app/controllers/BookController.php';
$authorService=new AuthorService();
$authors=$authorService->getAllAuthors();

$bookService=new BookService();
$books=$bookService->getAllBooks();
echo "<pre>";
print_r($authors);
print_r($books);
echo "</pre>";

