<?php
    include('koneksi.php');

    $id = $_GET['id_admin'];
    $nama = $_GET['nama'];
    $email = $_GET['email'];
    $pass = $_GET['pass'];

    // Query Update
    $query = mysqli_query($koneksi,"UPDATE admin SET nama='$nama' , email='$email', pass='$pass' WHERE id_admin='$id' ");

    if ($query) {
        # Redirect ke page index
        header("location:profile.php"); 
    } else{
        echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
    }
?>