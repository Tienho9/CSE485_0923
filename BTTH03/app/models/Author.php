<?php
    class Author{
        private $authorId;
        private $authorName;

        public function __construct($authorId,$authorName)
        {
            $this->authorId=$authorId;
            $this->authorName=$authorName;
        }
        public function getAuthorId(){
            return $this->authorId;
        }
        public function getAuthorName(){
            return $this->authorName;
        }
        public function setAuthorId($authorId){
            $this->authorId=$authorId;
        }
        public function setAuthorName($authorName){
            $this->authorName=$authorName;
        }
    }
?>