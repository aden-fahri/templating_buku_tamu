<?php
//panggil file function.php
require_once('function.php');

//jika ada id
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  if (hapus_user($id) > 0) {
    // jika data berhasil maka akan muncul alert
    echo "<script>alert('Data Berhasil di Hapus')</script>";
    //kembali ke halaman buku-tamu.php
    echo "<script>window.location.href='users.php'</script>";
  } else {
    //jika gagal 
    echo "<script>alert('Data Gagal di Hapus')</script>";
    echo "<script>window.location.href='users.php'</script>";
  }
}
