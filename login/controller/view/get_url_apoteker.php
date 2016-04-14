<?php 
$get = htmlspecialchars(mysql_real_escape_string($_GET['id']));
if ($get == 'home') {
		include_once 'controller/view/conten_apoteker.php';
}else if ($get == 'tobat') {
		include_once 'controller/add/tobat.php';
}else if ($get == 'eobat') {
		include_once 'controller/edit/eobat.php';
}else if ($get == 'hobat') {
		include_once 'controller/delete/dobat.php';
}else if ($get == 'pemasukan_obat') {
		include_once 'controller/report/pemasukan_obat.php';
}else if ($get == 'cpemasukan_obat') {
		include_once 'controller/report/cpemasukan_obat.php';
}else if ($get == 'persediaan_obat') {
		include_once 'controller/report/persediaan_obat.php';
}else if ($get == 'pengeluaran_obat') {
		include_once 'controller/report/pengeluaran_obat.php';
}else if ($get == 'cpengeluaran_obat') {
		include_once 'controller/report/cpengeluaran_obat.php';
}
else if ($get == 'editprofile') {
		include_once 'controller/view/editprofile_apotaker.php';
}
 else if ($get == 'resep_obat_pasien') {
		include_once 'controller/view/resep_obat_pasien.php';
} 
 else if ($get == 'beri_obat') {
		include_once 'controller/add/beri_obat.php';
} else if ($get == 'ubahpassword') {
	include_once 'controller/edit/ubahpassword_apoteker.php';

}else  {
	include_once 'controller/error/error.php';
}

 