<!-- <?php 
// Pengulangan / Percabangan
// 1. if else
// 2. if else if else
// 3. ternary
// 4. Switch

// $a=20;

// if ($a < 20) {
// 	echo "Benar";
// } elseif ( $a == 20 ){
// 	echo "Nilai Sama";
// } else {
// 	echo "Salah";
// }

?> -->

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.warna-baris {
			background-color: silver;
		}
	</style>
</head>
<body>

	<table border="1" cellspacing="0" cellpadding="10" >
		<?php for ($a=1; $a <= 5; $a++) : ?>

			<tr>
				<?php for( $b=1; $b <= 5; $b++ ) : ?>

					<?php if($a%2 == 0) : ?>

						<td class="warna-baris"><?= "$a,$b"; ?></td>

					<?php endif; ?>
					
					<?php if($a%2 == 1) : ?>

						<td><?= "$a,$b"; ?></td>

					<?php endif; ?>

				<?php endfor; ?>
			</tr>

		<?php endfor; ?>
	</table>

</body>
</html>