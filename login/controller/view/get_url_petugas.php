<?php 
$get = htmlspecialchars(mysql_real_escape_string($_GET['id']));
if ($get == 'home') {
		include_once 'controller/view/conten_petugas.php';
} else if ($get == 'epetugas') {
		include_once 'controller/edit/epetugas_pasien.php';
} else if ($get == 'lap_kunjungan') {
		include_once 'controller/report/laporan_kunjungan.php';
} else if ($get == 'editprofile') {
		include_once 'controller/edit/editprofile_petugas.php';
}  else if ($get == 'tregis_pasien') {
		include_once 'controller/add/tregis_pasien.php';

}else if ($get == 'ubahpassword') {
		include_once 'controller/edit/ubahpassword_petugas.php';
} else if ($get == 'cetak_lap_kunjungan') {
		include_once 'controller/report/cetak_lap_kunjungan.php';
} 
else  {
	include_once 'controller/error/error.php';
}

 ?>