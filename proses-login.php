<?php
// Mengaktifkan session PHP
session_start();

// Menghubungkan dengan koneksi
include 'koneksi.php';

// Menangkap data yang dikirim dari form
$email = mysqli_real_escape_string($koneksi, $_POST['email']);
$pass = mysqli_real_escape_string($koneksi, $_POST['pass']);

// Menyeleksi data admin dengan email yang sesuai
$query = mysqli_prepare($koneksi, "SELECT * FROM admin WHERE email = ?");
mysqli_stmt_bind_param($query, 's', $email);
mysqli_stmt_execute($query);

// Mengambil hasil query
$result = mysqli_stmt_get_result($query);

// Menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($result);

if ($cek > 0) {
    $row = mysqli_fetch_assoc($result);
    // Memverifikasi password yang diinputkan dengan hash password dari database
    if (password_verify($pass, $row['pass'])) {
        // Jika password cocok, set session dan redirect ke halaman index.php
        $_SESSION['id'] = $row['id_admin'];
        $_SESSION['nama'] = $row['nama'];
        $_SESSION['status'] = "login";
        header("location: dashboard.php");
        exit;
    } else {
        echo "<script>alert('Email atau password salah. Silahkan coba lagi.');</script>";
        echo "<script>window.location.href='login.php';</script>";
    }
} else {
    echo "<script>alert('Email atau password salah. Silahkan coba lagi.');</script>";
    echo "<script>window.location.href='login.php';</script>";
}

var_dump($email);
var_dump($pass);
var_dump($row['pass']); // password dari database

?>

