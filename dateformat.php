<?php
	if(date("m") == '01'){
		$day = "I";
	} elseif(date("m") == '02'){
		$day = "II";
	} elseif(date("m") == '03'){
		$day = "III";
	} elseif(date("m") == '04'){
		$day = "IV";
	} elseif(date("m") == '05'){
		$day = "V";
	} elseif(date("m") == '06'){
		$day = "VI";
	} elseif(date("m") == '07'){
		$day = "VII";
	} elseif(date("m") == '08'){
		$day = "VIII";
	} elseif(date("m") == '09'){
		$day = "IX";
	} elseif(date("m") == '10'){
		$day = "X";
	} elseif(date("m") == '11'){
		$day = "XI";
	} else {
		$day = "XII";
	}
	$date 	= date("d");
	$counter = 1;
	if (date("d") == '01') {
		$counter = 1;

	}

	$year 	= date("Y");
	$nomor 	= ("$counter/MMS-$region/$day/$year"); 
	echo $nomor; 
?>