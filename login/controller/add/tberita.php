 <!-- Begin of #main -->
    <div id="main" role="main">
      
      <!-- Begin of titlebar/breadcrumbs -->
    <div id="title-bar">
      <ul id="breadcrumbs">
        <li><a href="main.php?id=home" title="Home"><span id="bc-home"></span></a></li>
        <li class="no-hover"><h2>Managemen Data Berita</h2></li>
      </ul>
    </div> <!--! end of #title-bar -->
    
    <div class="shadow-bottom shadow-titlebar"></div>

  <!-- Begin of #main-content -->
    <div id="main-content">
      <div class="container_12">
      
      <div class="grid_12">
  
         <?php
        
            // query untuk insert data user baru'
            if (isset($_POST['judul'])) {
             $judul =  htmlspecialchars(mysql_real_escape_string($_POST['judul']));
        $kategori =  htmlspecialchars(mysql_real_escape_string($_POST['kategori']));
        $ulasan =  htmlspecialchars(mysql_real_escape_string($_POST['ulasan']));
        $tgl_post = date('d-m-y');
        $user_post = $_SESSION['username'];
        $isi =  htmlspecialchars(mysql_real_escape_string($_POST['isi']));
         $img = $judul.".jpg"; $insert = mysql_query("INSERT INTO berita values (null,'$judul','$kategori','$ulasan','$tgl_post','$user_post','$isi','$img')") or die (mysql_error());
              if ($insert)
              {      copy($_FILES['img']['tmp_name'], "img/gambar/berita/".$judul.".jpg");
                ?>
                 <div class="alert info">
          <span class="hide">x</span><strong>Data Berhasil Disimpan</strong>
        </div>
        <?php
              }
              else {
                 ?>
                 <div class="alert info">
          <span class="hide">x</span><strong>Data Gagal Disimpan</strong>
        </div><?php
              }
            }
            ?>

      </div>
    <div class="grid_12">
        <div class="block-border">
          <div class="block-header">
            <h1>Tambah Berita</h1>
          </div>
          <form id="validate-form" class="block-content form" action="" enctype="multipart/form-data" method="post">
            <p>
              <label >Judul</label>
              <input type="text" name="judul" class="required">
            </p>
            <p >
              <label >Kategori</label>
              <input type="text" name="kategori" class="required">
            </p>
             <p >
              <label >Ulasan</label>
           <textarea name="ulasan" class="required"></textarea>
            </p>
             <p >
              <label >Isi</label>
            
            <textarea name="isi" class="required" ></textarea>
            </p>
            <p>
              <label >Gambar</label>
              <input type="file" name="img" class="required">
            </p>
            
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
