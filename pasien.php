<div class="col-md-8">
	<div class="panel panel-default">
						<div class="panel-heading " style="background-color: #00A550;">
							<h3 class="panel-title">
						<b style="color: #ffffff;">Registrasi Pasien</b>
						</div><div class="panel-body">
<?php 
include_once 'login/config/config.php';
if (isset($_POST['idpasien']) ) {
  
  $idpasien = htmlspecialchars(mysql_real_escape_string($_POST['idpasien']));
  $nama = htmlspecialchars(mysql_real_escape_string($_POST['nama']));
  $jk = htmlspecialchars(mysql_real_escape_string($_POST['jk']));
  $agama = htmlspecialchars(mysql_real_escape_string($_POST['agama']));
  $tgl_lahir = htmlspecialchars(mysql_real_escape_string($_POST['tgl_lahir']));
  $no_telp = htmlspecialchars(mysql_real_escape_string($_POST['no_telp']));
 $identitas = htmlspecialchars(mysql_real_escape_string($_POST['identitas']));


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

              $simpan = mysql_query("INSERT INTO upasien values (null,'$idpasien','$identitas','$nama','$jk','$agama','$tgl_lahir',
                '$no_telp','$usia','$nama_kpl','$hub_pasien','$tgl_daftar','$alamat',
                '$jenis_perawatan','$jenis_poli','$status','-') ") or die(mysql_error());
              
              if ($simpan) {
                           // copy($_FILES['foto']['tmp_name'], "login/img/gambar/pasien/".$idpasien.".jpg");
                     
          ?>
                <div class="alert alert-success">
                <strong>Terima Kasih </strong>  Data Anda Telah Tersimpan,      
          Cetak ID anda <a href="cetaklaporan.php?id=cetak_data&idpasien=<?php echo $_POST['idpasien']; ?>"  target="_blank" class="btn btn-warning">Cetak</a>   
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
<form role="form" method="post" action="" enctype="multipart/form-data">
 <div class="form-group">
    <label for="nama">No KTP / No KK/ No BPJS:</label>
    <input type="text" class="form-control" name="idpasien" onkeypress='return nomor(event)'  required>

  </div>
  <div class="form-group">
    <label for="nama">Pilih Salah Satu Identitas yang digunakan</label>
  <br>
<label class="radio-inline">
  <input type="radio" name="identitas" id="inlineRadio2" value="NIK"> NIK
</label>
<label class="radio-inline">
  <input type="radio" name="identitas" id="inlineRadio3" value="BPJS"> BPJS
</label>
  </div>
  <div class="form-group">
    <label for="nama">Nama Pasien:</label>
    <input type="text" class="form-control" onkeypress='return huruf(event)' name="nama" required>
  </div>
   <div class="form-group">
    <label for="jk">Jenis Kelamin:</label>
  <select  class="form-control" name="jk" >
<option >Pilih</option>
<option value="pria">Pria</option>
<option value="wanita">Wanita</option>
  </select>
  </div>
  <div class="form-group">
    <label for="agama">Agama :</label>
     <select  class="form-control" name="agama">
<option >Pilih</option>
<option value="Islam">Islam</option>
<option value="Kristen">Kristen</option>
<option value="Budha">Budha</option>
<option value="Hindu">Hindu</option>
  </select>
    </div>
 <div class="form-group">
    <label for="nama">Tgl Lahir Pasien:</label>
    <input type="date" class="form-control" name="tgl_lahir" required>
  </div>
  <div class="form-group">
    <label for="nama">No Telpon:</label>
    <input type="text" class="form-control" value="+62"  onkeypress='return nomor(event)' name="no_telp" required>
  </div>
  
  <div class="form-group">
    <label for="nama">Nama Kepala Keluarga :</label>
    <input type="text" class="form-control" onkeypress='return huruf(event)' name="nama_kpl" required>
  </div>
  <div class="form-group">
    <label for="nama">Hubungan Keluarga Pasien:</label>
    <input type="text" class="form-control" name="hub_pasien" onkeypress='return huruf(event)' required>
  </div>
 
<div class="form-group">
    <label for="nama">Jenis Perawatan:</label>
    <select  class="form-control" name="jenis_perawatan" id="jpoli" onchange="jpoli1()">
<option >Pilih</option>
<option value="Rawat Jalan">Rawat Jalan</option>
 ?>
  </select>

  </div>
  


<div class="form-group">
    <label for="nama">Jenis Poli:</label>
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

  </div>  
   <div class="form-group">
    <label for="nama">Alamat Pasien:</label>
   <textarea class="form-control" name="alamat"  onkeypress='return huruf(event)' required></textarea>
  </div>
  <button type="submit" class="btn btn-default">Daftar</button>
</form></div></div>
				</div>

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