<?php

// echo date("l", mktime(0,0,0,11,25,2003));
// echo "<br>";
// echo date("l", strtotime("25 nov 2003"));


//String

//strlen()
// $a="Smk Sentani TKJ";
// echo strlen($a);
// echo strlen("Arya Ashari")

//strcmp()
// $a="Arya";
// $b="Ashari";
// echo strcmp($a, $b);
// echo strcmp("Arya", "Ashari");


//Utility

//isset()
// $a=12;
// var_dump (isset($a));
// var_dump(isset($b));

//empty()
$a=0;
var_dump(isset($a));
var_dump(empty($a));

?>

<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table border="1" cellspacing="0" cellpadding="10">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Tgl Lahir</th>
			<th>Hari Lahir</th>
		</tr>
		<tr align="center">
			<td>1.</td>
			<td>Arya Ashari</td>
			<td>25-11-2003</td>
			<td> <?php echo date("l", mktime(0,0,0,11,25,2003)) ?> </td>
		</tr>
	</table>
	<br>
	<h2>Diskon Berakhir pada :</h2>
	<h3> <?php echo date("l, d-M-Y", time()+60*60*24*7) ?> </h3>

</body>
</html> -->