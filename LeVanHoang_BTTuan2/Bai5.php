<?php
    $phantu = array("10","7");
    
    $tong = $phantu[0] + $phantu[1];
    $hieu = $phantu[0] - $phantu[1];
    $tich = $phantu[0] * $phantu[1];
    $thuong = $phantu[0] / $phantu[1];
    $laydu = $phantu[0] % $phantu[1];
    
    
    $str1 = "$phantu[0] + $phantu[1] = $tong";
    eval("\$str1 = \"$str1\";");
    echo($str1."<br>");
    
    $str2 = "$phantu[0] + $phantu[1] = $hieu";
    eval("\$str2 = \"$str2\";");
    echo($str2."<br>");
    
    $str3 = "$phantu[0] + $phantu[1] = $tich";
    eval("\$str3 = \"$str3\";");
    echo($str3."<br>");
    
    $str4 = "$phantu[0] + $phantu[1] = $thuong";
    eval("\$str4 = \"$str4\";");
    echo($str4."<br>");
    
    $str5 = "$phantu[0] + $phantu[1] = $laydu";
    eval("\$str5 = \"$str5\";");
    echo($str5);

?>

