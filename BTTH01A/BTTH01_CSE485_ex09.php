<?php

    // tạo hàm để chuyển các phần tử trong mảng thành chữ thường (lowercase) nếu không phải số nguyên.
    function convertToLowercase($arr) {
        $result = array(); // Mảng kết quả
    
        foreach ($arr as $item) {
            // Kiểm tra xem phần tử trong mảng có phải là một số nguyên không
            // Nếu không phải là số nguyên, ta chuyển nó thành chữ thường
            if (is_string($item)) {
                $result[] = strtolower($item); // Nếu là chuỗi, chuyển thành chữ thương và thêm vào mảng kết quả
            } else {
                $result[] = $item;// giữ nguyên giá trị nếu không phải là chuỗi
            }
        }
    
        return $result;
        /*việc đặt các mảng $arrs1 và $arrs2 trước hàm convertToLowercase có thể dẫn đến lỗi
         vì khi khai báo một biến(trường hợp là mảng) bên ngoài các hàm,
          nó sẽ được coi là biến toàn cục và không thể truy cập trong phạm vi của hàm 
          nếu không truyền biến đó vào hàm dưới dạng đối số
        */
    }
    $arrs1 = ['1','B', 'C', 'E', 'ABC'];
    $arrs2 = ['a', 0, null, false];

    $result1 = convertToLowercase($arrs1);
    $result2 = convertToLowercase($arrs2);

    // In kết quả
    print_r($result1);
    echo "<br><br>";
    print_r($result2);
        
    
?>
    