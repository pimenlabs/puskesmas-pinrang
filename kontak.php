<div class="col-md-8">
	<div class="panel panel-default">
						<div class="panel-heading " style="background-color: #00A550;">
							<h3 class="panel-title">
						<b style="color: #ffffff;">Hubungi Kami</b>
						</div>
            <div class="panel-body">
<?php 
include 'login/config/config.php';
if (isset($_POST['nama'])) {
  # code...
      $nama = htmlspecialchars(mysql_real_escape_string($_POST['nama']));
      $hp = htmlspecialchars(mysql_real_escape_string($_POST['hp']));
      $email = htmlspecialchars(mysql_real_escape_string($_POST['email']));
      $saran = htmlspecialchars(mysql_real_escape_string($_POST['saran']));
$cek = mysql_query("select * from inbox where email='$email'");
$q = "";
while ($d = mysql_fetch_array($cek)) {
  $q = $d['email'];
}
  if ($q == $_POST['email']) {
 ?>
      <div class="alert alert-warning">
      <strong>Info </strong> email anda telah digunakan
    </div>
          <?php
  }else{

      $simpan = mysql_query("INSERT into inbox values (null,'$nama','$hp','$email','$saran')") or die(mysql_error());
      if ($simpan) {
          ?>
      <div class="alert alert-success">
      <strong>Terima Kasih</strong>  Data Anda telah tersimpan
    </div>
          <?php
      }else{
    ?>
      <div class="alert alert-success">
      <strong>Maaf </strong>  Data Anda belum tersimpan
    </div>
    <?php

}
  }
}
 ?>
<form role="form" method="post" action="">

  <div class="form-group">
    <label for="nama">Nama :</label>
    <input type="text" class="form-control" name="nama" required>
  </div>
  <div class="form-group">
    <label for="nama">Hp :</label>
    <input type="text" class="form-control" name="hp" required>
  </div>
  <div class="form-group">
    <label for="nama">Email :</label>
    <input type="email" placeholder="Ketik email kosong@puskesmas-tuppu.com, apabila tidak memilii email" class="form-control" name="email" required>
  </div>
  <div class="form-group">
    <label for="nama">Saran :</label>
    <textarea class="form-control" name="saran"></textarea>
  </div>
 
  <button type="submit" class="btn btn-default">Kirim</button>
</form>
</div></div>
				</div>