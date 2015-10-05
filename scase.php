<?php
	$paket = "5";
	
	switch ($paket)
	{
		case "2" : $paket = "Rp. 5000";
		break;
		case "5" : $paket = "Rp. 10000";
		break;
		default : $paket = "ERROR";
	}
	
	echo "Anda harus bayar $paket";