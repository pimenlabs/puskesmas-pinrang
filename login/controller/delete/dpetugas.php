<?php 
include_once '../../config/config.php';
$d = htmlspecialchars(mysql_real_escape_string($_GET['dpetugas']));
mysql_query("delete from upetugas where nip='$d'");
header("Location: ../../main.php?id=petugas_registrasi");
 ?>