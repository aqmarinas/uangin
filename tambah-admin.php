<?php
    include('koneksi.php');

    $email = $_GET['email'];
    $nama = $_GET['nama'];
    $pass = $_GET['pass'];

    // Query Update
    $query = mysqli_query($koneksi,"INSERT INTO admin VALUES ('','$email','$nama','$pass')");

    if ($query) {
        # Redirect ke page index
        header("location:login.php"); 
    }

?>