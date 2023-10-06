<?php
require_once APP_ROOT.'/app/models/Book.php';
class BookService{
    public function getAllBooks(){
        try{
            $conn=new PDO('mysql:host=localhost; dbname=librarymanagement','root','9123');

            $sql="SELECT *FROM books";
            $stmt=$conn->query($sql);


            $books=[];

            while($row=$stmt->fetch()){
                $book=new Book($row['bookID'], $row['bookName'], $row['publicationYear'], $row['authorId']);
                $books[]=$book;
            }
            return $books;
        }
        catch(PDOException $e){
            return $books=[];
        }
    }
}
?>