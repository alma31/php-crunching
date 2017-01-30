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

<h3 style="text-align: center;">Quel est le réalisateur du film « The LEGO Movie » ?</h3>
</br>
<?php
foreach ($top as $key => $value) {
	
	if ($value['im:name']['label'] == "The LEGO Movie"){
		echo $value['im:artist']['label'];
	}
}
?>

<h3 style="text-align: center;">Combien de films sont sortis avant 2000 ?</h3>
</br>

<?php
$value = 0;
foreach ($top as $key => $value) {
	
	if ($value['im:releaseDate']['label'] < 2000){
		echo $value['im:name']['label']++."</br>";
	}
}
?>

<h3 style="text-align: center;"> Quel est le film le plus récent ? Le plus vieux ?</h3>
</br>
<h5 style="text-align: center;">Plus récent</h5>
<?php 
$tablo=[];
foreach ($top as $key => $value) {
	
$date = $value['im:releaseDate']['label'];
$nom = $value['im:name']['label'];
$tablo[$date]=$nom;
}
ksort($tablo);

// print_r($tablo);

foreach ($tablo as $key => $value) {
	echo $value;
}


 ?>


</body>
</html>