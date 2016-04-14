<?php 
$get = htmlspecialchars(mysql_real_escape_string($_GET['id']));

if ( $get == 'home') {
	include_once 'conten_utama.php';

}else if ($get == 'editprofile') {
	include_once 'controller\edit\editprofile.php';
	# code...
}else if ($get == 'eperawat') {
	include_once 'controller\edit\eperawat.php';
	# code...
}else if ($get == 'tperawat') {
	include_once 'controller\add\tperawat.php';
	# code...
}else if ($get == 'lap_data_perawat') {
	include_once 'controller\report\lap_data_perawat.php';
	# code...
}else if ($get == 'perawat') {
	include_once 'controller\view\perawat.php';
	# code...
}else if ($get == 'berita') {
	include_once 'controller\view\berita.php';
	# code...
}else if ($get == 'tberita') {
	include_once 'controller\add\tberita.php';
	# code...
}else if ($get == 'eberita') {
	include_once 'controller\edit\eberita.php';
	# code...
}
else if ($get == 'keluhan') {
	include_once 'controller\view\keluhan.php';
	# code...
}else if ($get == 'ubahpassword') {
	include_once 'controller/edit/ubahpassword_admin.php';

}



	//managemen petugas registrasi
else if ($get == 'petugas_registrasi') {
	include_once 'petugas_registrasi.php';

	//managemen data dokter
}else if ($get == 'dokter') {
	include_once 'dokter.php';
}else if ($get == 'edokter') {

	include_once 'controller\edit\edoktor.php';
}else if ($get == 'lap_dokter') {

	include_once 'controller\report\lap_dokter.php';
}else
 if ($get == 'tdokter') {

	include_once 'controller\add\tdokter.php';
}
	
	//managemen data apoteker


else if ($get == 'apoteker') {
	include_once 'apoteker.php';
}else if ($get == 'eapoteker') {
	include_once 'controller\edit\eapoteker.php';
}else if ($get == 'tapoteker') {
	include_once 'controller\add\tapoteker.php';
}else if ($get == 'lap_apoteker') {
	include_once 'controller\report\lap_apoteker.php';
}

//managemen data kepala puskesmas
else if ($get == 'kepala_puskesmas') {
	include_once 'kepala_puskesmas.php';

}else if ($get == 'tkepala_puskesmas') {
	include_once 'controller\add\tkepala_puskesmas.php';

}else if ($get == 'ekepalapus') {
	include_once 'controller\edit\tkpl.php';

}else if ($get == 'lap_kepala_pus') {
	include_once 'controller\report\lap_kepala_pus.php';

}




//managemene data petugas
else if ($get == 'tpetugas') {
	include_once 'controller\add\tpetugas.php';
}else if ($get == 'epetugas' ) {
	include_once 'controller\edit\epetugas.php';
}else if ($get == 'dpetugas' ) {
	include_once 'controller\edit\dpetugas.php';
}else if ($get == 'lap_petugas' ) {
	include_once 'controller\report\lap_petugas.php';
}


else{
	include_once 'controller\error\error.php';
}

 ?>