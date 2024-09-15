<?php
    include('koneksi.php');

    $tgl_pengeluaran = $_GET['tgl_pengeluaran'];
    $jumlah = $_GET['jumlah'];
    $sumber = $_GET['sumber'];

    // Query Update
    $query = mysqli_query($koneksi,"INSERT INTO `pengeluaran` (`tgl_pengeluaran`, `jumlah`, `id_sumber`) VALUES ('$tgl_pengeluaran', '$jumlah', '$sumber')");

    if (!$query) {
        echo "<script>alert('Data belum lengkap!');</script>";
    }
        echo "<script>window.location.href = 'pengeluaran.php';</script>";
?>