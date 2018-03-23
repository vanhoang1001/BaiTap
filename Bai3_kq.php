<?php
echo("KET QUA"."<br><br>");
    
    $phantu = $_POST['xuly'];
    
    if(strlen($phantu) > 10)
    {
   
        echo("Mang da nhap: ".$phantu."<br>");

        $tachchuoi = explode(",", $phantu);

        //cau a
        $kqa = 0;
        foreach ($tachchuoi as $testa) {
            $kqa += $testa;
        }
        echo("a.Tong: ".$kqa."<br>");

        //cau b
        $minb = min($tachchuoi);
        echo("b.Nho nhat: ".$minb."<br>");

        //cau c
        $maxc = max($tachchuoi);
        echo("c.Lon nhat: ".$maxc)."<br>";

        //cau d
        $xoacuoid = substr($phantu, 0, -1);
        echo ("d.Xoa cuoi: ".$xoacuoid."<br>");

        //cau e
        $xoadaue = substr($phantu, 1);
        echo("e.Xoa dau: ".$xoadaue."<br>");
        
    }
    
     else {
         echo("Moi nhap nhieu hon 10 phan tu"."<br>");
    }
?>

<html>
    <a href="index.php">Quay ve trang menu</a>
</html>
