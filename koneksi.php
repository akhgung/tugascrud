<?php
$host ="Localhost";
$user ="root";
$pass ="";
$db ="crud";

$conn =mysqli_connect($host,$user,$pass,$db);
	if($conn==false){
			echo "koneksi server gagal";
	die();	
	}	
?>