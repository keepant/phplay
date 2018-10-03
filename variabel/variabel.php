<!DOCTYPE html>
<html>
<head>
    <title>Variabel</title>
</head>
<body>
    <?php 
        $_1="Apel";
        $_2='Jeruk';
        $A=5;
        $a=3.15;

        print "var _1: ".$_1;
        print "<br/>";
        print "var _2: ".$_2;
        print "<br/>";
        print "var A: ".$A;
        print "<br/>";
        print "var a: ".$a;

        $tambah = $A+$a;
        print "<br/>";
        print "Hasil Tambah A+a: ".$tambah;

        $gabung = $_1." ".$_2;
        print "<br/>";
        print "Hasil gabungan: ".$gabung;

        $kurang = $A-15;
        $bagi = 10/$A;
        $modulus = $bagi%20;
        print "<br> Pengurangan".$kurang."<br>";
        print "Pembagian: ".$bagi."<br>";
        print "Modulus: ".$modulus."<br>";

        $b="25";
        $tambah=(int)$b+$A;
        print "Tambah str dan int: ".$tambah."<br>";

        $tambah +=19;
        $kurang -=3;
        $gabung .=" merupakan buah-buahan";
        print "Tambah : ".$tambah."<br>";
        print "Kurang : ".$kurang."<br>";
        print "Gabung : ".$gabung."<br>";

        $tambah ++;
        print "Tambah ++ : ".$tambah."<br>";
        $kurang --;
        print "Kurang -- : ".$kurang."<br>";
        ++$tambah;
        print "++ Tambah : ".$tambah."<br>";
        --$kurang;
        print "-- Kurang : ".$kurang."<br>";
        
        $kombinasi = $tambah++ * --$tambah;
        print "Kombinasi : ".$kombinasi."<br>";
    ?>
</body>
</html>