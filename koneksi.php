<?php
require 'vendor/autoload.php'; 

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$host = $_ENV['DB_HOST'];
$username = $_ENV['DB_USERNAME'];
$pass = $_ENV['DB_PASSWORD'];
$db = $_ENV['DB_DATABASE'];

$koneksi = mysqli_connect($host, $username, $pass, $db);

if (!$koneksi) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
?>
