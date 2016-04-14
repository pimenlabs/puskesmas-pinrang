<?php 
include_once '../../config/config.php';
$d = htmlspecialchars(mysql_real_escape_string($_GET['idobat']));
mysql_query("delete from master_obat where id_obat='$d'");
header("Location: ../../main.php?id=home");
 ?>