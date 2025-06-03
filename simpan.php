<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "ppdb_igapin";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}


// Ambil data dari form
$nama     = $_POST['nama'];
$ttl      = $_POST['ttl'];
$jk       = $_POST['jk'];
$alamat   = $_POST['alamat'];
$sekolah  = $_POST['sekolah'];
$program  = $_POST['program'];
$telepon  = $_POST['telepon'];
$email    = $_POST['email'];

// Simpan ke database
$sql = "INSERT INTO pendaftar
        (nama, tempat_ttl, jk, alamat, asal_sekolah, kode_jur, no_telpon, email)
        VALUES 
        ('$nama', '$ttl', '$jk', '$alamat', '$sekolah', '$program', '$telepon', '$email')";

if ($conn->query($sql) === TRUE) {
   echo "<script>alert('Pendaftaran berhasil disimpan.'); window.location.href='dashboard.php';</script>";
} else {
  echo "<script>alert('Gagal menyimpan data: " . $conn->error . "'); window.history.back();</script>";
}
$conn->close();
?>
