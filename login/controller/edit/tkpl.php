 <?php 
$d = htmlspecialchars(mysql_real_escape_string($_GET['nip']));
  ?>
 <!-- Begin of #main -->
    <div id="main" role="main">
      
      <!-- Begin of titlebar/breadcrumbs -->
    <div id="title-bar">
      <ul id="breadcrumbs">
        <li><a href="main.php?id=home" title="Home"><span id="bc-home"></span></a></li>
        <li class="no-hover"><h2><b>Managemen Data Kepala Puskesmas</b></h2></li>
      </ul>
    </div> <!--! end of #title-bar -->
    
    <div class="shadow-bottom shadow-titlebar"></div>

  <!-- Begin of #main-content -->
    <div id="main-content">
      <div class="container_12">
      
      <div class="grid_12">
  
         <?php
           $nip =  htmlspecialchars(mysql_real_escape_string($_POST['nip']));
            $nama = htmlspecialchars(mysql_real_escape_string($_POST['nama']));
            $ttl = htmlspecialchars(mysql_real_escape_string($_POST['ttl']));
           
            $jk = htmlspecialchars(mysql_real_escape_string($_POST['jk']));
            $hp = htmlspecialchars(mysql_real_escape_string($_POST['hp']));
            $alamat = htmlspecialchars(mysql_real_escape_string($_POST['alamat']));
          
            $jabatan = htmlspecialchars(mysql_real_escape_string($_POST['jabatan']));
            $pendidikan = htmlspecialchars(mysql_real_escape_string($_POST['pendidikan']));
            $agama = htmlspecialchars(mysql_real_escape_string($_POST['agama']));


           $status = htmlspecialchars(mysql_real_escape_string($_POST['status']));
            $level = $_POST['level'];
            $img = $nip.".jpg";
            // query untuk insert data user baru
            if (isset($_POST['nip'])) {
              $insert = mysql_query("UPDATE ukpl_puskesmas SET username = '$nama',
              ttl='$ttl',jenis_kelamin='$jk',alamat='$alamat',
              no_telp='$hp',pendidikan='$pendidikan',jabatan='$jabatan',
              agama='$agama',status='$status',
              level = '$level', img='$img' where nip='$nip'") or die(mysql_error());
             // Simpan di Folder Gambar

            
              if ($insert)

              { copy($_FILES['img']['tmp_name'], "img/gambar/kepala/".$nip.".jpg");
               
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
$t = mysql_query("select * from ukpl_puskesmas where nip='$d'");
while ($r = mysql_fetch_array($t)) {
  ?>

 <p>
              <label >NIP</label>
              <input type="text" name="nip" value="<?php echo $r['nip']; ?>" class="required">
            </p>
            <p>
              <label >Nama </label>
              <input type="text" name="nama" value="<?php echo $r['username']; ?>" class="required">
            </p>
                <p>
              <label >Tempat, Tgl Lahir</label>
              <input type="text" name="ttl" value="<?php echo $r['ttl']; ?>" class="required">
            </p>
             <p>
              <label >Jenis Kelamin</label>
            <select name="jk">
              <option value="<?php echo $r['jenis_kelamin']; ?>"><?php echo $r['jenis_kelamin']; ?> </option>
              <option value="Pria">Pria</option>
              <option value="Wanita">Wanita</option>
            </select>
            </p>
              <p>
              <label >Alamat</label>
              <input type="text" name="alamat" value="<?php echo $r['alamat']; ?>" class="required">
            </p>
             <p>
              <label >HP</label>
              <input type="text" name="hp" value="<?php echo $r['no_telp']; ?>" class="required">
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
              <select name="agama">
                <option value="<?php echo $r['agama']; ?>"><?php echo $r['agama']; ?></option>
                <option name="agama" value="islam">Islam</option>
                <option name="agama" value="kristen">kristen</option>
                <option name="agama" value="hindu">hindu</option>
                <option name="agama" value="budda">budda</option>
              </select>
              </p>
            
         
            <p>
           
              <input type="text" name="level" value="kepala puskesmas" hidden class="required">
            </p>
            <p>
              <label >Status</label>
              <input type="radio" name="status" value="aktif">Aktif             
              <input type="radio" name="status" value="tidak aktif">Tidak Aktif
            </p>
            <p>
              <label >Gambar</label>
                <img src="img\gambar\kepala\<?php echo $r['img']; ?>"><br>
             
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
