<?php
    error_reporting(0);
    $a = $_POST[a];
    $b = $_POST[b];
    $c = $_POST[c];

    print "Persamaan: ".$a."x<sup>2</sup> + ".$b."x + ".$c." = 0";
    
    $D=$b * $b - 4 * $a * $c;
    $x1= (-$b - sqrt($D)) / 2*$a;
    $x2= (-$b + sqrt($D)) / 2*$a;

    print "<br> D= ".$D."<br>";
    print "x1= ".$x1."<br>";
    print "x2= ".$x2."<br>";
 
?>