<?php 
include_once '../../config/config.php';
$d = htmlspecialchars(mysql_real_escape_string($_GET['idpasien']));

mysql_query("delete from upasien where idpasien='$d'");
mysql_query("delete from rekam_medis where idpasien='$d'");
mysql_query("delete from resep_obat where idpasien='$d'");
header("Location: ../../main.php?id=home");
 ?>