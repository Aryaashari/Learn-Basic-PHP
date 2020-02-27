<?php 

$ktp = [

	[
		"nama" => "Arya",
		"alamat" => "Doyo Baru",
		"agama" => "Islam",
		"status" => "Belum kawin",
		"pekerjaan" => "Pelajar",
		"foto" => "../img/avatar 1.png",
	],

	[
		"nama" => "Rahmat",
		"alamat" => "Pasar Baru",
		"agama" => "Islam",
		"status" => "Kawin",
		"pekerjaan" => "Wirausaha",
		"foto" => "../img/avatar 3.png",
	],

	[
		"nama" => "Siti",
		"alamat" => "Jalan Kuburan",
		"agama" => "Islam",
		"status" => "Kawin",
		"pekerjaan" => "Ibu Rumah Tangga",
		"foto" => "../img/avatar 2.png",
	],

	[
		"nama" => "Alex",
		"alamat" => "Hawai",
		"agama" => "Kristen",
		"status" => "Belum Kawin",
		"pekerjaan" => "Mahasiswa",
		"foto" => "../img/avatar 4.png",
	],

	[
		"nama" => "Rendy",
		"alamat" => "Furia",
		"agama" => "Islam",
		"status" => "Belum Kawin",
		"pekerjaan" => "Pelajar",
		"foto" => "../img/avatar 5.png",
	],

];

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		body {
			font-family: arial, sans-serif;
		}

		h1 {
			text-align: center;
		}

		ul {
			float: left;
		}

		.container {
			width: 700px;
			padding: 20px;
			background-color: #d9d9d9;
			height: 600px;
			margin: auto;
		}
	</style>
</head>
<body>
<div class="container">

	<h1>Data KTP</h1>
	<br>

	<?php foreach($ktp as $k) : ?>
		
	<ul>
		<li>
			<img src="<?= $k["foto"]; ?>">
		</li>
		<li>Nama: <?= $k["nama"]; ?></li>
		<li>Alamat: <?= $k["alamat"]; ?></li>
		<li>Agama: <?= $k["agama"]; ?></li>
		<li>Status: <?= $k["status"]; ?></li>
		<li>Pekerjaan: <?= $k["pekerjaan"]; ?></li><br>
	</ul>
		
	<?php endforeach; ?>

</div>
</body>
</html>