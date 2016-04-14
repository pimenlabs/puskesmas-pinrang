<?php
          // memulai session
        
session_start();
 error_reporting(0);
include '../../config/config.php';

          $username = mysql_real_escape_string($_POST['username']);
          $password = mysql_real_escape_string($_POST['password']);
          $level = mysql_real_escape_string($_POST['level']);
          $password = md5($password);
          
          // query untuk mendapatkan record dari username admin
          if ($level == 'admin') {
                $query = "SELECT * FROM uadmin WHERE username = '$username'";
                $hasil = mysql_query($query);
                $data = mysql_fetch_array($hasil);
                // cek kesesuaian password
                if ($password == $data['password'] && $level == $data['level'] && $data['status'] == 'aktif')
                {
                echo "sukses";
                    // menyimpan username dan level ke dalam session
                    $_SESSION['level'] = $data['level'];
                    $_SESSION['username'] = $data['username'];
                    $_SESSION['img'] = $data['img'];
                    //Penggunaan Meta Header HTTP
                  //  echo '<META HTTP-EQUIV="Refresh" Content="0; URL=main.php?id=home">';    
                    header('location:../../main.php?id=home');
                  exit;
                }else{
                    header('location:../../index.php');
                }
          }else  // query untuk mendapatkan record dari username dokter
          if ($level == 'dokter') {
                $query1= "SELECT * FROM udokter WHERE nip = '$username'";
                $hasil1 = mysql_query($query1);
                $data1 = mysql_fetch_array($hasil1);
                // cek kesesuaian password
               

                if ($password == $data1['password']  && $level == $data1['level'] && $data1['status'] == 'aktif')
                {
                echo "sukses";
                    // menyimpan username dan level ke dalam session
                    $_SESSION['level'] = $data1['level'];
                    $_SESSION['username'] = $data1['nama_dokter'];
                    $_SESSION['img'] = $data1['img'];
                    $_SESSION['jenis_poli'] = $data1['kd_poli'];

                    //Penggunaan Meta Header HTTP
                  //  echo '<META HTTP-EQUIV="Refresh" Content="0; URL=main.php?id=home">';    
                    header('location:../../main.php?id=home');
                  exit;
                }else{
                    header('location:../../index.php');
                }
          }else  // query untuk mendapatkan record dari username dokter
         if ($level == 'apoteker') {
                $query2= "SELECT * FROM uapoteker WHERE nip = '$username'";
                $hasil2 = mysql_query($query2);
                $data2 = mysql_fetch_array($hasil2);
                // cek kesesuaian password
               

                if ($password == $data2['password']  && $level == $data2['level'] && $data2['status'] == 'aktif')
                {
                echo "sukses";
                    // menyimpan username dan level ke dalam session
                    $_SESSION['level'] = $data2['level'];
                    $_SESSION['username'] = $data2['username'];
                    $_SESSION['img'] = $data2['img'];
                    //Penggunaan Meta Header HTTP
                  //  echo '<META HTTP-EQUIV="Refresh" Content="0; URL=main.php?id=home">';    
                    header('location:../../main.php?id=home');
                  exit;
                }else{
                    header('location:../../index.php');
                }
          }else
          if ($level == 'petugas registrasi') {
                $query3= "SELECT * FROM upetugas WHERE nip = '$username'";
                $hasil3 = mysql_query($query3);
                $data3= mysql_fetch_array($hasil3);
                // cek kesesuaian password
                //echo $username, $password, $level;
                if ($password == $data3['password']  && $level == $data3['level'] && $data3['status'] == 'aktif')
                {
                echo "sukses";
                    // menyimpan username dan level ke dalam session
                    $_SESSION['level'] = $data3['level'];
                    $_SESSION['username'] = $data3['username'];
                    $_SESSION['img'] = $data3['img'];
                    //Penggunaan Meta Header HTTP
                 echo '<META HTTP-EQUIV="Refresh" Content="0; URL=main.php?id=home">';    
                    header('location:../../main.php?id=home');
                  exit;
                }else{
                //header('location:../../index.php');
                }
          }else if ($level == 'kepala puskesmas') {
                $query4= "SELECT * FROM ukpl_puskesmas WHERE nip = '$username'";
                $hasil4 = mysql_query($query4);
                $data4= mysql_fetch_array($hasil4);
                // cek kesesuaian password
               

                if ($password == $data4['password']  && $level == $data4['level'] && $data4['status'] == 'aktif')
                {
                echo "sukses";
                    // menyimpan username dan level ke dalam session
                    $_SESSION['level'] = $data4['level'];
                    $_SESSION['username'] = $data4['username'];
                    $_SESSION['img'] = $data4['img'];
                    //Penggunaan Meta Header HTTP
                  //  echo '<META HTTP-EQUIV="Refresh" Content="0; URL=main.php?id=home">';    
                    header('location:../../main.php?id=home');
                  exit;
                }else{
                    header('location:../../index.php');
                }
          }else
          { header('location:../../index.php');}
         
      ?>