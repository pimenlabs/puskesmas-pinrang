<?php 
$get = htmlspecialchars(mysql_real_escape_string($_GET['id']));
if ($get == 'home') {
		include_once 'controller/add/trekam_medis.php';
}else if ($get == 'resep_obat') {
		include_once 'controller/add/resep_obat.php';
} else if ($get == 'lap_rekam_medis') {
		include_once 'controller/report/lap_rekam_medis.php';
} else if ($get == 'clap_rekam_medis') {
		include_once 'controller/report/clap_rekam_medis.php';
} else if ($get == 'resep_obat') {
		include_once 'controller/add/resep_obat.php';
}else if ($get == 'ubahpassword') {
	include_once 'controller/edit/ubahpassword_dokter.php';
}else if ($get == 'editprofile') {
	include_once 'controller/edit/editprofile_dokter.php';
}
else  {
	include_once 'controller/error/error.php';
}

 ?>