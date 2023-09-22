<?php
    $numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 
    65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
    $tb=array_sum($numbers)/count($numbers);
    echo "Gia trị trung bình của mảng: $tb<br><br>";
    $average1=[];
    foreach($numbers as $value1){
        if($value1 > $tb){
            $average1[]=$value1;
        }
    }
    $average2=[];
    foreach($numbers as $value2){
        if($value2<$tb){
            $average2[]=$value2;
        }
    }
    echo "Số có giá trị lớn hơn giá trị trung bình:".implode(', ',$average1)."<br><br>";
    echo "Số có giá trị bé hơn giá trị trung bình: ".implode(', ', $average2)
?>