<?php 
include_once 'login/config/config.php';
  $idpasien = htmlspecialchars(mysql_real_escape_string($_GET['idpasien']));
$m =mysql_query("select * from upasien where idpasien='".$idpasien."'");

 ?>

<html>
<head>
	<title>Print Kartu Pasien</title>
    <link href="style.css" type="text/css" rel="stylesheet" />


</head>
<body>
    <table align="center" >
        <tr><td> <img style="margin-top:-20px" src="login/img/logo.jpg" height="100" width="100" style="align"></td>
         <td>
<center>
<h4>PEMERINTAH KABUPATEN PINRANG
 <br>DINAS KESEHATAN
 <br>  PUSKESMAS TUPPU KEC. LEMBANG</h4>
<h5 >Alamat : Jl. Poros Pinrang  Polman Tuppu Km.38 Kec. Lembang Kab. Pinrang Telp. ( 0421)  KP. 91254
</h5></center>
            </td><td><img style="margin-top:-20px" src="img/logo1.jpg" height="100" width="100" style="align"></td>
      </td>
        </tr>
        <tr><td colspan="3"><hr style="margin-top:-20px"></td></tr></table>   
<center>
    <h3>Kartu Pasien</h3>
	  <table border="1" id="table-example" class="table">
              <thead>
                <tr>
                  <th>No Antrian</th>
                 <th>ID</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Agama</th>
                  <th>Usia</th>
                  <th>Jenis Perawatan</th>
                  <th>Poli</th>

                </tr>
              </thead>
              <tbody>
                <?php 
              $p=1;
                while ($puser = mysql_fetch_array($m)) {
                  
                 ?>
                <tr class="gradeX">
                  <td><?php echo $puser['no_antrian']; ?></td>
                  <td><?php echo $puser['idpasien']; ?></td>
                  <td><?php echo $puser['nama']; ?></td>
                  <td><?php echo $puser['jenis_kelamin']; ?></td>
                  <td><?php echo $puser['agama']; ?></td>
                  <td><?php echo $puser['usia']; ?></td>
                  <td><?php echo $puser['jenis_perawatan']; ?></td>
                  <td><?php echo $puser['poli']; ?></td>
                 
                </tr>
             
              </tbody>
            </table>
   </center>

<p style="margin-left:500px" >   Tanggal daftar    : <?php echo $puser['tgl_daftar']; ?><br>
                                </p> <?php } ?>

                            
 <script>
        window.load = print_d();
        function print_d(){
            window.print();
        }
    </script>
</body>
</html>