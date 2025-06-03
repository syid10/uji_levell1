<?php
include('conn.php');

if (!isset($_GET['id'])) {
    echo "ID tidak ditemukan.";
    exit;
}

$id = $_GET['id'];

$query = "DELETE FROM pendaftar WHERE no_daftar = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $id);

if ($stmt->execute()) {
    header('history.php');
} else {
    echo "Gagal menghapus data.";
}
?>
