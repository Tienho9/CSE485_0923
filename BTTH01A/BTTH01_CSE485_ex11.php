<?php
    $array = array(1, 2, 3, 4, 5);
    // Xóa phần tử thứ 3 
    unset($array[3]);

    // Đảm bảo key của mảng là tuần tự
    $array = array_values($array);
    echo "<pre>";
    // Hiển thị mảng sau khi xóa và điều chỉnh key
    print_r($array);
    echo "</pre>";
?>