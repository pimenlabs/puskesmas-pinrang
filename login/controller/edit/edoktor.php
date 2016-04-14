 <?php $d = htmlspecialchars(mysql_real_escape_string($_GET['iddokter'])); ?>
 <!-- Begin of #main -->
    <div id="main" role="main">
      
      <!-- Begin of titlebar/breadcrumbs -->
    <div id="title-bar">
      <ul id="breadcrumbs">
        <li><a href="main.php?id=home" title="Home"><span id="bc-home"></span></a></li>
        <li class="no-hover"><h2><b>Managemen Data Dokter</b></h2></li>
      </ul>
    </div> <!--! end of #title-bar -->
    
    <div class="shadow-bottom shadow-titlebar"></div>

  <!-- Begin of #main-content -->
    <div id="main-content">
      <div class="container_12">
      
      <div class="grid_12">
  
         <?php
            $nip =  htmlspecialchars(mysql_real_escape_string($_POST['nip']));
            $nama_dokter = htmlspecialchars(mysql_real_escape_string($_POST['nama_dokter']));
            $sip = htmlspecialchars(mysql_real_escape_string($_POST['sip']));
            $kd_poli = htmlspecialchars(mysql_real_escape_string($_POST['kd_poli']));
           
            $jk = htmlspecialchars(mysql_real_escape_string($_POST['jk']));
            $hp = htmlspecialchars(mysql_real_escape_string($_POST['hp']));
            $alamat = htmlspecialchars(mysql_real_escape_string($_POST['alamat']));
            $spesialis = htmlspecialchars(mysql_real_escape_string($_POST['spesialis']));

            $ttl = htmlspecialchars(mysql_real_escape_string($_POST['ttl']));
            $jabatan = htmlspecialchars(mysql_real_escape_string($_POST['jabatan']));
            $pendidikan = htmlspecialchars(mysql_real_escape_string($_POST['pendidikan']));
            $agama = htmlspecialchars(mysql_real_escape_string($_POST['agama']));
            $alamat = htmlspecialchars(mysql_real_escape_string($_POST['alamat']));



           $status = htmlspecialchars(mysql_real_escape_string($_POST['status']));
            $level = $_POST['level'];
            $img = $nip.".jpg";
            // query untuk insert data user baru
            if (isset($_POST['nip'])) {
              $insert = "UPDATE udokter SET 
              nama_dokter='$nama_dokter',ttl='$ttl',jenis_kelamin='$jk',alamat='$alamat',
              hp='$hp',pendidikan='$pendidikan',jabatan='$jabatan',agama='$agama',
              spesialis='$spesialis',kd_poli='$kd_poli',
              level='$level',status='$status',img='$img' WHERE nip='$nip'" or die(mysql_error());
             // Simpan di Folder Gambar

            
              if (mysql_query($insert))

              {

                             copy($_FILES['img']['tmp_name'], "img/gambar/dokter/".$nip.".jpg");
               
                ?>
                 <div class="alert info">
          <span class="hide">x</span><strong>Data Berhasil Disimpan </strong>
        </div>
        <?php
              }
              else {
                 ?>
                 <div class="alert info">
          <span class="hide">x</span><strong>Data Gagal Disimpan <?php mysql_error($insert); ?></strong>
        </div><?php
              }
            }
            ?>

      </div>
    <div class="grid_12">
        <div class="block-border">
          <div class="block-header">
            <h1>Edit User</h1>
          </div>
          <form id="validate-form" class="block-content form" action="" method="post" enctype="multipart/form-data">
           <?php 
           $query = mysql_query("select * from udokter where nip ='$d'");
          while ($p = mysql_fetch_array($query)) {
         ?>
 <p>
              <label >NIP</label>
              <input type="text" name="nip" value="<?php echo $p['nip']; ?>"  class="required">
            </p>
            <p>
              <label >Nama Dokter</label>
              <input type="text" name="nama_dokter" value="<?php echo $p['nama_dokter']; ?>" class="required">
            </p>
                <p>
              <label >Tempat, Tgl Lahir</label>
              <input type="text" name="ttl" value="<?php echo $p['ttl']; ?>" class="required">
            </p>
             <p>
              <label >Jenis Kelamin</label>
            <select name="jk">
              <option value="<?php echo $p['']; ?>" selected><?php echo $p['jenis_kelamin']; ?></option>
              <option value="Pria">Pria</option>
              <option value="Wanita">Wanita</option>
            </select>
            </p>
              <p>
              <label >Alamat</label>
              <input type="text" name="alamat" value="<?php echo $p['alamat']; ?>" class="required">
            </p>
             <p>
              <label >HP</label>
              <input type="text" name="hp" value="<?php echo $p['hp']; ?>" class="required">
            </p>
            <p>
              <label >Pendidikan</label>
              <input type="text" name="pendidikan" value="<?php echo $p['pendidikan']; ?>" class="required">
            </p>
             <p>
              <label >Jabatan</label>
              <input type="text" name="jabatan" value="<?php echo $p['jabatan']; ?>" class="required">
            </p>

            
            <p>
              <label >Agama</label>
              <select name="agama">
                <option value="<?php echo $p['agama']; ?>" selected><?php echo $p['agama']; ?></option>
                <option name="agama" value="islam">Islam</option>
                <option name="agama" value="kristen">kristen</option>
                <option name="agama" value="hindu">hindu</option>
                <option name="agama" value="budda">budda</option>
              </select>
              </p>
            <p>
              <label >Spesialis</label>
              <input type="text" name="spesialis" value="<?php echo $p['spesialis']; ?>" class="required">
            </p>
             <p>
              <label >Kode Poli</label>
              <select name="kd_poli">
                <option selected value="<?php echo $p['kd_poli']; ?>"><?php echo $p['kd_poli']; ?></option>
                <?php $m = mysql_query("select * from jenis_poli");
                    while ($d = mysql_fetch_array($m)) {
                      ?>  
                      <option value="<?php echo $d['jenis_poli']; ?>"><?php echo $d['jenis_poli']; ?></option>
                      <?php
                    }
                 ?>

               </select>
            </p> 
           
         

            <p>
           
              <input type="text" name="level" value="dokter" hidden class="required">
            </p>
            <p>
              <label >Status</label>
              <input type="radio" name="status" value="aktif">Aktif             
              <input type="radio" name="status" value="tidak aktif">Tidak Aktif
            </p>
            <p>
              <label >Gambar</label>
              <img src="img\gambar\dokter\<?php echo $p['img']; ?>"><br>
              <input type="file" name="img" value="<?php echo $p['img']; ?>" class="required">
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
