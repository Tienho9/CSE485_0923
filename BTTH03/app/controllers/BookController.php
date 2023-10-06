<?php
require_once APP_ROOT.'/app/services/BookService.php';

class BookControllerr{
    public function index(){
        $bookService=new BookService();
        $books=$bookService->getAllBooks();
        
        
    }
}
?>