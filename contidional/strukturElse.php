<html>

<body>
    <h1>if</h1>
    <p> Contoh Stuktur Kontrol if dan else</p>
    <br> $a = 5;
    <br> $b = 7;
    <br> Hitung selisih
    <br> $a = 7;
    <br> $b = 5;
    <br> Hitung selisih
    <hr>
    <?$a = 5;
        $b = 7;
        echo "\$a = $a <br>";
        echo "\$b = $b <br>";
        if ($a > $b) {
            $selisih = $b - $a;
            echo "Selisih \$a > \$b adalah $selisih " . " <br>";
        }
        if ($a < $b) {
            $selisih = $b - $a;
            echo "\$b < \$a adalah $selisih" . "<br>";
        }
        if ($b == $a) {
            echo "\$b = \$a" . "<br>";
        }
        $a = 5;
        $b = 7;
        echo "\$a = $a <br>";
        echo "\$b = $b <br>";
        if ($a > $b) {
            $selisih = $a - $b;
            echo "Selisih \$a > \$b adalah $selisih " . " <br>";
        }
        if ($a < $b) {
            $selisih = $b - $a;
            echo "\$a < \$b adalah $selisih " . " <br>";
        }
        if ($b == $a) {
            echo "\$b = \$a" . "<br>";
        }
    ?>
</body>

</html>