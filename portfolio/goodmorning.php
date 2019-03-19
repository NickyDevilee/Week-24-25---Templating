<!-- Nicky Devilee | 99047338
Bol4 applicatieontwikkelaar
Blok 2
Week 21 - Introductie PHP -->


<?php

	date_default_timezone_set("Europe/Amsterdam");
	$tijd = date("H:i:s");
	$uur = date("H");
	$datum = date("d-m-Y");

	if ($uur >= '6' && $uur <= '11') {
		echo '<div class="tekst">'. "Datum: " . $datum . '<br>' . "Goede morgen!". '<br>'. "Het is nu ". $tijd. '</div>';
	} 
	elseif ($uur >= '12' && $uur <= '17') {
		echo '<div class="tekst">'. "Datum: " . $datum . '<br>' . "Goede middag!". '<br>'. "Het is nu ". $tijd. '</div>';
	}
	elseif ($uur >= '18' && $uur <= '23') {
		echo '<div class="tekst">'. "Datum: " . $datum . '<br>' . "Goede avond!". '<br>'. "Het is nu ". $tijd. '</div>';
	}
	elseif ($uur >= '00' && $uur <= '5') {
		echo '<div class="tekst">'. "Datum: " . $datum . '<br>' . "Goede nacht!". '<br>'. "Het is nu ". $tijd. '</div>';
	}

?>