<?php
	$arwarna = array("Blue","Black","Red","Yellow","Green","Orange","Purple","Pink","White");
	
	echo "Menampilkan isi array dengan for : <br>";
	for ($i=0; $i<count($arwarna); $i++) {
		echo "Do You Like <font color=$arwarna[$i]>". $arwarna[$i]."</font> ?<br>";
	}