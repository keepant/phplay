<?php
	$kal = "SAYA SUKA MAKAN SIOMAY";
	
	for ($i = 0; $i<=strlen($kal); $i++)
		if ($kal [$i]== "A")
		{
		$jumlah++;
		}
		echo " Huruf A pada kalimat $kal berjumlah $jumlah";