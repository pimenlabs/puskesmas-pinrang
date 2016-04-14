 <!-- Begin of #main -->
    <div id="main" role="main">
      
      <!-- Begin of titlebar/breadcrumbs -->
    <div id="title-bar">
      <ul id="breadcrumbs">
        <li><a href="main.php?id=home" title="Home"><span id="bc-home"></span></a></li>
        <li class="no-hover"><h2>Tambah User</h2></li>
      </ul>
    </div> <!--! end of #title-bar -->
    
    <div class="shadow-bottom shadow-titlebar"></div>

  <!-- Begin of #main-content -->
    <div id="main-content">
      <div class="container_12">
      
      <div class="grid_12">
  
         <?php
            $username = htmlspecialchars(mysql_real_escape_string($_POST['username']));
            $password = htmlspecialchars(mysql_real_escape_string($_POST['pass']));
            $password = md5($password);
            $level = $_POST['level'];
            // query untuk insert data user baru
            if (isset($username) && isset($password) && isset($level)) {
              $insert = "insert into user set username = '$username', password = '$password', level = '$level'";
              if (mysql_query($insert))
              {
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
            <h1>Tambah User</h1>
          </div>
          <form id="validate-form" class="block-content form" action="" method="post">
            <p>
              <label >Nama</label>
              <input type="text" name="username" class="required">
            </p>
            <p >
              <label >Password</label>
              <input type="text" name="pass" class="required">
            </p>
            <p >
              <label>Level</label>
              <select name="level" id="level">
                <option>Pilih</option>
                <?php 
                include_once 'config/config.php';
                  $l = mysql_query("select level from klevel");
                  while ($a = mysql_fetch_array($l)) {
                    
                    ?>
                    <option name='<?php echo $a['level']; ?>'><?php echo $a['level']; ?> </option>

                    <?php
                     }
                 ?>
              </select>
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
