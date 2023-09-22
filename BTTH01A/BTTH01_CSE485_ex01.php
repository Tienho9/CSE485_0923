<?php
    $arrs=[2,5,6,9,2,5,6,12,5];
    // tính tổng:
    $sum= array_sum($arrs);
    // tính tích :
    $product=array_product($arrs);
    //tính hiệu:
    $difference=$arrs[0];
    for ($i = 1; $i < count($arrs); $i++) {
        $difference -= $arrs[$i];
    }
    
    // Tính thương các phần tử
    $quotient = $arrs[0];
    for ($i = 1; $i < count($arrs); $i++) {
        $quotient /= $arrs[$i];
    }
    echo "Tổng các phần tử = " . implode(" + ", $arrs) . " = " . $sum . "<br>";
    echo "Tích các phần tử = " . implode(" * ", $arrs) . " = " . $product . "<br>";
    echo "Hiệu các phần tử = " . implode(" - ", $arrs) . " = " . $difference . "<br>";
    echo "Thương các phần tử = " . implode(" / ", $arrs) . " = " . $quotient . "<br>"; 
?>