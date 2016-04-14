 <!-- Begin of #main -->
    <div id="main" role="main">
      
      <!-- Begin of titlebar/breadcrumbs -->
    <div id="title-bar">
      <ul id="breadcrumbs">
        <li><a href="main.php?id=home" title="Home"><span id="bc-home"></span></a></li>
        <li class="no-hover"><h2>Kunjungan Pasien</h2></li>
      </ul>
    </div> <!--! end of #title-bar -->
    
    <div class="shadow-bottom shadow-titlebar"></div>

  <!-- Begin of #main-content -->
    <div id="main-content">
      <div class="container_12">
      
    <div class="grid_12">

        <div class="block-border">
         <div class="block-header">
            <h1> 

            Cetak Laporan Kunjungan Pasien</h1> <span></span>
          </div>
          <form id="validate-form" class="block-content form" action="controller/report/cetak_kunjungan.php" method="post">
         <br>

             <table>
              <tr>
                <td>
           <label>Dari Tanggal</label></td>
<td>
 <select name="tgl1" id="level">
                <option>Tgl</option>
                <?php 
                  for ($i=1; $i <= 31; $i++) { 
                ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php
                  }

                 ?>
              </select>
</td>
<td>
   <select name="bln1">
   <option>Bulan</option>
<option  value="01" > Januari </option>
<option  value="02" > Februari  </option>
<option  value="03" > Maret </option>
<option  value="04" > April </option>
<option  value="05" > Mei </option>
<option  value="06" > Juni  </option>
<option  value="07" > Juli  </option>
<option  value="08" > Agustus </option>
<option  value="09" > September </option>
<option  value="10" > Oktober </option>
<option  value="11" > Nopember  </option>
<option  value="12" > Desember  </option>

   </select>
</td>
<td>
 <select name="thn1" id="level">
                <option>Tahun</option>
                <?php 
                  for ($ii=2000; $ii <= 2015; $ii++) { 
                ?>
                <option value="<?php echo $ii; ?>"><?php echo $ii; ?></option>
                <?php
                  }

                 ?>
              </select>
</td></tr>
<tr>
      <td>
           <label>Sampai Tanggal</label></td>
<td>
 <select name="tgl2" id="level">
                <option>Tgl</option>
                <?php 
                  for ($i=1; $i <= 31; $i++) { 
                ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php
                  }

                 ?>
              </select>
</td>
<td>
   <select name="bln2">
   <option>Bulan</option>
<option  value="01" > Januari </option>
<option  value="02" > Februari  </option>
<option  value="03" > Maret </option>
<option  value="04" > April </option>
<option  value="05" > Mei </option>
<option  value="06" > Juni  </option>
<option  value="07" > Juli  </option>
<option  value="08" > Agustus </option>
<option  value="09" > September </option>
<option  value="10" > Oktober </option>
<option  value="11" > Nopember  </option>
<option  value="12" > Desember  </option>

   </select>
</td>

<td>
 <select name="thn2" id="level">
                <option>Tahun</option>
                <?php 
                  for ($ii=2000; $ii <= 2015; $ii++) { 
                ?>
                <option value="<?php echo $ii; ?>"><?php echo $ii; ?></option>
                <?php
                  }

                 ?>
              </select>
</td>

              </tr>
              <tr>
                <td>Identitas</td>
                <td colspan="2"><select name="identitas">
                  <option value="NIK">NIK</option><option value="BPJS">BPJS</option></select></td></tr>
             </table>
            <div class="clear"></div>
            
            <!-- Buttons with actionbar  -->
            <div class="block-actions">
              
              <ul class="actions-right">
                <li><input type="submit" class="button" value="Simpan"></li>
              </ul>
            </div> <!--! end of #block-actions -->
          </form>
         
        </div>
      </div>
            
      <div class="clear height-fix"></div>

    </div></div> <!--! end of #main-content -->
  </div> <!--! end of #main -->
