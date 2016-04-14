
<div class="col-md-8">
	<?php 

include 'login/config/config.php';
$dberita = mysql_query("select * from berita ");
while ($d = mysql_fetch_array($dberita)) {
	?>
	<div class="panel panel-default">
						<div class="panel-heading " style="background-color: #00A550;">
							<h3 class="panel-title">
						<b  style="color: #ffffff;"><?php echo $d['judul']; ?></b>
						</div>
						<div class="panel-body" >
							<h6 >Post: <?php echo $d['user_post']; ?> Waktu: <?php echo $d['tgl_post']; ?></h6>
					<p style="text-align:justify;">
						<img width="120" height="120"  src="login\img\gambar\berita\<?php echo $d['img']; ?>" style=" float:left; margin-right:10px; ">
<?php echo $d['ulasan']; ?>
						 <a href="index.php?id=berita&lanjut=<?php echo $d['idberita']; ?>">Selengkapnya</a>
					</p>
						</div>
						
					</div>
					<?php
}
 ?>
				</div>