<?php 
include_once '../../config/config.php';
$d = htmlspecialchars(mysql_real_escape_string($_GET['dapoteker']));
mysql_query("delete from uapoteker where nip='$d'");
header("Location: ../../main.php?id=apoteker");
 ?>