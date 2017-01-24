<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php crunching</title>
</head>
<body>
	<?php 
	$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
	$dico = explode("\n", $string);

	echo sizeof($dico);

	if ($dico > strlen(15)) {
		echo $dico;
	} 
	?>
</body>
</html>