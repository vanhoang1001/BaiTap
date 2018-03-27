<html>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" name="form">
            Name: <input type="text" name="name"><br><br>
            E-mail: <input type="email" name="mail"><br><br>
            Website: <input type="text" name="web"><br><br>
            Comment: <textarea rows="5" cols="50" placeholder="Nhap binh luan..." name="binhluan"></textarea><br><br>
            Gender: <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="male">Male
            <br>
            <input type="submit" value="submit" name="submit" >
        </form>
    </body>
</html>

<?php

    $ten = $gmail = $web = $cmt = $website = $gioitinh = "";

    if ($_SERVER['REQUEST_METHOD'] == "POST")
    {
        if( !empty($_POST['name']) && !empty($_POST['mail']) && !empty($_POST['web']) && !empty($_POST['gender']) )
        {
            $ten = $_POST['name'];
            $gmail = $_POST['mail'];
            $website = $_POST['web'];
            $gioitinh = $_POST['gender'];

            echo("Name: ".$ten."<br><br>");
            echo("Email: ".$gmail."<br><br>");
            echo("Website: ".$website."<br><br>");

            if(!empty($_POST['binhluan']))
            {
                $cmt = $_POST['binhluan'];
                echo("Comment: ".$cmt."<br><br>");
            }
            else
            {
                echo("Comment: "."<br><br>");
            }

            echo("Gender: ".$gioitinh."<br><br>");
        }

        else
        {
            echo("Moi nhap day du thong tin!");
        }
    }
?>

