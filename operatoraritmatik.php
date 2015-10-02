<?php
	$gaji = 2500000;
	$pph = 0.05;
	$lembur = 250000;
	$bersih = ($gaji + $lembur)*$pph;
	$asli = ($gaji + $lembur) - $bersih;
	
	echo "Gaji Sebelum Pajak = Rp. $gaji <br>";
	echo "Gaji Lembur = Rp. $lembur <br>";
	echo "Pajak = Rp. $bersih <br>";
	echo "Gaji Yang DiBawa Pulang = Rp. $asli";