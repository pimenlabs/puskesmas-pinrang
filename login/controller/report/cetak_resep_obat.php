<?php
	include_once '../../config/config.php';
	$data = mysql_query("select * from udokter");
?>
<html>
<head>
	<title>Print Resep Obat</title>
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
    <h3>Resep Obat</h3>
	 <table border=1 id="table-example" class="table">
              
              <tbody>
                <?php 
                  $muser = mysql_query("select * from resep_obat where id_pasien =".$_GET['id']);
                while ($puser = mysql_fetch_array($muser)) {
                 
                 ?>
                <tr class="gradeX">
                  <td>ID Pasien : </td><td><?php echo $puser['id_pasien']; ?></td></tr>
                <td>Kode Dokter : </td><td><?php echo $puser['kd_dokter']; ?></td></tr>
                  <td>keluhan :</td>  <td><?php echo $puser['keluhan']; ?></td></tr>
                    <tr><td>Diagnosa :</td><td><?php echo $puser['diagnosa']; ?></td>
                  </tr>
                  <tr>   

                  <tr><td>Resep Obat</td><td><?php echo $puser['resep_obat']; ?></td>
               </tr>
              <?php } ?>
              </tbody>
            </table><p style="margin-left:500px" >  Pada tanggal    : <?php echo date('d-m-y'); ?></p>

   </center>

                            
 <script>
        window.load = print_d();
        function print_d(){
            window.print();
        }
    </script>
</body>
</html>