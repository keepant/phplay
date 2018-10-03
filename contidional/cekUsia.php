<!DOCTYPE html>
<html>
<head>
    <title>Cek Usia</title>
</head>
<body>
    <h3>Cek Usia</h3>
    <form method="GET"> 
        <input type="number" name="usia" placeholder="Usia" >
        <input type="button" value="CEK" name="submit">
        
    </form>
    <br />
    <?php
        error_reporting(0);
        $usia = $_GET[usia];
        if($usia >= 1 && $usia <=3) {
            print "Usia $usia termasuk Batita";
        } else if($usia >= 4 && $usia <=5) {
            print "Usia $usia termasuk Balita";
        } else if($usia >= 6 && $usia <=11) {
            print "Usia $usia termasuk Anak-anak";
        } else if($usia >= 12 && $usia <=16) {
            print "Usia $usia termasuk Puber";
        } else if($usia >= 17 && $usia <=29) {
            print "Usia $usia termasuk Remaja";
        } else if($usia >= 30 && $usia <=59) {
            print "Usia $usia termasuk Dewasa";
        } else if($usia >=60) {
            print "Usia $usia termasuk Senior";
        }
    ?>
</body>
</html>