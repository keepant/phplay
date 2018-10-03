<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Exe Luas Segitiga</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="exe_segitiga.php" method="post">
    <input type="text" name="a" placeholder="alas" value="<?php print $_POST['a']; ?>"> * 
        <input type="text" name="b" placeholder="tinggi" value="<?php print $_POST['b']; ?>"> / 2
        <input type="submit" value="=">
        <input type="text" name="jml" value="<?php print $_POST['a']*$_POST['b']/2 ?>">
    </form>
</body>
</html>