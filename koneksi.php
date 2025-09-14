<?php
require_once('conn.php');

$koneksi = mysqli_connect(HOST_NAME, USER_NAME, PASSWORD, DB_NAME);

if (!$koneksi) {
  die('koneksi gagal: ' . mysqli_connect_error());
}
