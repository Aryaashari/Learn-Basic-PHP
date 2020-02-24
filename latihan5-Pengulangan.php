<?php 

//Pengulangan
//1. for
//2. while
//3. do.. while
//4. foreach = Untuk pengulangan array.

// for ( $a=3; $a<13; $a++ ) {
// 	echo "$a. Arya Ashari <br>";
// }

// $i=5;
// $a=1;
// while ($i<10){
// 	echo "$a. Hello World! <br>";
// $i++;
// $a++;
// }

// $x=0;
// do {
// 	echo "Arya Asahri <br>";
// $x++;
// } while ( $x > 5);
?>

<!-- Studi Kasus Pengulangan (Buat pengulangan tabel) -->

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!-- <table border="1" cellpadding="10" cellspacing="0">
		<?php 

			// for( $a=1; $a <= 3; $a++ ) {
			// 	echo "<tr>";
			// 		for ($b=1; $b <= 5; $b++) { 
			// 			echo "<td> $a,$b </td>";
			// 		}
			// 	echo "</tr>";
			// }

		 ?>
	</table> -->

	<!-- <table border="1" cellpadding="10" cellspacing="0">
		
		<tr>
			<td>No</td>
			<td>Nama</td>
			<td>Kelas</td>
			<td>Alamat</td>
		</tr>
		<?php 

			// for( $x=1; $x<=5; $x++ ) {
			// 	echo "<tr>";
			// 		for( $y=1; $y <= 1; $y++ ) {
			// 			echo "<td>$x</td>";
			// 		}
			// 		for ( $y=1; $y <= 3; $y++ ) {
			// 			echo "<td></td>";
			// 		}
			// 	echo "</tr>";
			// }

		 ?>

	</table> -->

	<!-- <table border="1" cellpadding="10" cellspacing="0">
		
		 <?php for( $a=1; $a <= 5; $a++ ) : ?>
		 	<tr>
		 		<?php for( $b=1; $b <= 5; $b++ ) : ?>
		 			<td><?= "$a,$b"; ?></td>
		 		<?php endfor; ?>
		 	</tr>
		 <?php endfor; ?>

	</table> -->

	<table border="1" cellspacing="0" cellpadding="10">
		<tr>
			<td>No</td>
			<td>Nama</td>
			<td>Kelas</td>
			<td>Alamat</td>
		</tr>
		<?php for( $i=1; $i <= 5; $i++ ) : ?>
			<tr>
				<?php for( $y=1; $y <= 1; $y++ ) : ?>
					<td><?= $i ?></td>
					<?php for( $y1; $y <= 3; $y++ ) : ?>
						<td></td>
					<?php endfor; ?>
				<?php endfor; ?>
			</tr>
		<?php endfor; ?>
	</table>
</body>
</html>