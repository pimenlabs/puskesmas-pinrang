 <!-- Begin of #main -->
    <div id="main" role="main">
      
      <!-- Begin of titlebar/breadcrumbs -->
    <div id="title-bar">
      <ul id="breadcrumbs">
        <li><a href="main.php?id=home" title="Home"><span id="bc-home"></span></a></li>
        <li class="no-hover"><h2><b>Managemen Data Pasien</b></h2></li>
      </ul>
    </div> <!--! end of #title-bar -->
    
    <div class="shadow-bottom shadow-titlebar"></div>

  <!-- Begin of #main-content -->
    <div id="main-content">
      <div class="container_12">
      
      <div class="grid_12">
  
         <?php
          
 if (isset($_POST['idpasien'])) {
   $idpasien = htmlspecialchars(mysql_real_escape_string($_POST['idpasien']));
  $nama = htmlspecialchars(mysql_real_escape_string($_POST['nama']));
  $jk = htmlspecialchars(mysql_real_escape_string($_POST['jk']));
  $agama = htmlspecialchars(mysql_real_escape_string($_POST['agama']));
  $tgl_lahir = htmlspecialchars(mysql_real_escape_string($_POST['tgl_lahir']));
  $no_telp = htmlspecialchars(mysql_real_escape_string($_POST['no_telp']));
  $tgl_daftar  = date("y-m-d");
 
  //Menghitung Usia Pasien
  $sqlusia ="SELECT datediff ('$tgl_daftar' , '$tgl_lahir') as selisih";
  $data = mysql_query($sqlusia);
  $baca=mysql_fetch_array($data); 
  $usia=ceil($baca['selisih']/365) . " tahun";

  $nama_kpl = htmlspecialchars(mysql_real_escape_string($_POST['nama_kpl']));
  $hub_pasien = htmlspecialchars(mysql_real_escape_string($_POST['hub_pasien']));
  
  $alamat = htmlspecialchars(mysql_real_escape_string($_POST['alamat']));
  $status = "Tidak Aktif";
  $jenis_perawatan = htmlspecialchars(mysql_real_escape_string($_POST['jenis_perawatan']));
 // $foto = $idpasien.".jpg";
  $d = '';
  $n = '';
  $t = '';
  $jenis_poli = htmlspecialchars(mysql_real_escape_string($_POST['jenis_poli']));
      $cek = mysql_query("select * from upasien ");
      while ( $e = mysql_fetch_array($cek)) {
         $d = $e['idpasien'];
         $n = $e['nama'];
         $t = $e['no_tlp'];

      }
        if (($d == $idpasien) or ($n == $nama) or ($t == $no_telp) ) {
    
?>
      <div class="alert alert-warning">
      <strong>Maaf </strong>  Anda telah melakukan registrasi dengan identitas yang sama
    </div>
          <?php
            }else{
               
                //$cekidpasien = mysql_query("select * from upasien where idpasien='$idpasien'");

              $simpan = mysql_query("INSERT INTO upasien values (null,'$idpasien','$nama','$jk','$agama','$tgl_lahir',
                '$no_telp','$usia','$nama_kpl','$hub_pasien','$tgl_daftar','$alamat',
                '$jenis_perawatan','$jenis_poli','$status','-') ") or die(mysql_error());
              
              if ($simpan) {
                           // copy($_FILES['foto']['tmp_name'], "login/img/gambar/pasien/".$idpasien.".jpg");
                     
          ?>
                <div class="alert alert-success">
                <strong>Terima Kasih </strong>  Data Anda Telah Tersimpan,      
            
             </div>


                    <?php
              }else{
          ?>
                <div class="alert alert-warning">
                <strong>Maaf </strong> Data Anda Tidak Tersimpan
              </div>
                    <?php
              }

  }

 }
 ?>

      </div>
    <div class="grid_12">
        <div class="block-border">
          <div class="block-header">
            <h1>Tambah Pasien</h1>
          </div>
          <form class="block-content form" action="" method="post" enctype="multipart/form-data">
          
            <p>
              <label >No KTP / No KK/ No BPJS:</label>
              <input type="text"  name="idpasien" onkeypress='return nomor(event)'  required>
            </p>
          
            <p>
              <label >Nama Pasien:</label>
              <input type="text" onkeypress='return huruf(event)' name="nama" required>
            </p>
          
            <p>
              <label >Jenis Kelamin</label>
            <select  class="form-control" name="jk" >
<option >Pilih</option>
<option value="pria">Pria</option>
<option value="wanita">Wanita</option>
  </select>

            </p>
<p>    <label for="agama">Agama :</label>
     <select  class="form-control" name="agama">
<option >Pilih</option>
<option value="Islam">Islam</option>
<option value="Kristen">Kristen</option>
<option value="Budha">Budha</option>
<option value="Hindu">Hindu</option>
  </select>
</p>            
<p>    <label for="nama">Tgl Lahir Pasien:</label>
    <input type="date" class="form-control" name="tgl_lahir" required>
</p>
<p>    <label for="nama">No Telpon:</label>
    <input type="text" class="form-control" value="+62"  onkeypress='return nomor(event)' name="no_telp" required>
</p>
<p>    <label for="nama">Nama Kepala Keluarga :</label>
    <input type="text" class="form-control" onkeypress='return huruf(event)' name="nama_kpl" required>
</p>
<p>    <label for="nama">Hubungan Keluarga Pasien:</label>
    <input type="text" class="form-control" name="hub_pasien" onkeypress='return huruf(event)' required>
</p>
<p>    <label for="nama">Jenis Perawatan:</label>
    <select  class="form-control" name="jenis_perawatan" id="jpoli" onchange="jpoli1()">
<option >Pilih</option>
<option value="Rawat Jalan">Rawat Jalan</option>
 ?>
  </select>

</p>
<p>    <label for="nama">Jenis Poli:</label>
    <select readonly  class="form-control"  id="bsa" name="jenis_poli">
<option >Pilih</option>
<?php 
$kate = mysql_query("select * from jenis_poli");
 while ($p = mysql_fetch_array($kate)) {
    ?>
    <option value="<?php echo $p['jenis_poli']; ?>"><?php echo $p['jenis_poli']; ?></option>

    <?php
 }
 ?>
  </select>

</p>
<p>
    <label for="nama">Alamat Pasien:</label>
   <textarea class="form-control" name="alamat"  onkeypress='return huruf(event)' required></textarea>
</p>             <div class="clear"></div>
            
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
     function jpoli1 () {

    var str = document.getElementById('jpoli').value;

      if (str==="Rawat Jalan")
      {
     document.getElementById("bsa").removeAttribute("readonly");  
      
        document.getElementById("bsa").setAttribute("value", " ");  
        }else if (str==="Rawat Inap")
      {
       document.getElementById("bsa").setAttribute("readonly", "yes");  
        document.getElementById("bsa").setAttribute("value", "-");  
      }

    }

     function check () {

    var str = document.getElementById('kat_pasien').value;

      if (str==="Pasien BPJS")
      {
     document.getElementById("bs").removeAttribute("readonly");  
        document.getElementById("bs").setAttribute("value", ""); 
         }else if (str==="Pasien Umum"){
       document.getElementById("bs").setAttribute("readonly", "yes");  

       document.getElementById("bs").setAttribute("value", "-");  
      }

    }

  function nomor(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 65)
            return false;         
         return true;
      }
</script>