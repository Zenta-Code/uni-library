<?php
	include 'conn.php';
	$id=$_POST['id'];
	$connect->query("DELETE FROM buku WHERE id=".$id);

?>