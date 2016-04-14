 <?php  $kl = htmlspecialchars(mysql_real_escape_string($_GET['username'])); ?><!-- Begin of #main -->
    <div id="main" role="main">
      
      <!-- Begin of titlebar/breadcrumbs -->
    <div id="title-bar">
      <ul id="breadcrumbs">
        <li><a href="main.php?id=home" title="Home"><span id="bc-home"></span></a></li>
        <li class="no-hover"><h2>Managemen Profile</h2></li>
      </ul>
    </div> <!--! end of #title-bar -->
    
    <div class="shadow-bottom shadow-titlebar"></div>

  <!-- Begin of #main-content -->
    <div id="main-content">
      <div class="container_12">
      
      <div class="grid_12">
       
          <?php
           
            $id = mysql_real_escape_string($_POST['id_petugas']);
            $username = mysql_real_escape_string($_POST['username']);
            $password = mysql_real_escape_string($_POST['password']);
            $password = md5($password);
            $status = mysql_real_escape_string($_POST['status']);
            $level = mysql_real_escape_string($_POST['level']);
            $img = $username.".jpg";
            // query untuk insert data user baru
            if (isset($_POST['id'])) {
              $insert = "UPDATE upetugas SET username='$username', password='$password',  status='$status', level='$level', status= '$status', img='$img' WHERE id_petugas='$id'";
              if (mysql_query($insert))
              {       $_SESSION['img'] = $img;
           
                $_SESSION['username'] = $username;

copy($_FILES['img']['tmp_name'], "img/gambar/profile/".$username.".jpg");
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
            <h1>Edit Profile</h1>
          </div>
          <form id="validate-form" class="block-content form" action="" method="post" enctype="multipart/form-data">
          <?php 
          include '../../config/config.php';
         
            $Edituser = mysql_query("select * from upetugas where username='$kl'");
            while ($Edituser1 = mysql_fetch_array($Edituser)) {
              
          
           ?>
           
              <input type="text" hidden name="id" value="<?php echo $Edituser1['id_petugas']; ?>" class="required">
            </p>     
                 <p >
              <label >Foto Profile</label>
              <img src="<?php echo "img/gambar/petugas/".$Edituser1['img']; ?>" hight="250" width="250">
            <br>  <input type="file" name="img"  class="required">
            </p>
            <p>

              <label >Nama</label>
              <input type="text" name="username" value="<?php echo $Edituser1['username']; ?>" class="required">
            </p>
            <p >
              <label >Password</label>
              <input type="text" name="password" value="<?php echo $Edituser1['password']; ?>"  class="required">
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
