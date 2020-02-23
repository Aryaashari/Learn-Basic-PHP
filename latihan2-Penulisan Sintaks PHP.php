<?php 

// Penulisan Sintaks PHP
//1. PHP didalam HTML
//2. HTML didalam PHP

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Belajar PHP</title>
 </head>
 <body>
 	
 	<h1>1. PHP didalam HTML</h1>
 	<h2>Selamat <?php echo "Datang"; ?></h2><br>
 	<p><?php echo "lorem"; ?></p>
 	<ul>
 		<li><a href="#"><?php echo "Home"; ?></a></li>
 		<li><a href="#"><?php echo "Profile"; ?></a></li>
 		<li><a href="#"><?php echo "About"; ?></a></li>
 	</ul>
 	<h3><?php echo "Terima Kasih"; ?></h3><br><br>

 	<?php echo "<h1>Ini HTML dalam PHP</h1>"; ?>
 </body>
 </html>