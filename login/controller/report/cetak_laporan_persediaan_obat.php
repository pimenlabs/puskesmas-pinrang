<?php
	include_once '../../config/config.php';
	$data = mysql_query("select * from uapoteker");
?>
<html>
<head>
	<title>Print Laporan Persediaan Data Obat</title>
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
    <h3>Laporan Data Persediaan Obat</h3><br>

	  <table border="1" id="table-example" class="table">
              <thead>
                <tr>
                  <th>No</th><th>ID Obat</th>
                  <th>Nama</th>
                  <th>Satuan</th>
                  <th>Harga</th>
                  <th>Total</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php 
                  $muser = mysql_query("select * from master_obat");
              $p=1;
                while ($puser = mysql_fetch_array($muser)) {
                  
                 ?>
                <tr class="gradeX">
                  <td><?php echo $p++; ?></td><td><?php echo $puser['id_obat']; ?></td>
                  <td><?php echo $puser['nama']; ?></td>
                  <td><?php echo $puser['satuan']; ?></td>
                  <td><?php echo $puser['harga']; ?></td>
                 <td><?php echo $puser['total']; ?></td>
                </tr>

              <?php } ?>  <tr>
              <?php 
                  $total = mysql_query("select sum(total) from master_obat");
                  $htotal =mysql_fetch_array($total);

                     # code...
                  ?>
                  <td align="right" colspan="5">Sub total  </td>
                  <td><?php echo $htotal['sum(total)']; ?></td></tr>

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