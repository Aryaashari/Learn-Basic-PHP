<?php 

$tkjb = ["Arya", "Vicki", "Setyo", "Diouf", "Evanthe", "Barends"];

$siswa = [

	["1", "Arya", "Doyo Baru", "16 Tahun"],
	["2", "Vicki", "Doyo Baru", "16 Tahun"],
	["3", "Diouf", "Dosai", "16 Tahun"],
	["4", "Setyo", "Pasar Lama", "16 Tahun"],

];

$siswa[] = ["5", "Josua", "Jl. Pasir", "16 Tahun"];
$siswa[] = ["6", "Sherwin", "Kampung Harapan", "16 Tahun"];
$siswa[] = ["7", "Evanthe", "Pasar Lama", "16 Tahun"];
$siswa[] = ["8", "Wahyu", "Pasar Lama", "16 Tahun"];
// var_dump($tkjb);
// echo "<br>";
// print_r($tkjb);
// echo "<br>";

// // Memanggil satu element
// // echo $tkjb[0];
// // echo "<br>";

// // Menambah element baru pada array yang sudah kita buat.
// $tkjb[] = ["Frengky", "Josua", "Wahyu", "David"];
// print_r($tkjb);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		.container {
			width: 700px;
			height: 0, auto;
			background-color: #d9d9d9;
			margin: auto;
			padding: 10px;
		}
		.kotak1 {
			width: auto;
			height: 50px;
			background-color: silver;
			line-height: 50px;
			text-align: center;
			margin: 3px;
			float: left;
			font-weight: bold;
			padding: 8px;
			font-family: arial, sans-serif;
			text-transform: uppercase;
		}

		.kotak2 {
			width: auto;
			height: 50px;
			background-color: silver;
			line-height: 50px;
			text-align: center;
			margin: 3px;
			float: left;
			font-weight: bold;
			padding: 8px;
			font-family: arial, sans-serif;
			text-transform: uppercase;
		}
		.clear {
			clear: both;
		}		

		h2 {
			margin-top: 50px;
			font-family: arial, sans-serif;
		}

		table {
			font-family: arial, sans-serif;
			text-align: center;
			margin-top: 30px;			
		}
		
	</style>
</head>
<body>
<div class="container">
	<?php for($a=0; $a < count($tkjb); $a++ ) : ?>
		<div class="kotak1"><?= $tkjb[$a]; ?></div>
	<?php endfor; ?>


	<div class="clear"></div>


	<?php foreach( $tkjb as $nama ) : ?>
		<div class="kotak2"><?= $nama ?></div>
	<?php endforeach; ?>

	<div class="clear"></div>

	<h2>Data Siswa Kelas XI TKJ B</h2>
		<table class="tabel" border="3" cellpadding="10" cellspacing="0">
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Umur</th>
			</tr>

			<?php foreach($siswa as $s) : ?>
				<tr>
					<td><?= $s[0] ?></td>
					<td><?= $s[1] ?></td>
					<td><?= $s[2] ?></td>
					<td><?= $s[3] ?></td>
				</tr>
			<?php endforeach; ?>
		</table>
</div>
</body>
</html>