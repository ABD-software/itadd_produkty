<?php
    $num = $_GET['liczba'];
	$query = mysqli_query($connect, "SELECT reference, price FROM `itaproduct` WHERE `id_product` = '.$num.'");
	while($row = mysqli_fetch_row($query))
	    echo 'sku: '.$row[0].', cena: '.round($row[1], 2).'zł';
?>