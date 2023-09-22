<?php
    $arrs=['đỏ', 'xanh', 'cam', 'trắng'];
    $ten=['Anh', 'Sơn', 'Thắng', 'tôi'];
// Tạo chuỗi kết quả
    $result = [];
    for ($i = 0; $i < count($arrs); $i++) {
        $result[] = "Màu <span style='color: red;'>{$arrs[$i]}</span> là màu yêu thích của {$ten[$i]}";
    }
// Nối các phần tử của mảng kết quả thành một chuỗi
    $finalString = implode(', ', $result);

    echo $finalString;
?>