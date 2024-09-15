<?php
session_start();
require 'koneksi.php';

$nama = isset($_SESSION['nama']) ? $_SESSION['nama'] : '';

if (empty($nama)) {
    // Jika belum login, arahkan ke halaman login.php dan tampilkan alert
    echo '<script>window.location.href = "login.php";</script>';
    exit;
}
?>