<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php crunching 2</title>
</head>
<body>
	<h1 style="text-align: center;">Top 100 films Ituines</h1>
</br>
<?php 

$string = file_get_contents("films.json", FILE_USE_INCLUDE_PATH);
$brut = json_decode($string, true);
$top = $brut["feed"]["entry"]; # liste de films

foreach ($top as $key => $value) {
	
	if ($key <= 10){
		echo $key." ".$value['im:name']['label']."</br>";
	}
}
?>
<h3 style="text-align: center;">Quel est le classement du film « Gravity » ?</h3>
<?php

foreach ($top as $key => $value) {
	
	if ($value['im:name']['label'] == "Gravity"){
		echo "Gravity et a la position ".$key;
	}
}
?>
</body>
</html>