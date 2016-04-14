 <?php  $kl = htmlspecialchars(mysql_real_escape_string($_GET['idpasien'])); ?><!-- Begin of #main -->
    <div id="main" role="main">
      
      <!-- Begin of titlebar/breadcrumbs -->
    <div id="title-bar">
      <ul id="breadcrumbs">
        <li><a href="main.php?id=home" title="Home"><span id="bc-home"></span></a></li>
        <li class="no-hover"><h2>Managemen Kelengkapan Pasien</h2></li>
      </ul>
    </div> <!--! end of #title-bar -->
    
    <div class="shadow-bottom shadow-titlebar"></div>

  <!-- Begin of #main-content -->
    <div id="main-content">
      <div class="container_12">
      
      <div class="grid_12">
       
          <?php
           
           $idpasien = htmlspecialchars(mysql_real_escape_string($_POST['idpasien']));
          $nama = htmlspecialchars(mysql_real_escape_string($_POST['nama']));
      $jenis_kelamin = htmlspecialchars(mysql_real_escape_string($_POST['jenis_kelamin']));
      $agama = htmlspecialchars(mysql_real_escape_string($_POST['agama']));
      $tgl_lahir = htmlspecialchars(mysql_real_escape_string($_POST['tgl_lahir']));
      $no_tlp = htmlspecialchars(mysql_real_escape_string($_POST['no_tlp']));
     $usia = htmlspecialchars(mysql_real_escape_string($_POST['usia']));
     $nama_kpl_klrg = htmlspecialchars(mysql_real_escape_string($_POST['nama_kpl_klrg']));
           
$hub_klrg = htmlspecialchars(mysql_real_escape_string($_POST['hub_klrg']));
           $waktu= date('H:i:s');
$tgl_daftar = htmlspecialchars(mysql_real_escape_string($_POST['tgl_daftar']));
        $alamat = htmlspecialchars(mysql_real_escape_string($_POST['alamat']));
$jenis_perawatan = htmlspecialchars(mysql_real_escape_string($_POST['jenis_perawatan']));
$poli = htmlspecialchars(mysql_real_escape_string($_POST['poli']));
 $denda = htmlspecialchars(mysql_real_escape_string($_POST['denda']));
   
            // query untuk insert data user baru
            if (isset($_POST['idpasien'])) {
              $insert = mysql_query("UPDATE upasien SET idpasien='$idpasien',
              nama='$nama',jenis_kelamin='$jenis_kelamin',agama='$agama',
              tgl_lahir='$tgl_lahir',no_tlp='$no_tlp',usia='$usia',
              nama_kpl_klrg='$nama_kpl_klrg',hub_klrg='$hub_klrg',
              tgl_daftar='$tgl_daftar',
              alamat='$alamat',jenis_perawatan='$jenis_perawatan',
              poli='$poli',status='aktif',denda='$denda' WHERE no_antrian='$kl'") or die (mysql_error());
              $kunjungan_pasien = mysql_query("INSERT INTO kunjungan values (null,'$tgl_daftar','$idpasien','$nama','$poli','$waktu')") or die(mysql_error());
              if (($insert) && ($kunjungan_pasien))
              { 
i
               ?>
                 <div class="alert info">
          <span class="hide">x</span><strong>Status Pasien Telah Diaktifkan</strong>
        </div>
        <?php
              }
              else {
                 ?>
                 <div class="alert info">
          <span class="hide">x</span><strong>Data Gagal Diupdate <?php echo $insert; echo $kunjungan_pasien;?></strong>
        </div><?php
              }
            }
            ?>

      </div>
    <div class="grid_12">
        <div class="block-border">
          <div class="block-header">
            <h1>Pemerikasaan Data Pasien</h1>
          </div>
          <form id="validate-form" class="block-content form" action="" method="post" enctype="multipart/form-data">
          <?php 
          include '../../config/config.php';
         
            $Edituser = mysql_query("select * from upasien where no_antrian='$kl'");
            while ($Edituser1 = mysql_fetch_array($Edituser)) {
              
          
           ?>
           
            <p>
              <label >No KTP / No KK/ No BPJS:</label>
              <input type="text" name="idpasien"  value="<?php echo $Edituser1['idpasien']; ?>" class="required">
            </p>
            <p>
              <label >Nama Pasien</label>
              <input type="text" name="nama"  value="<?php echo $Edituser1['nama']; ?>" class="required">
            </p>
            <p>
              <label >Jenis Kelamin</label>
              <input type="text" name="jenis_kelamin"  value="<?php echo $Edituser1['jenis_kelamin']; ?>" class="required">
            </p>
            <p>
              <label >Agama</label>
              <input type="text" name="agama"  value="<?php echo $Edituser1['agama']; ?>" class="required">
            </p>
            <p>
              <label >Tgl Lahir</label>
              <input type="text" name="tgl_lahir"  value="<?php echo $Edituser1['tgl_lahir']; ?>" class="required">
            </p>
            <p>
              <label >Telpon</label>
              <input type="text" name="no_tlp"  value="<?php echo $Edituser1['no_tlp']; ?>" class="required">
            </p>
            <p>
              <label >Usia</label>
              <input type="text" name="usia"  value="<?php echo $Edituser1['usia']; ?>" class="required">
            </p>
            <p>
              <label >Nama Kepala Keluarga</label>
              <input type="text" name="nama_kpl_klrg"  value="<?php echo $Edituser1['nama_kpl_klrg']; ?>" class="required">
            </p>
            <p>
              <label >Hubungan Keluarga Pasien</label>
              <input type="text" name="hub_klrg"  value="<?php echo $Edituser1['hub_klrg']; ?>" class="required">
            </p>
           
            <p>
              <label >Tgl Daftar</label>
              <input type="text" name="tgl_daftar"  value="<?php echo $Edituser1['tgl_daftar']; ?>" class="required">
            </p>
            <p>
              <label >Alamat</label>
              <input type="text" name="alamat"  value="<?php echo $Edituser1['alamat']; ?>" class="required">
            </p>
            <p>
              <label >Jenis Perawatan</label>
              <input type="text" name="jenis_perawatan"  value="<?php echo $Edituser1['jenis_perawatan']; ?>" class="required">
            </p>
            <p>
              <label >Poli</label>
              <input type="text" name="poli"  value="<?php echo $Edituser1['poli']; ?>" class="required">
            </p>
           <p>
              <label >Data</label>
                <select name='denda'>
                    <option value="-">Data Lengkap</option>
                    <option value="Denda Rp. 15.000">Data Tidak Lengkap (Denda Rp. 15.000)</option>
                </select>
              </p>
             
           
            
            
            <?php   } ?>

            <div class="clear"></div>
            
            <!-- Buttons with actionbar  -->
            <div class="block-actions">
              
              <ul class="actions-right">
                <li><input type="submit" class="button" value="Aktifkan"></li>
              </ul>
            </div> <!--! end of #block-actions -->
          </form>
         
        </div>
      </div>
            
      <div class="clear height-fix"></div>

    </div></div> <!--! end of #main-content -->
  </div> <!--! end of #main -->
