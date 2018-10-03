<!DOCTYPE html>
<html>
<head>
    <title>Kondisi dan Perulangan</title>
</head>
<body>
    <?php
        //penggunaan if
        $nilai = 9;
        $a = 3;
        $b = 9;
        if($nilai < $a){
            print "$nilai kurang dari $a";
        } else if ($nilai > $a && $nilai < $b) {
            print "$nilai diantara $a dan $b";
        } else if ($nilai > $b) {
            print "$nilai lebih dari $b";
        } else if ($nilai == $a || $nilai == $b) {
            print "$nilai adalah $a atau $b";
        }

        //penggunaan switch
        print "<br />";
        $hari=date("D");
        switch($hari) {
            case "Sun":
                print "Minggu";
                break;
            case "Mon":
                print "Senin";
                break;
            case "Tue":
                print "Selasa";
                break;
            case "Wed":
                print "Rabu";
                break;
            case "Thu":
                print "Kamis";
                break;
            case "Fri":
                print "Jumat";
                break;
            case "Sat":
                print "Sabtu";
                break;
        }

        //penggunaan while
        print "<br /> Bilangan keliatan 3 dibawah 100: ";
        $count = 0;
        while($count<99) {
            print $count += 3;
            print " ";
        }

        //penggunaan do while
        print "<br />";
        $do=5;
        do{
            print $do++;
        } while ($do>7);

        //penggunaan foreach    
        print "<br />";
        $buah = array ("Apel", "Belimbing", "Cerry", "Duren");
        foreach($buah as $tampil) {
            print $tampil." "; 
        }
    ?>
</body>
</html>