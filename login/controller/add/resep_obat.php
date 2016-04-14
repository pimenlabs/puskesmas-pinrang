 <?php 
$as = htmlspecialchars(mysql_real_escape_string($_GET['id_pasien']));
  ?><!-- Begin of #main -->
    <div id="main" role="main">
      
      <!-- Begin of titlebar/breadcrumbs -->
    <div id="title-bar">
      <ul id="breadcrumbs">
        <li><a href="main.php?id=home" title="Home"><span id="bc-home"></span></a></li>
        <li class="no-hover"><h2>Managemen Resep Obat Pasien</h2></li>
      </ul>
    </div> <!--! end of #title-bar -->
    
    <div class="shadow-bottom shadow-titlebar"></div>

  <!-- Begin of #main-content -->
    <div id="main-content">
      <div class="container_12">
      
      <div class="grid_12">
  
         <?php
        
            // query untuk insert data user baru'
            if (isset($_POST['id_pasien'])) {
             $id_pasien =  htmlspecialchars(mysql_real_escape_string($_POST['id_pasien']));
        $kd_dokter =  htmlspecialchars(mysql_real_escape_string($_POST['kd_dokter']));
        $keluhan =  htmlspecialchars(mysql_real_escape_string($_POST['keluhan']));
             $diagnosa =  htmlspecialchars(mysql_real_escape_string($_POST['diagnosa']));
        $id_obat =  htmlspecialchars(mysql_real_escape_string($_POST['id_obat']));
        $satuan =  htmlspecialchars(mysql_real_escape_string($_POST['satuan']));
         $jumlah =  htmlspecialchars(mysql_real_escape_string($_POST['jumlah']));
        $ket =  htmlspecialchars(mysql_real_escape_string($_POST['ket']));
      
      
         $insert = mysql_query("INSERT INTO resep_obat values ('$id_pasien',
          '$kd_dokter','$keluhan','$diagnosa','$ket')") or die (mysql_error());
         $m_obat= mysql_query("UPDATE master_obat SET total=total-'$jumlah' WHERE id_obat = '$id_obat'");
        $tgl_keluar = date("y-m-d");
              if ($insert)
              { ?>
                 <div class="alert info">
          <span class="hide">x</span><strong>Data Berhasil Disimpan,
<a href="controller/report/cetak_resep_obat.php?id=<?php echo $id_pasien; ?>">Cetak Resep</a>
        </strong>
        </div>
        <?php
              }
              else {
                 ?>
                 <div class="alert info">
          <span class="hide">x</span><strong>Data Gagal Disimpan <?php echo $insert; ?></strong>
        </div><?php
              }
            }
            ?>

      </div>
    <div class="grid_12">
        <div class="block-border">
          
          <form id="validate-form" class="block-content form" action="" enctype="multipart/form-data" method="post">
           <?php 
           $js_poli =  $_SESSION['jenis_poli'];
           $dsa = mysql_query("select * from rekam_medis where id_pasien='$as' and poli='$js_poli'");
           while ($lp = mysql_fetch_array($dsa)) {
            $id_pasien[] = $lp['id_pasien'];
            $kd_dokter[] = $lp['kd_dokter'];
            $keluhan[] = $lp['keluhan'];
            $diagnosa[] = $lp['diagnosa'];
           }
            ?>
            <p>
              <label >ID Pasien</label>
              <input type="text" name="id_pasien" value="<?php echo $id_pasien[0]; ?>" readonly class="required">
            </p>
            
            <p>
              <label >Kode Dokter</label>
              <input type="text" name="kd_dokter" value="<?php echo $kd_dokter[0]; ?>" readonly class="required">
            </p>
            <p>
              <label >Keluhan</label>
               <input type="text" name="keluhan" value="<?php echo $keluhan[0]; ?>" readonly class="required">
           </p>
                        <p>
              <label >Diagnosa</label>
          <input type="text" name="diagnosa" value="<?php echo $diagnosa[0]; ?>" readonly class="required">
           
            </p>  
        
                       <p>
              <label >Resep Obat</label>
             <textarea name="ket" class="required"></textarea>
            
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
 <script type="text/javascript">
        <?php echo $jsArray;
         echo $jsArrayQ; ?>
        function changeValue(id){
        document.getElementById('psatuan').value = prdName[id].satuan;

   };
  
        </script>      