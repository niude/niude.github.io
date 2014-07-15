
<?php
    $ok = 0;

    if( isset($_FILES['file']['error']) && $_FILES['file']['error'] == 0) {
        $ext = pathinfo ($_FILES['file']['name'] , PATHINFO_EXTENSION);
        $basedir = dirname(__FILE__)."/";

        if( ! file_exists($basedir.$ext) )  mkdir($dasedir.$ext);
        move_uploaded_file($_FILES['file']['tmp_name'] , $basedir.$ext.'/'.$_FILES['file']['name']); 
        $ok = 1;
    }

?>

<!Doctype html>
<html>
    <head>
        <meta charset='utf-8'/>
        
    </head>
    <body>
        <form action='' method='post' enctype='multipart/form-data'>
            <input type='file' name='file' >
            <input type='submit' name='submit' value='submit'>
        </form>

    <?php
        if($ok) {
            echo "<div>upload ok </div>";
        }
    ?>
    </body>

</html>
