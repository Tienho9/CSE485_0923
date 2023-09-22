<?php
$keys = array(
    "field1" => "first",
    "field2" => "second",
    "field3" => "third"
   );
   
   $values = array(
    "field1value" => "dinosaur",
    "field2value" => "pig",
    "field3value" => "platypus"
   );
   
   $keysAndValues = array();
   
   foreach ($keys as $key => $value) {
       // kiểm tra xem có tồn tại một key trong mảng $values có tên là $key . 'value' không. 
       if (array_key_exists($key . 'value', $values)) {
           $keysAndValues[$value] = $values[$key . 'value'];
       }
   } 
   print_r($keysAndValues);
   
?>