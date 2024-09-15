<?php
include 'koneksi.php';

// Memeriksa apakah tombol 'daftar' telah dikirimkan melalui metode POST
if (isset($_POST['submit'])) {
    // Mengambil nilai 'email', 'nama', 'pass', dan 'confirmPass' dari input form.
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $pass = $_POST['pass'];
    $confirmPass = $_POST['confirmPass'];

    // Memeriksa apakah password dan konfirmasi password sesuai
    if ($pass !== $confirmPass) {
        echo "Password tidak sesuai.";
        return false;
    }

    // Memeriksa apakah email sudah ada dalam database
    $query = mysqli_query($koneksi, "SELECT email FROM admin WHERE email='$email'");
    $num = mysqli_num_rows($query);

    if ($num > 0) {
        echo "<script>alert('Email sudah terdaftar. Silahkan registrasi dengan email lain.');</script>";
        echo "<script>window.location.href='daftar.php';</script>";
    } else {
        // Jika tidak ada email yang sama, lanjutkan proses penyimpanan data

        // Melakukan sanitasi pada data yang diinputkan
        $email = mysqli_real_escape_string($koneksi, $email);
        $nama = mysqli_real_escape_string($koneksi, $nama);
        $pass = mysqli_real_escape_string($koneksi, $pass);

        // Melakukan hash pada password sebelum disimpan ke database
        $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);

        // Menjalankan query INSERT dengan menggunakan prepared statement
        $stmt = mysqli_prepare($koneksi, "INSERT INTO admin (email, nama, pass) VALUES (?, ?, ?)");
        mysqli_stmt_bind_param($stmt, 'sss', $email, $nama, $hashedPassword);
        mysqli_stmt_execute($stmt);

        // Memeriksa apakah query INSERT berhasil dijalankan
        if (mysqli_stmt_affected_rows($stmt) > 0) {
            mysqli_stmt_close($stmt);
            echo '<script>alert("Berhasil daftar akun");</script>';
            header("location: login.php");
            exit;
        } else {
            echo "Terjadi kesalahan: " . mysqli_error($koneksi);
        }
    }
}
?>
