<?php
    session_start();
    
    include('koneksi.php');
    define('LOG','log.txt');

    function write_log($log){  
        $time = @date('[Y-d-m:H:i:s]');
        $op=$time.' '.$log."\n".PHP_EOL;
        $fp = @fopen(LOG, 'a');
        $write = @fwrite($fp, $op);
        @fclose($fp);
    }

    $id = (int) $_GET['id_pemasukan'];
    $tgl = $_GET['tgl_pemasukan'];
    $jumlah = abs((int) $_GET['jumlah']);
    $sumber =abs((int) $_GET['id_sumber']);
    
    if (empty($tgl) || empty($jumlah) || empty($sumber)) {
        echo "<script>alert('Data belum lengkap!');</script>";
        echo "<script>window.location.href = 'pendapatan.php';</script>";
    }

    // Query Update
    $query = mysqli_query($koneksi,"UPDATE pemasukan SET tgl_pemasukan='$tgl' , jumlah='$jumlah', id_sumber='$sumber' WHERE id_pemasukan='$id' ");
    $namaadmin = $_SESSION['nama'];
    
    if ($query) {
        write_log("Nama Admin : ".$namaadmin." => Edit Pemasukan => ".$id." => Sukses Edit");
    } else{
        write_log("Nama Admin : ".$namaadmin." => Edit Pemasukan => ".$id." => Gagal Edit");
        echo "<script>alert('Gagal Edit');</script>";
    }
        echo "<script>window.location.href = 'pendapatan.php';</script>";
?>