<?php 
include_once '../../config/config.php';
$d = htmlspecialchars(mysql_real_escape_string($_GET['hidberita']));
mysql_query("delete from berita where idberita='$d'");
header("Location: ../../main.php?id=berita");
 ?>