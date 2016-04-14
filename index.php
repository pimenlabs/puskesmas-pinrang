<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistem Informasi Pelayanan Puskesmas Tuppu</title>

    <meta name="description" content="Sistem Informasi Pelayanan Puskesmas Tuppu">
    <meta name="author" content="Lapak Project!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	
<style type="text/css">
.tenga{
	margin-left: 200px;

	}
</style>
  </head>
  <body>
<div class="tenga">
<div class="container-fluid ">
	<div class="row ">
		<div class="col-md-10 ">

			<?php include 'menu.php'; ?>
			<ul class="pagination">
				<li>
					<a href="#"></a>
				</li>
				
			</ul>
			<div class="row"><div class="col-sm-10">
				<?php include_once 'logo.php'; ?>
			</div></div><br>
			<?php 
				if (isset($_GET['id'])) {
						if ($_GET['id'] == 'daftar_pasien') {
						 ?>
						 <div class="row">
						 	<?php 	
							include_once 'pasien.php';
							include_once 'sidek.php'; ?>
							
						</div>
						 <?php
						 }
						 else if ($_GET['id'] == 'visimisi') {
						// include_once 'slider.php'; 
			    		?><br>
						 <div class="row">
						 	<?php 	
							include_once 'visimisi.php';
							include_once 'sidek.php'; ?>
							
						</div>
						 <?php
						 }else if ($_GET['id'] == 'Fasilitas_Pelayanan') {
						// include_once 'slider.php'; 
			    		?><br>
						 <div class="row">
						 	<?php 	
							include_once 'Fasilitas_Pelayanan.php';
							include_once 'sidek.php'; ?>
							
						</div>
						 <?php
						 }else if ($_GET['id'] == 'Struktur_Organisasi') {
						// include_once 'slider.php'; 
			    		?><br>
						 <div class="row">
						 	<?php 	
							include_once 'Struktur_Organisasi.php';
							include_once 'sidek.php'; ?>
							
						</div>
						 <?php
						}else if ($_GET['id'] == 'tentang') {
						// include_once 'slider.php'; 
			    		?><br>
						 <div class="row">
						 	<?php 	
							include_once 'tentang.php';
							include_once 'sidek.php'; ?>
							
						</div>
						 <?php
						 }else if ($_GET['id'] == 'jenis_pelayanan') {
						// include_once 'slider.php'; 
			    		?><br>
						 <div class="row">
						 	<?php 	
							include_once 'pelayanan.php';
							include_once 'sidek.php'; ?>
							
						</div>
						 <?php
						 }else if ($_GET['id'] == 'kontak') {
					//	 include_once 'slider.php'; 
			    		?><br>
						 <div class="row">
						 	<?php 	
							include_once 'kontak.php';
							include_once 'sidek.php'; ?>
							
						</div>
						 <?php
						 }else if ($_GET['id'] == 'berita') {
						  
			    		?><br>
						 <div class="row">
						 	<?php 	
							include_once 'beritalanjut.php';
							include_once 'sidek.php'; ?>
							
						</div>
						 <?php
						 }

						 else{
						 //	include_once 'slider.php'; 
						  ?><br>
			    <?php
						 	include_once 'conten.php';
							include_once 'sidek.php';
						 } 
				}else{
			 	//include_once 'slider.php'; 
			    ?><br>
			    <?php
			 	include_once 'conten.php';
				include_once 'sidek.php';
			 } 
			?>
			


				
		
		</div>
	</div>
	
</div>
</div>	

    
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>