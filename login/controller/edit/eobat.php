 <?php  $kl = htmlspecialchars(mysql_real_escape_string($_GET['idobat'])); ?><!-- Begin of #main -->
    <div id="main" role="main">
      
      <!-- Begin of titlebar/breadcrumbs -->
    <div id="title-bar">
      <ul id="breadcrumbs">
        <li><a href="main.php?id=home" title="Home"><span id="bc-home"></span></a></li>
        <li class="no-hover"><h2>Managemen Data Obat</h2></li>
      </ul>
    </div> <!--! end of #title-bar -->
    
    <div class="shadow-bottom shadow-titlebar"></div>

  <!-- Begin of #main-content -->
    <div id="main-content">
      <div class="container_12">
      
      <div class="grid_12">
       
          <?php
            $id_obat = htmlspecialchars(mysql_real_escape_string($_POST['id_obat']));
         $nama = htmlspecialchars(mysql_real_escape_string($_POST['nama']));
                 $satuan = htmlspecialchars(mysql_real_escape_string($_POST['satuan']));
         $harga = htmlspecialchars(mysql_real_escape_string($_POST['harga']));
         $total = htmlspecialchars(mysql_real_escape_string($_POST['total'])); 
         $tgl_masuk = htmlspecialchars(mysql_real_escape_string($_POST['tgl_masuk'])); 
            // query untuk insert data user baru
            if (isset($_POST['id_obat'])) {
            $insert = mysql_query("UPDATE master_obat SET nama='$nama',
              tgl_masuk='$tgl_masuk',satuan='$satuan',harga='$harga',total='$total' WHERE id_obat='$id_obat'") or die(mysql_error());
              if ($insert)
              { 
                ?>
                 <div class="alert info">
          <span class="hide">x</span><strong>Data Berhasil Diupdate </strong>
        </div>
        <?php
              }
              else {
                 ?>
                 <div class="alert info">
          <span class="hide">x</span><strong>Data Gagal Diupdate <?php echo $insert; ?></strong>
        </div><?php
              }
            }
            ?>

      </div>
    <div class="grid_12">
        <div class="block-border">
          <div class="block-header">
            <h1>Edit Obat</h1>
          </div>
          <form id="validate-form" class="block-content form" action="" method="post" enctype="multipart/form-data">
          <?php 
          include '../../config/config.php';
         
            $Edituser = mysql_query("select * from master_obat where id_obat='$kl'");
            while ($Edituser1 = mysql_fetch_array($Edituser)) {
              
          
           ?>
           
              <p>
              <label >ID Obat</label>
              <input type="text" name="id_obat" value="<?php echo $Edituser1['id_obat']; ?>" class="required">
            </p>
            <p>
              <label >Nama </label>
              <input type="text" name="nama" value="<?php echo $Edituser1['nama']; ?>"  class="required">
            </p>
           <p>
              <label >Satuan</label>
            <select name="satuan">
              <option value="<?php echo $Edituser1['satuan']; ?>" selected ><?php echo $Edituser1['satuan']; ?> </option>

              <option value="kapsul">Kapsul</option>
              <option value="tablet">Tablet</option> 
              <option value="tube">Tube</option>
              <option value="botol">Botol</option> 
            </select>
            </p>
            
            <p>
              <label >Harga</label>
              <input type="text" name="harga" value="<?php echo $Edituser1['harga']; ?>"  class="required">
            </p><p>
              <input type="text" name="tgl_masuk" hidden value="<?php echo $Edituser1['tgl_masuk']; ?>"  class="required">
            </p>
            <p>
              <label >Total</label>
              <input type="text" name="total" value="<?php echo $Edituser1['total']; ?>"  class="required">
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
