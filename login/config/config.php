<?php 
	$user = "root";
	$pass = "";
	$ip = "localhost";
	$DB = "puskesmasdb";
    
    $konek = mysql_connect($ip,$user,$pass);
    $pilihDB  = mysql_select_db($DB,$konek);
 	if (! $konek) {
 			echo "Server tidak di temukan";
 	}
 	if (! $pilihDB) {
 			echo "Database Tidak Ditemukan";
 	}
 ?>