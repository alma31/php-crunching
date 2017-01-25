<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php crunching</title>
</head>
<body>
	<h1 style="text-align: center;">Mon dico</h1>
</br>

<?php 
$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico = explode("\n", $string);?>
<textarea rows="15" cols="187"><?php echo $string ?></textarea>
</br>
<?php echo  "Il y a "."<strong>".sizeof($dico)."</strong>"." mots dans ce dico."."</br>";?>
<?php 
$tablo = array();
foreach ($dico as $i) {
	if (strlen($i) == 15) {
		array_push($tablo, $i);
	}
}
?>
<?php echo "Il y a "."<strong>".count($tablo)."</strong>"." mots qui on 15 lettres dans ce dico."."</br>";?>
<?php 
$tablo = array();
foreach ($dico as $i) {
	if (strpos($i, "w") !== false) {
		array_push($tablo, $i);
	}
}
echo "Il y a "."<strong>".count($tablo)."</strong>"." mots qui contiennent la lettre W dans ce dico."."</br>";?>
<?php 
$tablo= array();
foreach ($dico as $i) {
	if (substr($i, -1) == "q") {
		array_push($tablo, $i);
	}
}
echo "Il y a "."<strong>".count($tablo)."</strong>"." mots qui finissent par la lettre Q dans ce dico";?>
</body>
</html>