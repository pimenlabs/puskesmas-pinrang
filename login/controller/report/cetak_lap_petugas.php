<?php
	include_once '../../config/config.php';
	$data = mysql_query("select * from upetugas");
?>
<html>
<head>
	<title>Print Laporan Petugas Registrasi</title>
    <link href="style.css" type="text/css" rel="stylesheet" />


</head>
<body>
    <table align="center">
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
    <h3>Laporan Data Petugas</h3>
	 <table id="table-example" border='1' class="table">
              <thead>
                <tr>
                  <th>Nip</th>
               <th>Nama</th>
               <th>TTL</th>
                <th>JK</th>
                <th>Alamat</th>
                <th>HP</th>
                <th>Jabatan</th>
               <th>Pendidikan</th>
               <th>Agama</th>
              
              </tr>
              </thead>
              <tbody>
                <?php 
                  $muser = mysql_query("select * from upetugas");
                while ($puser = mysql_fetch_array($muser)) {
                 
                 ?>
                <tr class="gradeX">
                  <td><?php echo $puser['nip']; ?></td>
                <td><?php echo $puser['username']; ?></td>
                  <td><?php echo $puser['ttl']; ?></td>
                    <td><?php echo $puser['jenis_kelamin']; ?></td>
                      <td><?php echo $puser['alamat']; ?></td>

                <td><?php echo $puser['no_telp']; ?></td>
                <td><?php echo $puser['jabatan']; ?></td>
                <td><?php echo $puser['pendidikan']; ?></td>
                <td><?php echo $puser['agama']; ?></td>
                
               
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