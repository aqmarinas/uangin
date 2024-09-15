<?php
    include('koneksi.php');

    $id = $_GET['id_pengeluaran'];
    $tgl = $_GET['tgl_pengeluaran'];
    $jumlah = $_GET['jumlah'];
    $sumber = $_GET['id_sumber'];

    if (empty($tgl) || empty($jumlah) || empty($sumber)) {
        echo "<script>alert('Data belum lengkap!');</script>";
        echo "<script>window.location.href = 'pengeluaran.php';</script>";
    }
    
    // Query Update
    $query = mysqli_query($koneksi,"UPDATE pengeluaran SET tgl_pengeluaran='$tgl' , jumlah='$jumlah', id_sumber='$sumber' WHERE id_pengeluaran='$id' AND id_sumber>7 ");

    if ($query) {
        # Redirect ke page index
        header("location:pengeluaran.php"); 
    } else{
        echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
    }
?>