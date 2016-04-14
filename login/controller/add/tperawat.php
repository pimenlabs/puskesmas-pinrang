 <!-- Begin of #main -->
    <div id="main" role="main">
      
      <!-- Begin of titlebar/breadcrumbs -->
    <div id="title-bar">
      <ul id="breadcrumbs">
        <li><a href="main.php?id=home" title="Home"><span id="bc-home"></span></a></li>
        <li class="no-hover"><h2>Managemen Perawat</h2></li>
      </ul>
    </div> <!--! end of #title-bar -->
    
    <div class="shadow-bottom shadow-titlebar"></div>

  <!-- Begin of #main-content -->
    <div id="main-content">
      <div class="container_12">
      
      <div class="grid_12">
  
         <?php
        
           // query untuk insert data user baru
            if (isset($_POST['nip'])) {
               $nip = htmlspecialchars(mysql_real_escape_string($_POST['nip']));
               $ttl = htmlspecialchars(mysql_real_escape_string($_POST['ttl']));
               $jenis_kelamin = htmlspecialchars(mysql_real_escape_string($_POST['jenis_kelamin']));
               $alamat = htmlspecialchars(mysql_real_escape_string($_POST['alamat']));
               $no_telp = htmlspecialchars(mysql_real_escape_string($_POST['no_telp']));
               $pendidikan = htmlspecialchars(mysql_real_escape_string($_POST['pendidikan']));
               $jabatan = htmlspecialchars(mysql_real_escape_string($_POST['jabatan']));
               $agama = htmlspecialchars(mysql_real_escape_string($_POST['agama']));
               $poli = htmlspecialchars(mysql_real_escape_string($_POST['poli']));
               $status = htmlspecialchars(mysql_real_escape_string($_POST['status']));
              $img = $nip.".jpg";
              $cekperawat = mysql_query("select * from uperawat where nip='$nip'");
               
                    if (mysql_num_rows($cekperawat) == 1) {
                   ?>
                       <div class="alert info">
                       <span class="hide">x</span><strong>Nip <?php echo $nip; ?> sudah ada</strong>
                     </div>
                    <?php

                  
                  }else{

                            $insert = mysql_query("INSERT INTO uperawat VALUES ('$nip','$ttl','$jenis_kelamin',
                            '$alamat','$no_telp','$pendidikan','$jabatan','$agama','$poli',
                            '$status','$img')") or die(mysql_error());

                         // Simpan di Folder Gambar
                          if ($insert) {
                copy($_FILES['img']['tmp_name'], "img/gambar/perawat/".$nip.".jpg");
              
                           ?>
                             <div class="alert info">
                             <span class="hide">x</span><strong>Data Berhasil Disimpan</strong>
                           </div>
                          <?php
                          }else {
                             ?>
                             <div class="alert info">
                                    <span class="hide">x</span><strong>Data Gagal Disimpan </strong>
                               </div><?php
                          }
                  }
          }

            ?>

      </div>
    <div class="grid_12">
        <div class="block-border">
          <div class="block-header">
            <h1>Tambah Data Perawat</h1>
          </div>
          <form id="validate-form" class="block-content form" action="" method="post" enctype="multipart/form-data">
            <p>
              <label >Nip</label>
              <input type="text" name="nip" class="required">
            </p>
            <p>
              <label >Tempat, Tgl lahir</label>
              <input type="text" name="ttl" class="required">
            </p>
           <p>
              <label >Jenis Kelamin</label>
            <select name="jenis_kelamin">
              <option>Pilih</option>
              <option value="Pria">Pria</option>
              <option value="Wanita">Wanita</option>
            </select>
            </p>
            <p>
              <label >Alamat</label>
              <input type="text" name="alamat" class="required">
            </p>
            <p>
              <label >No Telpon</label>
              <input type="text" name="no_telp" class="required">
            </p>
            <p>
              <label >Pendidikan</label>
              <input type="text" name="pendidikan" class="required">
            </p>
            <p>
              <label >Jabatan</label>
              <input type="text" name="jabatan" class="required">
            </p>
            <p>
              <label >Agama</label>
              <select name="agama">
                <option name="agama" value="islam">Islam</option>
                <option name="agama" value="kristen">kristen</option>
                <option name="agama" value="hindu">hindu</option>
                <option name="agama" value="budda">budda</option>
              </select>
              </p>
            <p>
              <label >Poli</label>
              <select name="poli" >

            
<?php 
$jenisp = mysql_query("select * from jenis_poli");
while ($asd = mysql_fetch_array($jenisp)) {
  ?>
<option value="<?php echo $asd['jenis_poli']; ?>"> <?php echo $asd['jenis_poli']; ?></option>

  <?php
}
 ?>  </select>


            </p>
             <p>
              <label >Status</label>
              <input type="radio" name="status" value="aktif">Aktif             
              <input type="radio" name="status" value="tidak aktif">Tidak Aktif
            </p>
            <p>
              <label >Gambar</label>
              <input type="file" name="img" class="required">
            </p>

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
