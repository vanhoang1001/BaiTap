<html>
    <body>
        <?php
            if(!empty($_POST['hoten']))
            {
                $Ten = $_POST['hoten'];
                echo("xin chao " .$Ten);
            }
            else
            {
                echo("Chua nhap ho ten");
            }
        ?>
    </body>
</html>