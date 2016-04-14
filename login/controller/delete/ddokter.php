<?php 
include_once '../../config/config.php';
$d = htmlspecialchars(mysql_real_escape_string($_GET['hdokter']));
mysql_query("delete from udokter where nip='$d'");
header("Location: ../../main.php?id=dokter");
 ?>