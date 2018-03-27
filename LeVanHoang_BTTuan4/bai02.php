<hmtl>
    <body>
        <form method="post" name="form">
            <input type="text" placeholder="Tu khoa..." name="khoa">
            <input type="submit" value="Tim" name="submit">
        </form>
    </body>
</hmtl>

<?php
    if(!empty($_POST['khoa']))
    {
        $ten = $_POST['khoa'];
        echo("Ket qua tim kiem voi tu khoa ".$_POST['khoa']);
        
    }
    else
    {
        echo("Nhap vao tu khoa");
    }
?>

