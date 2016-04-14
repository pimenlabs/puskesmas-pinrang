
<div class="col-md-8">
	<?php 
$lanjut = htmlspecialchars(mysql_real_escape_string($_GET['lanjut']));
include 'login/config/config.php';
$dberita = mysql_query("select * from berita where idberita='$lanjut' ");
while ($d = mysql_fetch_array($dberita)) {
	?>
	<div class="panel panel-default">
						<div class="panel-heading " style="background-color: #00A550;">
							<h3 class="panel-title">
						<b  style="color: #ffffff;"><?php echo $d['judul']; ?></b>
						</div>
						<div class="panel-body" >
							<h6 >Post: <?php echo $d['user_post']; ?> Waktu: <?php echo $d['tgl_post']; ?></h6>
					<pre style="text-align:justify;">
						<img width="256" height="200"  src="login\img\gambar\berita\<?php echo $d['img']; ?>" style=" float:left; margin-right:10px; ">
<?php echo $d['isi']; ?>
					</pre>
						</div>
						
					</div>
					<?php
}
 ?>
				</div>