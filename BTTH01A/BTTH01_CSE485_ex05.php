<?php
$a = ['a' => ['b' => 0,'c' => 1],
        'b' => ['e' => 2,'o' => ['b' => 3]]];
$value1=$a['b']['o']['b'];
echo $value1.'<br>';
$value2=$a['a']['c'];
echo $value2.'<br>';
foreach($a as $key1=>$value0){
    foreach($value0 as $key2=>$value){
        if($key1=='a'){
            echo ' '.$value.' ';
        }
    }
}
?>