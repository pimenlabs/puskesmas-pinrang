 <!-- Begin of #main -->
    <div id="main" role="main">
      
      <!-- Begin of titlebar/breadcrumbs -->
    <div id="title-bar">
      <ul id="breadcrumbs">
        <li><a href="main.php?id=home" title="Home"><span id="bc-home"></span></a></li>
        <li class="no-hover"><h2>Managemen Obat</h2></li>
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
         $tgl_masuk = date("Y-m-d");
         $satuan = htmlspecialchars(mysql_real_escape_string($_POST['satuan']));
         $harga = htmlspecialchars(mysql_real_escape_string($_POST['harga']));
         $total = htmlspecialchars(mysql_real_escape_string($_POST['total'])); 
            // query untuk insert data user baru
            if (isset($_POST['id_obat'])) {
              $cekobat = mysql_query("select * from master_obat where id_obat='$id_obat'");
              if (mysql_num_rows($cekobat) == 1) {
                $updateobat = mysql_query("update master_obat set nama='$nama',tgl_masuk ='$tgl_masuk',
                  satuan='$satuan',harga='$harga',total=total+'$total' where id_obat='$id_obat'");
                     $tcata_obat_masuk = mysql_query("insert into obat_masuk values ('$id_obat','$tgl_masuk','$satuan','$total')");
                     if (($updateobat) && ($tcata_obat_masuk))

                            {
                             ?>
                               <div class="alert info">
                        <span class="hide">x</span><strong>Data Berhasil Diupdate</strong>
                      </div>
                      <?php
                            }
                            else {
                               ?>
                               <div class="alert info">
                        <span class="hide">x</span><strong>Data Gagal Diupdate </strong>
                      </div><?php
                            }
              }else{
              $insert = mysql_query("INSERT INTO master_obat VALUES ('$id_obat','$nama',
                '$tgl_masuk','$satuan','$harga','$total')") or die(mysql_error());
               $tcata_obat_masuk = mysql_query("insert into obat_masuk values ('$id_obat','$tgl_masuk','$satuan','$total')");
                         
             // Simpan di Folder Gambar
              if (($insert) && ($tcata_obat_masuk)) {
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
            <h1>Tambah Data Obat</h1>
          </div>
          <form id="validate-form" class="block-content form" action="" method="post" enctype="multipart/form-data">
            <p>
              <label >ID Obat</label>
              <input type="text" name="id_obat" class="required">
            </p>
            <p>
              <label >Nama </label>
              <input type="text" name="nama" class="required">
            </p>
           <p>
              <label >Satuan</label>
            <select name="satuan">
             
              <option value="kapsul">Kapsul</option>
              <option value="tablet">Tablet</option> 
              <option value="tube">Tube</option>
              <option value="botol">Botol</option> 
            </select>
            </p>
            
            <p>
              <label >Harga</label>
              <input type="text" name="harga" class="required">
            </p>
            <p>
              <label >Total</label>
              <input type="text" name="total" class="required">
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
