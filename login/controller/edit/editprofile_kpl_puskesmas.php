 <?php  $kl = htmlspecialchars(mysql_real_escape_string($_GET['username'])); ?><!-- Begin of #main -->
    <div id="main" role="main">
      
      <!-- Begin of titlebar/breadcrumbs -->
    <div id="title-bar">
      <ul id="breadcrumbs">
        <li><a href="main.php?id=home" title="Home"><span id="bc-home"></span></a></li>
        <li class="no-hover"><h2>Managemen kepala</h2></li>
      </ul>
    </div> <!--! end of #title-bar -->
    
    <div class="shadow-bottom shadow-titlebar"></div>

  <!-- Begin of #main-content -->
    <div id="main-content">
      <div class="container_12">
      
      <div class="grid_12">
       
          <?php
           
          
            if (isset($_POST['id'])) {
               $id = htmlspecialchars(mysql_real_escape_string($_POST['id']));
            $username = htmlspecialchars(mysql_real_escape_string($_POST['username']));
            //$password = htmlspecialchars(mysql_real_escape_string($_POST['password']));
            //$password = md5($password);
            $status = htmlspecialchars(mysql_real_escape_string($_POST['status']));
            $level = htmlspecialchars(mysql_real_escape_string($_POST['level']));
          
            $ttl = htmlspecialchars(mysql_real_escape_string($_POST['ttl']));
            $jenis_kelamin = htmlspecialchars(mysql_real_escape_string($_POST['jenis_kelamin']));
            $alamat = htmlspecialchars(mysql_real_escape_string($_POST['alamat']));
            $no_telp = htmlspecialchars(mysql_real_escape_string($_POST['no_telp']));
            $pendidikan = htmlspecialchars(mysql_real_escape_string($_POST['pendidikan']));
            $jabatan = htmlspecialchars(mysql_real_escape_string($_POST['jabatan']));
            $agama = htmlspecialchars(mysql_real_escape_string($_POST['agama']));
            
            $img = $username.".jpg";
            // query untuk insert data user baru
              $insert = "UPDATE ukpl_puskesmas SET username='$username',
              ttl='$ttl',
              jenis_kelamin='$jenis_kelamin', 
              alamat='$alamat',
              no_telp='$no_telp',
              pendidikan='$pendidikan',
              jabatan='$jabatan',
              agama='$agama',
               level='$level', 
              status= '$status' WHERE nip='$id'";
              if (mysql_query($insert))
              {  
               
               ?>
 <script language="JavaScript">alert('Profile Anda Berhasil Diupdate'); 
 document.location='main.php?id=home'
  </script> 
               <?php
                $_SESSION['username'] = $username;
      $_SESSION['img'] = $img;
           

                copy($_FILES['img']['tmp_name'], "img/gambar/kepala/".$username.".jpg");
                ?>
                 <div class="alert info">
          <span class="hide">x</span><strong>Data Berhasil Diupdate </strong>
        </div>
        <?php
              }
              else {
                 ?>
                 <div class="alert info">
          <span class="hide">x</span><strong>Data Gagal Diupdate</strong>
        </div><?php
              }
            }
            ?>

      </div>
    <div class="grid_12">
        <div class="block-border">
          <div class="block-header">
            <h1>Edit kepala | <a href="main.php?id=ubahpassword&username=<?php echo $_SESSION['username']; ?>&level=<?php echo $_SESSION['level']; ?>">Ubah Password</a></h1> 
          </div>
          <form id="validate-form" class="block-content form" action="" method="post" enctype="multipart/form-data">
          <?php 
          include '../../config/config.php';
         
            $Edituser = mysql_query("select * from ukpl_puskesmas where username='$kl'");
            while ($Edituser1 = mysql_fetch_array($Edituser)) {
              
           ?>
           <p>
              <input type="text" hidden name="id" value="<?php echo $Edituser1['nip']; ?>" class="required">
            </p>     
                <p >
              <label >Foto kepala</label>
              <img src="<?php echo "img/gambar/kepala/".$Edituser1['img']; ?>" hight="250" width="250">
            <br>  <input type="file" name="img"  class="required">
            </p>
             <p>

              <label >Nama</label>
              <input type="text" name="username" value="<?php echo $Edituser1['username']; ?>" class="required">
            </p>
           <label >Tempat, Tgl Lahir</label>
              <input type="text" name="ttl" value="<?php echo $Edituser1['ttl']; ?>" class="required">
            </p>
              <label >Jenis Kelamin</label>
              <input type="text" name="jenis_kelamin" value="<?php echo $Edituser1['jenis_kelamin']; ?>" class="required">
            </p>   
              <label >alamat</label>
              <input type="text" name="alamat" value="<?php echo $Edituser1['alamat']; ?>" class="required">
            </p> 
              <label >no_telp</label>
              <input type="text" name="no_telp" value="<?php echo $Edituser1['no_telp']; ?>" class="required">
            </p>  

              <label >pendidikan</label>
              <input type="text" name="pendidikan" value="<?php echo $Edituser1['pendidikan']; ?>" class="required">
            </p>     
              <label >jabatan</label>
              <input type="text" name="jabatan" value="<?php echo $Edituser1['jabatan']; ?>" class="required">
            </p>
              <label >agama</label>
              <input type="text" name="agama" value="<?php echo $Edituser1['agama']; ?>" class="required">
            </p>
             <p >
              
              <input type="text" hidden name="status" value="<?php echo $Edituser1['status']; ?>"  class="required">
            </p>
                      <p >
              <input type="text" name="level" hidden value="<?php echo $Edituser1['level']; ?>"  class="required">
            </p>
            
            <?php   } ?>

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
