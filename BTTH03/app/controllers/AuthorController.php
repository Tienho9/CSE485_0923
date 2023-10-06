<?php
require_once APP_ROOT.'/app/services/AuthorService.php';
class AuthorController{
    public function index(){
        //goi du lieu ti songservice
        $authorService= new AuthorService();
        $authors=$authorService->getAllAuthors();
        include APP_ROOT.'/views/AuthorView.php';
    }
}
?>