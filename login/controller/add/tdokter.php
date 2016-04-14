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


            $password = htmlspecialchars(mysql_real_escape_string($_POST['pass']));
            $password = md5($password);

           $status = htmlspecialchars(mysql_real_escape_string($_POST['status']));
            $level = $_POST['level'];
            $img = $nip.".jpg";
            // query untuk insert data user baru
            if (isset($_POST['nip'])) {
              $insert = "INSERT INTO udokter VALUES ('$nip','$nama_dokter','$ttl','$jk','$alamat','$hp',
                '$pendidikan','$jabatan','$agama','$spesialis','$kd_poli','$password','$level','$status','$img')" or die(mysql_error());
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
            <h1>Tambah User</h1>
          </div>
          <form id="validate-form" class="block-content form" action="" method="post" enctype="multipart/form-data">
            <p>
              <label >NIP</label>
              <input type="text" name="nip" class="required">
            </p>
            <p>
              <label >Nama Dokter</label>
              <input type="text" name="nama_dokter" class="required">
            </p>
                <p>
              <label >Tempat, Tgl Lahir</label>
              <input type="text" name="ttl" class="required">
            </p>
             <p>
              <label >Jenis Kelamin</label>
            <select name="jk">
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
              <label >HP</label>
              <input type="text" name="hp" class="required">
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
              <label >Spesialis</label>
              <input type="text" name="spesialis" class="required">
            </p>
             <p>
              <label >Kode Poli</label>
              <select name="kd_poli">
                <option selected>Pilih</option>
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
              <label >Password</label>
              <input type="text" name="pass" class="required">
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
