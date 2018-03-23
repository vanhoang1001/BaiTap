<html> 
    
    <head> 
     <title>KET QUA</title> 
    </head>
 
    <body>
       <?php

           $number1 = $_POST['num1'];
           $number2 = $_POST['num2'];
           $dieuKien = $_POST['tinhtoan'];

           if( is_numeric($number1) && is_numeric($number2) )
           {
               if($dieuKien != null)
               {
                   switch ($_POST['tinhtoan']) {
                       case "cong":
                           $result = $number1 + $number2;
                           echo("Tong cua hai so " . $number1 . " va " . $number2 . " la " . $result."<br>");
                           break;

                       case "tru":
                           $result = $number1 - $number2;
                           echo("Hieu cua hai so ".$number1. " va " . $number2 . " la " . $result."<br>");
                           break;

                       case "nhan":
                           $result = $number1 * $number2;
                           echo("Tich cua hai so " . $number1 . " va " . $number2 . " la " . $result."<br>");
                           break;

                       case "chia":
                           $result = $number1 / $number2;
                           echo("Thuong cua hai so " . $number1 . " va " . $number2 . " la " . $result."<br>");
                           break;
                   }
               }

               else
               {
                   echo("Khong hop le, moi nhap lai!");
               }
           }
           
           else
           {
               echo("Nhap vao khong hop le, moi nhap lai"."<br>");
           }
       ?>
    </body>
</html>

<html>
    <a href="index.php">Quay ve trang menu</a>
</html>