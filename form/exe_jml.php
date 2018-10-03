<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Exe Jml</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="exe_jml.php" method="post">
        <input type="text" name="a" value="<?php print $_POST['a']; ?>"> + 
        <input type="text" name="b" value="<?php print $_POST['b']; ?>">
        <input type="submit" value="=">
        <input type="text" value="<?php print $_POST['a']+$_POST['b']; ?>">
    </form>
</body>
</html>