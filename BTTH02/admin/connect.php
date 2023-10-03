<?php
try{
    $conn=new PDO('mysql:host=localhost; dbname=btth01_cse485','root','9123');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    die("lỗi kết nối csdl".$e->getMessage());
}

?>