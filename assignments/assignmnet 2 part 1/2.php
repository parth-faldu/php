<?php
	$cities = array(
					"Tokyo" => "Japan",
					"Mexico City" => "Mexico",
					"New York City" => "USA",
					"Mumbai" => "India",
					"Seoul" => "Korea",
					"Shanghai" => "China",
					"Lagos" => "Nigeria",
					"Buenos Aires" => "Argentina",
					"Cairo" => "Egypt",
					"London" => "England"
					);
					
	foreach($cities as $city => $country)
	{
		echo "$city is in $country<br>";
	}
?>