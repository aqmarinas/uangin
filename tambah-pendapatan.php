<?php
    include('koneksi.php');

    $tgl_pemasukan = $_GET['tgl_pemasukan'];
    $jumlah = $_GET['jumlah'];
    $sumber = $_GET['sumber'];

    // Query Update
    $query = mysqli_query($koneksi,"INSERT INTO `pemasukan` (`tgl_pemasukan`, `jumlah`, `id_sumber`) VALUES ('$tgl_pemasukan', '$jumlah', '$sumber')");

    if (!$query) {
        echo "<script>alert('Data belum lengkap!');</script>";
    }
        echo "<script>window.location.href = 'pendapatan.php';</script>";

?>