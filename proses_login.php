<?php
session_start();
include 'conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $code = $_POST['kode'] ?? '';
    $nama = trim($_POST['nama'] ?? '');
    $level = $_POST['level'] ?? '';

    switch (true) {
        case ($level == 'petugas' && $nama == 'Asep Sunandar' && $code == 'P001'):
        case ($level == 'petugas' && $nama == 'Susanti' && $code == 'P002'):
            header('location: petugas_dashboard.php');
            break;
        case ($level == 'admin' && $nama == 'Aki Syakip' && $code == 'P003'):
            header('location: admin_dashboard.php');
            break;
        case ($level == 'tu' && $nama == 'Sania Marwah' && $code == 'P004'):
            header('location: tu_dashboard.php');
            break;
        case ($level == 'kepala_sekolah' && $nama == 'Aria Kamandanu' && $code == 'P005'):
            header('location: kepsek_dashboard.php');
            break;
        default:
            echo "<script>alert('Kode, nama, atau level salah!'); window.location.href='index.php';</script>";
            break;
    }
} else {
    echo "<script>alert('Akses tidak sah'); window.location.href='index.php';</script>";
    exit;
}
?>
