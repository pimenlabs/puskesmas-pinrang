 <?php 
$d = htmlspecialchars(mysql_real_escape_string($_GET['nip']));
  ?>
 <!-- Begin of #main -->
    <div id="main" role="main">
      
      <!-- Begin of titlebar/breadcrumbs -->
    <div id="title-bar">
      <ul id="breadcrumbs">
        <li><a href="main.php?id=home" title="Home"><span id="bc-home"></span></a></li>
        <li class="no-hover"><h2><b>Managemen Data perawat</b></h2></li>
      </ul>
    </div> <!--! end of #title-bar -->
    
    <div class="shadow-bottom shadow-titlebar"></div>

  <!-- Begin of #main-content -->
    <div id="main-content">
      <div class="container_12">
      
      <div class="grid_12">
  
         <?php
           $nip =  htmlspecialchars(mysql_real_escape_string($_POST['nip']));
           $ttl =  htmlspecialchars(mysql_real_escape_string($_POST['ttl']));
           $jenis_kelamin =  htmlspecialchars(mysql_real_escape_string($_POST['jenis_kelamin']));
           $alamat =  htmlspecialchars(mysql_real_escape_string($_POST['alamat']));
           $no_telp =  htmlspecialchars(mysql_real_escape_string($_POST['no_telp']));
           $pendidikan =  htmlspecialchars(mysql_real_escape_string($_POST['pendidikan']));
           $jabatan =  htmlspecialchars(mysql_real_escape_string($_POST['jabatan']));
           $agama =  htmlspecialchars(mysql_real_escape_string($_POST['agama']));
           $poli =  htmlspecialchars(mysql_real_escape_string($_POST['poli']));
           $status =  htmlspecialchars(mysql_real_escape_string($_POST['status']));
            $img = $nip.".jpg";
            // query untuk insert data user baru
            if (isset($_POST['nip'])) {
              $insert = mysql_query("UPDATE uperawat SET 
ttl='$ttl',jenis_kelamin='$jenis_kelamin',alamat='$alamat',no_telp='$no_telp',pendidikan='$pendidikan',jabatan='$jabatan',agama='$agama',poli='$poli',status='$status', img='$img' where nip='$nip'") or die(mysql_error());
             // Simpan di Folder Gambar

            
              if ($insert)

              { copy($_FILES['img']['tmp_name'], "img/gambar/perawat/".$nip.".jpg");
               
                ?>
                 <div class="alert info">
          <span class="hide">x</span><strong>Data Berhasil Diupdate </strong>
        </div>
        <?php
              }
              else {
                 ?>
                 <div class="alert info">
          <span class="hide">x</span><strong>Data Gagal Diupdate <?php mysql_error($insert); ?></strong>
        </div><?php
              }
            }
            ?>

      </div>
    <div class="grid_12">
        <div class="block-border">
          <div class="block-header">
            <h1>Edit Data Perawat</h1>
          </div>
          <form id="validate-form" class="block-content form" action="" method="post" enctype="multipart/form-data">
           <?php 
$t = mysql_query("select * from uperawat where nip='$d'");
while ($r = mysql_fetch_array($t)) {
  ?>

 <p>
              <label >Nip</label>
              <input type="text" readonly name="nip" value="<?php echo $r['nip']; ?>" class="required">
            </p>
             <p>
              <label >Tempat, Tgl Lahir</label>
              <input type="text" name="ttl" value="<?php echo $r['ttl']; ?>" class="required">
            </p>
             <p>
              <label >Jenis Kelamin</label>
              <input type="text" name="jenis_kelamin" value="<?php echo $r['jenis_kelamin']; ?>" class="required">
            </p>
             <p>
              <label >Alamat</label>
              <input type="text" name="alamat" value="<?php echo $r['alamat']; ?>" class="required">
            </p>
             <p>
              <label >No Telp</label>
              <input type="text" name="no_telp" value="<?php echo $r['no_telp']; ?>" class="required">
            </p>
             <p>
              <label >Pendidikan</label>
              <input type="text" name="pendidikan" value="<?php echo $r['pendidikan']; ?>" class="required">
            </p>
             <p>
              <label >Jabatan</label>
              <input type="text" name="jabatan" value="<?php echo $r['jabatan']; ?>" class="required">
            </p>
             <p>
              <label >Agama</label>
              <input type="text" name="agama" value="<?php echo $r['agama']; ?>" class="required">
            </p>
             <p>
              <label >Poli</label>
              <input type="text" name="poli" value="<?php echo $r['poli']; ?>" class="required">
            </p>
            
            <p>
              <label >Status</label>
              <input type="radio" name="status" value="aktif">Aktif             
              <input type="radio" name="status" value="tidak aktif">Tidak Aktif
            </p>
            <p>
              <label >Gambar</label>
                <img src="img\gambar\perawat\<?php echo $r['img']; ?>"><br>
             
              <input type="file" name="img" class="required">
            </p>

  <?php
}
            ?>

            <div class="clear"></div>
            
            <!-- Buttons with actionbar  -->
            <div class="block-actions">
              
              <ul class="actions-right">
                <li><input type="submit" class="button" value="Simpan"></li>
              </ul>
            </div> <!--! end of #block-actions -->
          </form>
         
        </div>
      </div>
            
      <div class="clear height-fix"></div>

    </div></div> <!--! end of #main-content -->
  </div> <!--! end of #main -->
