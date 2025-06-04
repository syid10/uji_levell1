<html>
    <link rel="stylesheet" href="css/edit.css">
</html>

<?php
include('conn.php');

if (!isset($_GET['id'])) {
    echo "ID tidak ditemukan.";
    exit;
}

$id = $_GET['id'];

// Ambil data lama
$query = "SELECT * FROM pendaftar WHERE no_daftar = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    echo "Data tidak ditemukan.";
    exit;
}

$data = $result->fetch_assoc();

// Proses update data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nama = $_POST['nama'];
  $tempat_ttl = $_POST['tempat_ttl'];
  $jk = $_POST['jk'];
  $alamat = $_POST['alamat'];
  $asal_sekolah = $_POST['asal_sekolah'];
  $kode_jur = $_POST['kode_jur'];
  $no_telpon = $_POST['no_telpon'];
  $email = $_POST['email'];

  $stmt = $conn->prepare("UPDATE pendaftar SET nama=?, tempat_ttl=?, jk=?, alamat=?, asal_sekolah=?, kode_jur=?, no_telpon=?, email=? WHERE no_daftar=?");
  $stmt->bind_param("sssssssss", $nama, $tempat_ttl, $jk, $alamat, $asal_sekolah, $kode_jur, $no_telpon, $email, $id);

  if ($stmt->execute()) {
    echo "<script>alert('Data berhasil diperbarui.'); window.location.href='history.php';</script>";
  } else {
    echo "Gagal mengupdate data.";
  }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Edit Pendaftaran</title>
  <link rel="stylesheet" href="css/edit.css" />
</head>
<body>

<div class="navbar"><b>Edit Pendaftaran</b></div>

<div class="sidebar">
    <a href="" class="kembali-btn"></a>
    <a href="" class="kembali-btn"></a>
    <a href="history.php" class="kembali-btn">Back</a>
</div>

<div class="content">
  <div class="card">
    <h2>Edit Data Anda</h2>
    <form method="POST">
      <label>Nama:</label>
      <input type="text" name="nama" value="<?= htmlspecialchars($data['nama']) ?>" required>

      <label>Tempat & Tanggal Lahir:</label>
      <input type="text" name="tempat_ttl" value="<?= htmlspecialchars($data['tempat_ttl']) ?>" required>

      <label>Jenis Kelamin:</label>
      <select name="jk" required>
        <option value="Laki-laki" <?= $data['jk'] == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
        <option value="Perempuan" <?= $data['jk'] == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
      </select>

      <label>Alamat:</label>
      <textarea name="alamat" required><?= htmlspecialchars($data['alamat']) ?></textarea>

      <label>Asal Sekolah:</label>
      <input type="text" name="asal_sekolah" value="<?= htmlspecialchars($data['asal_sekolah']) ?>" required>

      <label>Program Keahlian:</label>
      <input type="text" name="kode_jur" value="<?= htmlspecialchars($data['kode_jur']) ?>" required>

      <label>No. Telepon:</label>
      <input type="text" name="no_telpon" value="<?= htmlspecialchars($data['no_telpon']) ?>" required>

      <label>Email:</label>
      <input type="email" name="email" value="<?= htmlspecialchars($data['email']) ?>" required>

      <button type="submit">Simpan Perubahan</button>
    </form>
  </div>
</div>

</body>
</html>