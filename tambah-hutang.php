<?php
    include('koneksi.php');

    $jumlah = $_GET['jumlah'];
    $tgl_hutang = $_GET['tgl_hutang'];
    $penghutang = $_GET['penghutang'];
    $keterangan = $_GET['keterangan'];

    // Query Update
    $query = mysqli_query($koneksi,"INSERT INTO `hutang` (`jumlah`, `tgl_hutang`, `keterangan`, `penghutang`) VALUES ('$jumlah', '$tgl_hutang', '$keterangan','$penghutang')");

    if (!$query) {
        echo "<script>alert('Data belum lengkap!');</script>";
    }
        echo "<script>window.location.href = 'hutang.php';</script>";
?>