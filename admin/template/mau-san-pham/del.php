<?php 
	$id = $_GET['id'];
	$product_id = $_GET['pro'];
	$sql = "DELETE FROM color WHERE color_id = $id";
	$result = mysqli_query($conn_vn, $sql);
	header("location: /admin/?page=mau-san-pham&id=".$product_id);
?>