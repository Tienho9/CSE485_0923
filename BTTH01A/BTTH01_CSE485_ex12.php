<?php
$numbers = [
    'key1' => 12, 
    'key2' => 30, 
    'key3' => 4, 
    'key4' => -123, 
    'key5' => 1234, 
    'key6' => -12565, 
   ];
   
   // Lấy ra phần tử đầu tiên và phần tử cuối cùng
   $firstElement= reset($numbers);
   $lastElement=end($numbers);
   
   // Tìm số lớn nhất, số nhỏ nhất và tổng các giá trị
   $maxValue = max($numbers);
   $minValue = min($numbers);
   $sum = array_sum($numbers);
   
   // In kết quả
   echo "Phần tử đầu tiên: $firstElement"."<br>";

   echo "Phần tử cuối cùng: $lastElement"."<br>";

   echo "Số lớn nhất: $maxValue"."<br>";

   echo "Số nhỏ nhất: $minValue"."<br>";

   echo "Tổng các giá trị: $sum"."<br>";

   echo 'Mảng sắp xếp tăng giá trị:<br>';
   asort($numbers);
   foreach ($numbers as $key => $value) {
       echo "$key => $value<br>";
   }
   
   echo '<br> Mảng sắp xếp giảm giá trị:<br>';
   arsort($numbers);
   foreach ($numbers as $key => $value) {
       echo "$key => $value<br>";
   }
   
   echo '<br> Mảng sắp xếp tăng key:<br>';
   ksort($numbers);
   foreach ($numbers as $key => $value) {
       echo "$key => $value<br>";
   }
   
   echo '<br> Mảng sắp xếp giảm key:<br>';
   krsort($numbers);
   foreach ($numbers as $key => $value) {
       echo "$key => $value<br>";
   }
   
   
?>