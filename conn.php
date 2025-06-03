<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$namadb = 'ppdb_igapin';

$conn = new mysqli($host, $user, $pass, $namadb);

if ($conn->connect_error) {
    die('Koneksi gagal: ' . $conn->connect_error);
}
?>