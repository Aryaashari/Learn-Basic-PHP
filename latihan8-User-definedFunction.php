<?php 

function sapa($waktu = "Datang", $nama = "Admin") {
	echo "Selamat $waktu, $nama";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1><?= sapa("Sore", "Arya"); ?></h1>
</body>
</html>