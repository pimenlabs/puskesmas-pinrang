<?php 
include_once '../../config/config.php';
$d = htmlspecialchars(mysql_real_escape_string($_GET['dnip']));
mysql_query("delete from uperawat where nip='$d'");
header("Location: ../../main.php?id=perawat");
 ?>