<?php 

// Operator
// 1.Aritmatika (+, -, *, /, %)
// 2.Pengabung String (.)
// 3.Assignment (=, +=, -=, *=, /=, %=, .=)
// 4.Perbandingan (<, >, <=, >=, ==, !=)
// 5.Identitas (=== dan !==)
// 6.Logika (&&, ||, !)

//Aritmatika
$a = 100;
$b = 10;

//Penggabung String
$nama_depan = "Arya";
$spasi = " ";
$nama_belakang = "Ashari";

//Assignment
$x = 100;
$y = 10;

?>

<!DOCTYPE html>
<html>
<head>
	<title>Opertor</title>
</head>
<body>

	<h1>Operator</h1>
	<div class="aritmatika">
		<h3>1. Aritmatika</h3>
		<ul>
			<li> <h4><?php echo $a; ?> + <?php echo $b; ?> = <?php echo $a+$b; ?></h4> </li>
			<li> <h4><?php echo $a; ?> - <?php echo $b; ?> = <?php echo $a-$b; ?></h4> </li>
			<li> <h4><?php echo $a; ?> x <?php echo $b; ?> = <?php echo $a*$b; ?></h4> </li>
			<li> <h4><?php echo $a; ?> / <?php echo $b; ?> = <?php echo $a/$b; ?></h4> </li>
			<li> <h4><?php echo $a; ?> % <?php echo $b; ?> = <?php echo $a%$b; ?></h4> </li>
		</ul>
	</div>

	<br>

	<div class="penggabungstring">
		<h3>2. Penggabung String</h3>
		<h4><?php
				echo $nama_depan;
				echo $spasi;
				echo $nama_belakang;
			?></h4>
	</div>

	<br>

	<div class="assignment">
		<h3>3. Assignmnet</h3>
		<h4>Nilai awal variabel x = <?php echo $x; ?></h4>
		<h4><?php echo $x += $y; ?> : Variabel x + <?php echo $y ?></h4>
		<h4><?php echo $x -= $y; ?> : Variabel x - <?php echo $y ?></h4>
		<h4><?php echo $x *= $y; ?> : Variabel x * <?php echo $y ?></h4>
		<h4><?php echo $x /= $y; ?> : Variabel x / <?php echo $y ?></h4>
		<h4><?php echo $x %= $y; ?> : Variabel x % <?php echo $y ?></h4>
		<h4><?php echo $x .= "Nol"; ?> : Variabel x Gabung String</h4>
	</div>

	<br>

	<div class="perbandingan">
		<h3>4. Perbandingan</h3>
		<h4>Apakah <?php echo $a ?> < <?php echo $b ?> = <?php echo $a<$b; ?> false</h4>
		<h4>Apakah <?php echo $a ?> > <?php echo $b ?> = <?php echo $a>$b; ?> true</h4>
		<h4>Apakah <?php echo $a ?> <= <?php echo $b ?> = <?php echo $a<=$b; ?> false</h4>
		<h4>Apakah <?php echo $a ?> >= <?php echo $b ?> = <?php echo $a>=$b; ?> true</h4>
		<h4>Apakah <?php echo $a ?> == <?php echo $b ?> = <?php echo $a==$b; ?> false</h4>
		<h4>Apakah <?php echo $a ?> != <?php echo $b ?> = <?php echo $a!=$b; ?> true</h4>
	</div>

	<br>

	<div class="identitas">
		<h3>5. Identitas</h3>
		<h4>Apakah 10 === 10 : <?php var_dump( 10 === "10" ); ?></h4>
		<h4>Apakah 10 != 10 : <?php var_dump( 10 !== "10" ); ?></h4>
	</div>

	<br>

	<div class="logika">
		<h3>6. Logika</h3>
		<h4>Apakah 10 == 10 dan 10 > 5 : <?php var_dump(10==10 && 10>5); ?></h4>
		<h4>Apakah 10 == 10 dan 10 > 10 : <?php var_dump(10==10 && 10>10); ?></h4>
		<h4>Apakah 10 == 10 atau 10 > 10 : <?php var_dump(10==10 || 10>10); ?></h4>
	</div>

</body>
</html>