<?php

$host = 'localhost';
$username = 'id20679355_keuangan';
$pass = 'Uangku123@';
$db = 'id20679355_databasefix';

$koneksi = mysqli_connect($host, $username, $pass, $db);
if (!$koneksi) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
?>