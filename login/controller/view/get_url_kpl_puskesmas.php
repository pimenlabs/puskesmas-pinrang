<?php 
$get = htmlspecialchars(mysql_real_escape_string($_GET['id']));
if ($get == 'home') {
	include_once 'conten_utama.php';

}else if ($get == 'lap_pemasukan_obat') {
	include_once 'controller/report/pemasukan_obat.php';

}else if ($get == 'Lap_persediaan_obat') {
		include_once 'controller/report/persediaan_obat.php';
}

else if ($get == 'lap_data_dokter') {
		include_once 'controller/report/lap_dokter.php';
}else if ($get == 'lap_data_perawat') {
		include_once 'controller/report/lap_data_perawat.php';
}else if ($get == 'lap_data_petugas_registrasi') {
		include_once 'controller/report/lap_petugas.php';
}else if ($get == 'lap_data_apoteker') {
		include_once 'controller/report/lap_apoteker.php';
}

else if ($get == 'lap_pengeluaran') {
		include_once 'controller/report/pengeluaran_obat.php';
}else if ($get == 'lap_kunjungan') {
		include_once 'controller/report/laporan_kunjungan.php';
}else if ($get == 'lap_rekam_medis') {
		include_once 'controller/report/lap_rekam_medis.php';
}else if ($get == 'editprofile') {
		include_once 'controller/edit/editprofile_kpl_puskesmas.php';
} else if ($get == 'lap_keluhan') {
		include_once 'controller/view/keluhan.php';

}else if ($get == 'ubahpassword') {
		include_once 'controller/edit/ubahpassword.php';
} 
else  {
	include_once 'controller/error/error.php';
}
 