 <!-- Begin of #main -->
    <div id="main" role="main">
      
      <!-- Begin of titlebar/breadcrumbs -->
    <div id="title-bar">
      <ul id="breadcrumbs">
        <li><a href="main.php?id=home" title="Home"><span id="bc-home"></span></a></li>
        <li class="no-hover"><h2>Diagnosa Pasien</h2></li>
      </ul>
    </div> <!--! end of #title-bar -->
    
    <div class="shadow-bottom shadow-titlebar"></div>

  <!-- Begin of #main-content -->
    <div id="main-content">
      <div class="container_12">
      
      <div class="grid_12">
  
         <?php
      $id_pasien=  htmlspecialchars(mysql_real_escape_string($_POST['id_pasien']));
      $diagnosa = htmlspecialchars(mysql_real_escape_string($_POST['diagnosa']));
      $keluhan = htmlspecialchars(mysql_real_escape_string($_POST['keluhan']));      // query untuk insert data user baru'
       $tindakan = htmlspecialchars(mysql_real_escape_string($_POST['tindakan']));
       $pemeriksaan = htmlspecialchars(mysql_real_escape_string($_POST['pemeriksaan']));
       $tgl_periksa = date("Y-m-d");
       $kd_dokter = htmlspecialchars(mysql_real_escape_string($_SESSION['username']));
       $poli = htmlspecialchars(mysql_real_escape_string($_POST['poli']));
       $nama = htmlspecialchars(mysql_real_escape_string($_POST['nama']));
      
 $jk = htmlspecialchars(mysql_real_escape_string($_POST['jk']));
  $diagnosa = htmlspecialchars(mysql_real_escape_string($_POST['diagnosa']));
     $jenis_perawatan = htmlspecialchars(mysql_real_escape_string($_POST['jenis_perawatan']));
        $identitas = htmlspecialchars(mysql_real_escape_string($_POST['identitas']));
       

      
       $jam=date("H:i:s");

            if (isset($_POST['id_pasien'])) {
            
         $insert = mysql_query("INSERT INTO rekam_medis values (null,'$kd_dokter','$id_pasien',
          '$nama','$jk','$jenis_perawatan','$poli','$keluhan','$diagnosa','$tindakan','$pemeriksaan','$tgl_periksa')") or die (mysql_error());
             $kunjungan = mysql_query("INSERT INTO kunjungan values (null,'$tgl_periksa','$id_pasien','$nama','$poli','$jam','$identitas' )") OR die(mysql_error());
         
              if (($insert) && ($kunjungan))
              { 
               ?>
                 <div class="alert info">
          <span class="hide">x</span><strong>Data Berhasil Disimpan, 
          <a href="main.php?id=resep_obat&id_pasien=<?php echo $_POST['id_pasien'];?>">Cetak Resep Obat</a>
        </strong>
        </div>
        <?php
              }
              else {
                 ?>
                 <div class="alert info">
          <span class="hide">x</span><strong>Data Gagal Disimpan <?php echo $kunjungan; ?></strong>
        </div><?php
              }
            }
            ?>

      </div>
    <div class="grid_12">
        <div class="block-border">
      
          
          <form id="validate-form" class="block-content form" action="" enctype="multipart/form-data" method="post">
            <p>
              <label >No Antrian :</label>
              <?php
              $js_poli = $_SESSION['jenis_poli'];
        $result = mysql_query("select * from upasien where status='aktif' and poli='$js_poli'");

        $jsArray = "var prdName = new Array();\n";
        echo '<select name="id_pasien" class="form-control" onchange="changeValue(this.value)">'; 
        echo '<option>-------</option>';
        while ($row = mysql_fetch_array($result)) {
        echo '<option value="' . $row['no_antrian'] . '">' . $row['no_antrian'] . '-'. $row['nama'] . '</option>';
        $jsArray .= "prdName['" . $row['no_antrian'] . "'] = {id_pasien:'" . addslashes($row['idpasien']) . "',
        nama:'" . addslashes($row['nama']). "', jenis_kelamin:'" . addslashes($row['jenis_kelamin']). "', 
        tgl_lahir:'" . addslashes($row['tgl_lahir']). "', jenis_perawatan:'" . addslashes($row['jenis_perawatan']). "', 
        poli:'" . addslashes($row['poli']). "', id_bpjs:'" . addslashes($row['bpjs']). "', identitas:'" . addslashes($row['identitas']). "'};\n";  
        }
        echo '</select>';
        ?>
             
            </p>
            <p>
              <label >ID Pasien :</label>
              <input type="text" name="id_pasien"  id="pid_pasien" readonly  class="required">
            </p>
              <p>
              <label >Nama :</label>
              <input type="text" name="nama" id="pnama" readonly  class="required">
            </p>
              <p>
              <label >Jenis Kelamin :</label>
              <input type="text" name="jk"  readonly id="pjk" class="required">
            </p>
              <p>
              <label >Tgl Lahir :</label>
              <input type="text" name="tgl_lahir" readonly id="ptgl_lahir" class="required">
            </p>
              <p>
              <label >Jenis Perawatan</label>
              <input type="text" name="jenis_perawatan" readonly  id="pjenis_perawatan" class="required">
            </p>
              <p>
              <label >Poli</label>
              <input type="text" name="poli" id="ppoli" readonly class="required">
           
           <p>  <p>
              <label >Identitas</label>
           <input type="text" name="identitas" id="ppoli2" readonly class="required">
             
           <p>
            <label>Keluhan :</label>
             <textarea name="keluhan"  class="required">
             </textarea>
              
           </p>   
                   <p>
            <label>Diagnosa :</label>
             <textarea name="diagnosa" class="required">
             </textarea>
              
           </p>
                

           <p>
            <label>Pemeriksaan :</label>
             <textarea name="pemeriksaan" class="required">
             </textarea>
              
           </p>   
            <p>
            <label>Tindakan :</label>
             <textarea name="tindakan" class="required">
             </textarea>
              
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
        document.getElementById('pid_pasien').value = prdName[id].id_pasien;
        document.getElementById('pnama').value = prdName[id].nama;
        document.getElementById('pjk').value = prdName[id].jenis_kelamin;
        document.getElementById('ptgl_lahir').value = prdName[id].tgl_lahir;
        document.getElementById('pjenis_perawatan').value = prdName[id].jenis_perawatan;
        document.getElementById('ppoli').value = prdName[id].poli;
      document.getElementById('ppoli2').value = prdName[id].identitas;
        document.getElementById('pid_bpjs').value = prdName[id].id_bpjs;
   };
  
        </script>      