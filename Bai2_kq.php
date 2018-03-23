<?php
    echo("KET QUA")."<br>";
    $Ngay = $_POST['time'];
    echo("Ngay da nhap: ");
    echo ($Ngay)."<br>";
    
    $NgayMoi1 = date("d-m-y", strtotime($Ngay));
    echo("a. ");
    echo $NgayMoi1."<br>";
    
    $NgayMoi2 = date("M d, Y", strtotime($Ngay));
    echo("b. ");
    echo ($NgayMoi2."<br>");
?>

<html>
    <a href="index.php">Quay ve trang menu</a>
</html>

