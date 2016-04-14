 <!-- Begin of #main -->
    <div id="main" role="main">
      
      <!-- Begin of titlebar/breadcrumbs -->
    <div id="title-bar">
      <ul id="breadcrumbs">
        <li><a href="main.php?id=home" title="Home"><span id="bc-home"></span></a></li>
        <li class="no-hover"><h2>Managemen Obat  Pasien</h2></li>
      </ul>
    </div> <!--! end of #title-bar -->
    
    <div class="shadow-bottom shadow-titlebar"></div>

  <!-- Begin of #main-content -->
    <div id="main-content">
      <div class="container_12">
      
      <div class="grid_12">
  
         <?php
          $tgl_keluar = date("Y-m-d");
        
         $id_pasien = htmlspecialchars(mysql_real_escape_string($_POST['id_pasien']));
         $id_obat = htmlspecialchars(mysql_real_escape_string($_POST['id_obat']));
         $nama = htmlspecialchars(mysql_real_escape_string($_POST['nama_obat']));
        $satuan = htmlspecialchars(mysql_real_escape_string($_POST['satuan_obat']));
         $total = htmlspecialchars(mysql_real_escape_string($_POST['jumlah_obat'])); 
        

       
            // query untuk insert data user baru
                if (isset($_POST['id_pasien'])) {
            
              $insert = mysql_query("INSERT INTO beri_resep values (null,'$id_pasien','$nama','$satuan','$total')") or die (mysql_error());
                    //catat obat keluar   
              $obat_keluar = mysql_query("INSERT INTO obat_keluar VALUES('$id_obat','$tgl_keluar','$satuan','$total')");
            
            //catat keluar obat
              $keluar_obat = mysql_query("update master_obat set total=total-'$total' where id_obat='$id_obat'");
              if (($insert) && ($obat_keluar) && ($keluar_obat))  
              { 
               ?>
                 <div class="alert info">
          <span class="hide">x</span><strong>Data Berhasil Disimpan        </strong>
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
          <form id="validate-form" class="block-content form" action="" method="post" enctype="multipart/form-data">
            <?php $id=$_GET['ida']; 
              $d = mysql_query("select * from resep_obat where id_pasien='$id'");
              while ($o = mysql_fetch_array($d)) {

             
            ?>
            <p>
              <label >ID Pasien</label>
              <input type="text" name="id_pasien" value="<?php echo $o['id_pasien']; ?>" class="required">
            </p>  

           
              <p>
              <label >Resep Obat Pasien</label>
           <input  type="text"  value="<?php echo $o['resep_obat']; ?>">
            </p>
<?php 
 } ?>

             

  <p>
              <label >ID Obat</label>
                  <?php
        $result = mysql_query("select * from master_obat");

        $jsArray = "var prdName = new Array();\n";
        echo '<select name="id_obat" class="form-control" onchange="changeValue(this.value)">'; 
        echo '<option>-------</option>';
        while ($row = mysql_fetch_array($result)) {
        echo '<option value="' . $row['id_obat'] . '">' . $row['id_obat'] . '-'. $row['nama'] . '</option>';
        $jsArray .= "prdName['" . $row['id_obat'] . "'] = {nama:'" . addslashes($row['nama']) . "',
        satuan:'" . addslashes($row['satuan']). "'};\n";  
        }
        echo '</select>';
        ?>
            </p>

              <p>
              <label >Nama Obat</label>
           <input  type="text" name="nama_obat"   id="pnama" >
            </p>

              <p>
              <label >Satuan Obat</label>
           <input  type="text" name="satuan_obat"  id="psatuan" >
            </p>



              <p>
              <label >Jumlah</label>
           <input  type="text" name="jumlah_obat" >
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
           <div class="grid_12">
        <div class="block-border">
          
          <div class="block-content">
            <table id="table-example" class="table">
              <thead>
                <tr>
               <th>ID Pasien</th>
               
               <th>Nama Obat</th>
               <th>Jumlah Obat</th>
              
               <th>Aksi</th>

              </tr>
              </thead>
              <tbody>
                <?php 
                  $muser = mysql_query("select * from beri_resep where id_pasien='$id'");
                while ($puser = mysql_fetch_array($muser)) {
                 
                 ?>
                <tr class="gradeX">
                  <td><?php echo $puser['id_pasien']; ?></td>
                  <td><?php echo $puser['nama_obat']; ?></td>
                    <td><?php echo $puser['jumlah_obat']; ?></td>

              <td><a href="controller/delete/dberi_resep.php?idresep=<?php echo $puser['id_resep']; ?>&ida=<?php echo $id; ?>">Delete</a></td>
               
                </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
 <script type="text/javascript">
        <?php echo $jsArray;
         echo $jsArrayQ; ?>
        function changeValue(id){
        document.getElementById('pnama').value = prdName[id].nama;
        document.getElementById('psatuan').value = prdName[id].satuan;
       };
  
        </script>      
      <div class="clear height-fix"></div>

    </div></div> <!--! end of #main-content -->
  </div> <!--! end of #main -->
