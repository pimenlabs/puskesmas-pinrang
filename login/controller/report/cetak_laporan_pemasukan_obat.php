<?php
  include_once '../../config/config.php';

$tgl1 = htmlspecialchars(mysql_real_escape_string($_POST['tgl1']));
$bln1 = htmlspecialchars(mysql_real_escape_string($_POST['bln1']));
$thn1 = htmlspecialchars(mysql_real_escape_string($_POST['thn1']));
$tgl2 = htmlspecialchars(mysql_real_escape_string($_POST['tgl2']));
$bln2 = htmlspecialchars(mysql_real_escape_string($_POST['bln2']));
$thn2 = htmlspecialchars(mysql_real_escape_string($_POST['thn2']));
?>
<html>
<head>
  <title>Print Laporan Pemasukan Data Obat</title>
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
    <h3>Laporan Data Pemasukan Obat</h3>
     <h4>Dari Tanggal:
      <?php echo $tgl1."-".$bln1."-".$thn1;  ?>
     Sampai Tanggal:    <?php echo $tgl2."-".$bln2."-".$thn2;  ?></h4>
    <br>

    <table border="1" id="table-example" class="table">
              <thead>
                <tr>
                  <th>No</th><th>ID Obat</th>
                
                  <th>Satuan</th>
                  <th>Total</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php 
                  $muser = mysql_query("

select *from obat_masuk WHERE tgl_masuk >= '$thn1-$bln1-$tgl1' AND tgl_masuk <= '$thn2-$bln2-$tgl2' 
                 ");
              $p=1;
                while ($puser = mysql_fetch_array($muser)) {
                  
                 ?>
                <tr class="gradeX">
                  <td><?php echo $p++; ?></td><td><?php echo $puser['id_obat']; ?></td>
                                 <td><?php echo $puser['satuan']; ?></td>
                  
                 <td><?php echo $puser['total']; ?></td>
                </tr>

              <?php } ?>  <tr>
              <?php 
                  $total = mysql_query("select sum(total) from obat_masuk WHERE tgl_masuk >= '$thn1-$bln1-$tgl1' AND tgl_masuk <= '$thn2-$bln2-$tgl2' ");
                  $htotal =mysql_fetch_array($total);

                     # code...
                  ?>
                  <td align="right" colspan="3">Sub total  </td>
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