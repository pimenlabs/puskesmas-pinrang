 <?php  $kl = htmlspecialchars(mysql_real_escape_string($_GET['username'])); ?><!-- Begin of #main -->
    <div id="main" role="main">
      
      <!-- Begin of titlebar/breadcrumbs -->
    <div id="title-bar">
      <ul id="breadcrumbs">
        <li><a href="main.php?id=home" title="Home"><span id="bc-home"></span></a></li>
        <li class="no-hover"><h2>Managemen apoteker</h2></li>
      </ul>
    </div> <!--! end of #title-bar -->
    
    <div class="shadow-bottom shadow-titlebar"></div>

  <!-- Begin of #main-content -->
    <div id="main-content">
      <div class="container_12">
      
      <div class="grid_12">
       
          <?php
           
            $id = htmlspecialchars(mysql_real_escape_string($_POST['id']));
            $username = htmlspecialchars(mysql_real_escape_string($_POST['username']));
           $no_telp = htmlspecialchars(mysql_real_escape_string($_POST['no_telp']));
            $jk = htmlspecialchars(mysql_real_escape_string($_POST['jk']));
           $agama = htmlspecialchars(mysql_real_escape_string($_POST['agama']));

           $jenis_kelamin = htmlspecialchars(mysql_real_escape_string($_POST['jenis_kelamin']));
            
           $alamat = htmlspecialchars(mysql_real_escape_string($_POST['alamat']));
            $status = htmlspecialchars(mysql_real_escape_string($_POST['status']));
            $level = htmlspecialchars(mysql_real_escape_string($_POST['level']));
            $img = $username.".jpg";
            // query untuk insert data user baru
            if (isset($_POST['id'])) {
              $insert = mysql_query("UPDATE uapoteker SET username='$username',no_telp='$no_telp',
              jenis_kelamin='$jenis_kelamin',agama='$agama',alamat='$alamat',status='aktif',level='apoteker',
              img='$img' WHERE nip='$id'") or die(mysql_error()) ;
              if ($insert)
              { ?>
 <script language="JavaScript">alert('Profile Anda Berhasil Diupdate'); 
 document.location='main.php?id=home'
  </script> 
               <?php
                   
                   $_SESSION['img'] = $img;
           
                $_SESSION['username'] = $username;
copy($_FILES['img']['tmp_name'], "img/gambar/apoteker/".$username.".jpg");
                ?>
                 <div class="alert info">
          <span class="hide">x</span><strong>Data Berhasil Diupdate </strong>
        </div>
        <?php
              }
              else {
                 ?>
                 <div class="alert info">
          <span class="hide">x</span><strong>Data Gagal Diupdate </strong>
        </div><?php
              }
            }
            ?>

      </div>
    <div class="grid_12">
        <div class="block-border">
          <div class="block-header">
            <h1>Edit apoteker | <a href="main.php?id=ubahpassword&username=<?php echo $_SESSION['username']; ?>&level=<?php echo $_SESSION['level']; ?>">Ubah Password</a></h1> 
        
          </div>
          <form id="validate-form" class="block-content form" action="" method="post" enctype="multipart/form-data">
          <?php 
          include '../../config/config.php';
         
            $Edituser = mysql_query("select * from uapoteker where username='$kl'");
            while ($Edituser1 = mysql_fetch_array($Edituser)) {
              
          
           ?>
           
              <input type="text" hidden name="id" value="<?php echo $Edituser1['nip']; ?>" class="required">
            </p>     
                 <p >
              <label >Foto apoteker</label>
              <img src="<?php echo "img/gambar/apoteker/".$Edituser1['img']; ?>" hight="250" width="250">
            <br>  <input type="file" name="img"  class="required">
            </p>
            <p>

              <label >Nama</label>
              <input type="text" name="username" value="<?php echo $Edituser1['username']; ?>" class="required">
            </p>
          
             <p >
              <label >No Telpon</label>
              <input type="text" name="no_telp" value="<?php echo $Edituser1['no_telp']; ?>"  class="required">
            </p>
             <p >
              <label >Jenis Kelamin</label>
              <input type="text" name="jenis_kelamin" value="<?php echo $Edituser1['jenis_kelamin']; ?>"  class="required">
            </p>
            <p >
              <label >Agama</label>
              <input type="text" name="agama" value="<?php echo $Edituser1['agama']; ?>"  class="required">
            </p>
             <p >
              <label >Alamat</label>
              <input type="text" name="alamat" value="<?php echo $Edituser1['alamat']; ?>"  class="required">
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
