<?php
    if(isset($_POST['monkhaivi'])&& isset($_POST['monchinh'])&& isset($_POST['montrangmieng'])){
	$monKhaiVi = $_POST['monkhaivi'];
	$monChinh = $_POST['monchinh'];
	$monTrangMieng = $_POST['montrangmieng'];
        
        
        echo "MonKhaiVi:";
 	foreach ($monKhaiVi as $khai) {
            echo ("<li>$khai</li>");
 	}
        echo("<br>");
        
        echo "MonChinh:";
 	foreach ($monChinh as $chinh) {
            echo ("<li>$chinh</li>");
 	} 
        echo("<br>");
        
 	echo "MonTrangMieng:";
 	foreach ($monTrangMieng as $trang) {
            echo ("<li>$trang</li>");
        }
        echo("<br>");
    }
?>

<html>
    <a href="bai4.php">Quay lai bai 4</a>
</html>
