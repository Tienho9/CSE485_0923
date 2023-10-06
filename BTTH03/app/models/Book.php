<?php
    class Book{
        private $bookID;
        private $bookName;
        private $publicationYear;
        private $authorId;

        public function __construct($bookID,$bookName,$publicationYear,$authorId)
        {
            $this->bookID=$bookID;
            $this->bookName=$bookName;
            $this->publicationYear=$publicationYear;
            $this->authorId=$authorId;
        }

        public function getBookID(){
            return $this->bookID;
        }
        public function getBookName(){
            return $this->bookName;
        }
        public function getPublicationYear(){
            return $this->publicationYear;
        }
        public function getAuthorId(){
            return $this->authorId;
        }


        public function setBookID($bookID){
            $this->bookID=$bookID;
        }
        public function setBookName($bookName){
            $this->bookName=$bookName;
        }
        public function setPublicationYear($publicationYear){
            $this->publicationYear=$publicationYear;
        }
        public function setAuthorId($authorId){
            $this->authorId=$authorId;
        }   
        
    }
?>