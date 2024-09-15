<?php
	session_start();
	include('koneksi.php');

	$id = $_GET['id_hutang'];
	$jumlah = $_GET['jumlah'];
	$tgl = $_GET['tgl_hutang'];
	$keterangan = $_GET['keterangan'];
	$penghutang = $_GET['penghutang'];

    if (empty($tgl) || empty($jumlah) || empty($sumber)) {
        echo "<script>alert('Data belum lengkap!');</script>";
        echo "<script>window.location.href = 'hutang.php';</script>";
    }
    
	// Query Update
	$query = mysqli_query($koneksi,"UPDATE hutang SET jumlah='$jumlah' , tgl_hutang='$tgl', keterangan='$keterangan', penghutang='$penghutang' WHERE id_hutang='$id' ");

	define('LOG','log.txt');
	function write_log($log){  
		$time = @date('[Y-d-m:H:i:s]');
		$op=$time.' '.$log."\n".PHP_EOL;
		$fp = @fopen(LOG, 'a');
		$write = @fwrite($fp, $op);
		@fclose($fp);
	}

	$namaadmin = $_SESSION['nama'];

	if ($query) {
		write_log("Nama Admin : ".$namaadmin." => Edit Hutang => ".$id." => Sukses ");
	}
	else{
		write_log("Nama Admin : ".$namaadmin." => Edit hutang => ".$id." => Gagal");
        echo "<script>alert('Data belum lengkap!');</script>";
    }
        echo "<script>window.location.href = 'hutang.php';</script>";
?>