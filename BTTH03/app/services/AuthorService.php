<?php
require_once APP_ROOT.'/app/models/Author.php';
class AuthorService{
    public function getAllAuthors(){
        try{
            $conn=new PDO('mysql:host=localhost; dbname=librarymanagement', 'root','9123');

            $sql="SELECT * FROM authors";
            $stmt=$conn->query($sql);

            $authors=[];
            while ($row=$stmt->fetch()){
                $author=new Author($row['authorId'], $row['authorName']);
                $authors[]=$author;
            }
            return $authors;
        }
        catch(PDOException $e){
            return $authors=[];
        }
    }
}
?>