<?php 
include_once '../../config/config.php';
$d = htmlspecialchars(mysql_real_escape_string($_GET['idresep']));

$ida = htmlspecialchars(mysql_real_escape_string($_GET['ida']));
mysql_query("delete from beri_resep where id_resep='$d'");
header("Location: ../../main.php?id=beri_obat&ida=".$ida);
 ?>