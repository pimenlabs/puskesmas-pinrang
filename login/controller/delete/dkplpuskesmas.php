<?php 
include_once '../../config/config.php';
$d = $_GET['dkepala_puskesmas'];
mysql_query("delete from ukpl_puskesmas where nip='$d'");
header("Location: ../../main.php?id=kepala_puskesmas");
 ?>