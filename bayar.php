<?php
include('conn.php');

if (isset($_POST['bayar'])) {
    $tahun = $_POST['tahun_ajaran'];
    $nama = $_POST['nama_siswa'];
    $jenis = $_POST['jenis_bayar'];
    $uang_diberikan = preg_replace('/[^0-9]/', '', $_POST['uang']);
    $tanggal = date("Y-m-d");

    // Ambil data biaya berdasarkan tahun ajaran
    $query = $conn->query("SELECT * FROM biaya_tahunan WHERE tahun_ajaran = '$tahun'");
    $biaya = $query->fetch_assoc();

    // Ambil nominal sesuai jenis bayar
    $nominal = 0;
    switch ($jenis) {
        case 'pendaftaran': $nominal = preg_replace('/[^0-9]/', '', $biaya['b_pendaftaran']); break;
        case 'awaltahun':   $nominal = preg_replace('/[^0-9]/', '', $biaya['b_awaltahun']); break;
        case 'seragam':     $nominal = preg_replace('/[^0-9]/', '', $biaya['b_seragam']); break;
        case 'spp':         $nominal = preg_replace('/[^0-9]/', '', $biaya['b_spp']); break;
    }

    if ($uang_diberikan >= $nominal) {
        $kembalian = $uang_diberikan - $nominal;

        $conn->query("INSERT INTO pembayaran (nama_siswa, tahun_ajaran, jenis_bayar, jumlah_bayar, uang_diberikan, tanggal) 
                      VALUES ('$nama', '$tahun', '$jenis', '$nominal', '$uang_diberikan', '$tanggal')");

        $pesan = "<p class='sukses'>Pembayaran untuk <strong>$jenis</strong> sebesar <strong>Rp" . number_format($nominal, 0, ',', '.') . "</strong> berhasil.<br>
                 Kembalian: <strong>Rp" . number_format($kembalian, 0, ',', '.') . "</strong></p>";
    } else {
        $pesan = "<p class='gagal'>Uang yang diberikan kurang. Total yang harus dibayar: Rp" . number_format($nominal, 0, ',', '.') . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pembayaran Siswa</title>
    <link rel="stylesheet" href="css/bayar.css">
</head>
<body>
<div style="text-align: right; margin-bottom: 15px;">
    <a href="index.php" class="btn-keluar">Back</a>
</div>
<div class="container">
    <!-- Form Pembayaran -->
    <div class="form-container">
        <h2>Form Pembayaran Siswa Baru</h2>

        <?php if (isset($pesan)) echo $pesan; ?>

        <form method="POST">
            Nama Siswa:
            <input type="text" name="nama_siswa" required>

            Pilih Tahun Ajaran:
            <select name="tahun_ajaran" required>
                <option value="">-- Pilih Tahun --</option>
                <?php
                $result = $conn->query("SELECT tahun_ajaran FROM biaya_tahunan");
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['tahun_ajaran'] . "'>" . $row['tahun_ajaran'] . "</option>";
                }
                ?>
            </select>

            Jenis Pembayaran:
            <select name="jenis_bayar" required>
                <option value="">-- Pilih Jenis Pembayaran --</option>
                <option value="pendaftaran">Pendaftaran</option>
                <option value="awaltahun">Awal Tahun</option>
                <option value="seragam">Seragam</option>
                <option value="spp">SPP</option>
            </select>

            Uang Diberikan (Rp):
            <input type="text" name="uang" required>

            <input type="submit" name="bayar" value="Bayar">
        </form>
    </div>





    <!-- Tabel Biaya -->
    <div class="table-container">
        <h2>Data Biaya Tahunan</h2>
        <table>
            <thead>
                <tr>
                    <th>Tahun Ajaran</th>
                    <th>Pendaftaran</th>
                    <th>Awal Tahun</th>
                    <th>Seragam</th>
                    <th>SPP</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $biayaResult = $conn->query("SELECT * FROM biaya_tahunan");
                while ($row = $biayaResult->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['tahun_ajaran']}</td>
                            <td>{$row['b_pendaftaran']}</td>
                            <td>{$row['b_awaltahun']}</td>
                            <td>{$row['b_seragam']}</td>
                            <td>{$row['b_spp']}</td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
