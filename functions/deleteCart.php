<?php 
    include("../database.php");

	$id_cart = $_GET['id_cart'];
	mysqli_query($connection,"DELETE FROM cart where id_cart ='$id_cart'");
	header('location: ../cart.php');
?>