 <?php  $kl = htmlspecialchars(mysql_real_escape_string($_GET['username'])); ?><!-- Begin of #main -->
    <div id="main" role="main">
      
      <!-- Begin of titlebar/breadcrumbs -->
    <div id="title-bar">
      <ul id="breadcrumbs">
        <li><a href="main.php?id=home" title="Home"><span id="bc-home"></span></a></li>
        <li class="no-hover"><h2>Ubah Password</h2></li>
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
            $lama = htmlspecialchars(mysql_real_escape_string($_POST['lama']));
           $lama = md5($lama);
            
            $baru = htmlspecialchars(mysql_real_escape_string($_POST['baru']));
            $baru = md5($baru);
           
            $status = htmlspecialchars(mysql_real_escape_string($_POST['status']));
            $level = htmlspecialchars(mysql_real_escape_string($_POST['level']));
          
       $cekPass = mysql_query("select password from ukpl_puskesmas where nip='$id'");
      while ($cekPass1 =mysql_fetch_array($cekPass)) {
        $cekPass2[0] = $cekPass1['password'];
      }
      $paslama =  $cekPass2[0];
       if ($paslama == $lama ) {
          // query untuk insert data user baru
              $insert = "UPDATE ukpl_puskesmas SET password='$baru', level='$level', 
              status= '$status' WHERE nip='$id'";
              if (mysql_query($insert))
              {  
               
               ?>
 <script language="JavaScript">alert('Profile Anda Berhasil Diupdate'); 
 document.location='main.php?id=home'
  </script> 
               <?php
                ?>
                 <div class="alert info">
          <span class="hide">x</span><strong>Password Berhasil Diupdate </strong>
        </div>
        <?php
              }
              else {
                 ?>
                 <div class="alert info">
          <span class="hide">x</span><strong>Password Gagal Diupdate</strong>
        </div><?php
              }
       }else{
         ?>
                 <div class="alert info">
          <span class="hide">x</span><strong>Maaf Password Lama Anda Salah</strong>
        </div>
        <?php
       }
           
            }
            ?>

      </div>
    <div class="grid_12">
        <div class="block-border">
          <div class="block-header">
            <h1>Ubah Password</h1> 
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
              <label >Password Lama</label>
              <input type="text" name="lama" class="required">
            </p>
             <p >
              <label >Password Baru</label>
              <input type="text" name="baru" class="required">
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
