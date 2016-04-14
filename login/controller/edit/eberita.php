 <?php  $kl = htmlspecialchars(mysql_real_escape_string($_GET['idberita'])); ?><!-- Begin of #main -->
    <div id="main" role="main">
      
      <!-- Begin of titlebar/breadcrumbs -->
    <div id="title-bar">
      <ul id="breadcrumbs">
        <li><a href="main.php?id=home" title="Home"><span id="bc-home"></span></a></li>
        <li class="no-hover"><h2>Managemen Data Berita</h2></li>
      </ul>
    </div> <!--! end of #title-bar -->
    
    <div class="shadow-bottom shadow-titlebar"></div>

  <!-- Begin of #main-content -->
    <div id="main-content">
      <div class="container_12">
      
      <div class="grid_12">
       
          <?php
            $idberita = htmlspecialchars(mysql_real_escape_string($_POST['idberita']));
            $judul = htmlspecialchars(mysql_real_escape_string($_POST['judul']));
            $kategori = htmlspecialchars(mysql_real_escape_string($_POST['kategori']));
            $ulasan = htmlspecialchars(mysql_real_escape_string($_POST['ulasan']));
            $isi = htmlspecialchars(mysql_real_escape_string($_POST['isi']));
            $img = $idberita.".jpg";
            
            // query untuk insert data user baru
            if (isset($_POST['idberita'])) {
              $insert = "UPDATE berita SET  
              judul='$judul', kategori ='$kategori', 
              isi='$isi',ulasan='$ulasan', img='$img' WHERE idberita='$idberita'";
              if (mysql_query($insert))
              { copy($_FILES['img']['tmp_name'], "img/gambar/berita/".$idberita.".jpg");
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
            <h1>Edit Berita</h1>
          </div>
          <form id="validate-form" class="block-content form" action="" method="post" enctype="multipart/form-data">
          <?php 
          include '../../config/config.php';
         
            $Edituser = mysql_query("select * from berita where idberita='$kl'");
            while ($Edituser1 = mysql_fetch_array($Edituser)) {
                     
           ?>
            <input type="text" hidden name="idberita"  value="<?php echo $Edituser1['idberita']; ?>" class="required">
            
                <p>
              <label >Judul</label>
            
              <input type="text" name="judul"  value="<?php echo $Edituser1['judul']; ?>" class="required">
            </p>
            <p >
              <label >Kategori</label>
              <input type="text" name="kategori" value="<?php echo $Edituser1['kategori']; ?>" class="required">
            </p>
             <p >
              <label >Ulasan</label>
           <input type="text" name="ulasan" value="<?php echo $Edituser1['ulasan']; ?>" class="required">
            </p>
             <p >
              <label >Isi</label>
             <input type="text" name="isi" value="<?php echo $Edituser1['isi']; ?>" class="required">
            </p>
   <p >
              <label >Gambar</label>
              <img src="<?php echo "img/gambar/berita/".$Edituser1['img']; ?>" hight="250" width="250">
            <br>  <input type="file" name="img"  class="required">
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
