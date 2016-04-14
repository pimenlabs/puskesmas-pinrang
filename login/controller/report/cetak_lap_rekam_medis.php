<?php
	include_once '../../config/config.php';
  $tgl1 = htmlspecialchars(mysql_real_escape_string($_POST['tgl1']));
$bln1 = htmlspecialchars(mysql_real_escape_string($_POST['bln1']));
$thn1 = htmlspecialchars(mysql_real_escape_string($_POST['thn1']));
$tgl2 = htmlspecialchars(mysql_real_escape_string($_POST['tgl2']));
$bln2 = htmlspecialchars(mysql_real_escape_string($_POST['bln2']));
$thn2 = htmlspecialchars(mysql_real_escape_string($_POST['thn2']));
$kd = htmlspecialchars(mysql_real_escape_string($_POST['kd_dokter']));


?>
<html>
<head>
	<title>Print Laporan Rekam Medis</title>
    <link href="style.css" type="text/css" rel="stylesheet" />


</head>
<body>
    <table align="center" >
            <tr><td> <img style="margin-top:-20px" src="../../img/logo.jpg" height="100" width="100" style="align"></td>
         <td>
<center>
<h4>PEMERINTAH KABUPATEN PINRANG
 <br>DINAS KESEHATAN
 <br>  PUSKESMAS TUPPU KEC. LEMBANG</h4>
<h5 >Alamat : Jl. Poros Pinrang – Polman Tuppu Km.38 Kec. Lembang Kab. Pinrang Telp. ( 0421)  KP. 91254
</h5></center>
            </td><td><img style="margin-top:-20px" src="../../img/logo1.jpg" height="100" width="100" style="align"></td>
      </td>
        </tr>
        <tr><td colspan="3"><hr style="margin-top:-20px"></td></tr></table>   
<center>
    <h3>Laporan Rekam Medis</h3><br>
 <h4>Dari Tanggal:
      <?php echo $tgl1."-".$bln1."-".$thn1;  ?>
     Sampai Tanggal:    <?php echo $tgl2."-".$bln2."-".$thn2;  ?></h4>
    
	  <table border="1" id="table-example" class="table">
              <thead>
                <tr>
                  <th>ID Rekam Medik</th>
                  <th>Kode Dokter</th>
                  <th>ID Pasien</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Jenis Perawatan</th>

                  <th>Poli</th>
                  
                  <th>Diagnosa</th>
                  <th>Tgl Pemeriksaan</th>
                 
                </tr>
              </thead>
              <tbody>
                <?php 
                  $muser = mysql_query("

select *from rekam_medis WHERE tgl_pemeriksaan >= '$bln1-$tgl1-$thn1' AND tgl_pemeriksaan <= '$bln2-$tgl2-$thn2' AND kd_dokter='Dr. Nirwana' 
                   

                    ");
              
                while ($puser = mysql_fetch_array($muser)) {
                  
                 ?>
                <tr class="gradeX">
                  <td><?php echo $puser['idrekam_medik']; ?></td>
                  <td><?php echo $puser['kd_dokter']; ?></td>
                  <td><?php echo $puser['id_pasien']; ?></td>
                   <td><?php echo $puser['nama']; ?></td>
                    <td><?php echo $puser['jk']; ?></td>
                     <td><?php echo $puser['jenis_perawatan']; ?></td>
                  
                      <td><?php echo $puser['poli']; ?></td>     <td><?php echo $puser['diagnosa']; ?></td>
                  <td><?php echo $puser['tgl_pemeriksaan']; ?></td>
                </tr>

              <?php } ?> 

              </tbody>
            </table>
   </center>

<p style="margin-left:500px" >  Pada tanggal    : <?php echo date('d-m-y'); ?><br>
                                Kepala Puskesmas TUPPU <br>
                                <br><br><br>

                                    <?php 
                                    $d = mysql_query("select * from ukpl_puskesmas");
                                     while ($m = mysql_fetch_array($d)) {
                                         echo "<u>".$m['username']."</u><br>".$m['nip'];

                                     }?></p>

                            
 <script>
        window.load = print_d();
        function print_d(){
            window.print();
        }
    </script>
</body>
</html>