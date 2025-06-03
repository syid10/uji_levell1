<?php 
include('conn.php');
$sql = "SELECT * FROM pendaftar ORDER BY no_daftar DESC";
$result = $conn->query($sql);
?>

<link rel="stylesheet" href="style.css">

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Admin</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 20px; }
    table { border-collapse: collapse; width: 100%; margin-top: 20px; }
    table, th, td { border: 1px solid #ddd; }
    th, td { padding: 10px; text-align: left; }
    th { background-color: #f2f2f2; }
    .alert { background-color: #d4edda; color: #155724; padding: 10px; margin-bottom: 20px; border: 1px solid #c3e6cb; border-radius: 5px; }
  </style>
</head>
<body>

  <h2>Dashboard Admin</h2>

  <?php if (isset($_SESSION['alert'])): ?>
    <div class="alert"><?= $_SESSION['alert'] ?></div>
    <?php unset($_SESSION['alert']); ?>
  <?php endif; ?>

  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>TTL</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Asal Sekolah</th>
        <th>Program Keahlian</th>
        <th>Telepon</th>
        <th>Email</th>
        <th>Tanggal Daftar</th>
      </tr>
    </thead>
    <tbody>
      <?php if ($result->num_rows > 0): $no = 1; ?>
        <?php while($row = $result->fetch_assoc()): ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= htmlspecialchars($row['nama']) ?></td>
            <td><?= htmlspecialchars($row['tempat_ttl']) ?></td>
            <td><?= htmlspecialchars($row['jk']) ?></td>
            <td><?= htmlspecialchars($row['alamat']) ?></td>
            <td><?= htmlspecialchars($row['asal_sekolah']) ?></td>
            <td><?= htmlspecialchars($row['kode_jur']) ?></td>
            <td><?= htmlspecialchars($row['no_telpon']) ?></td>
            <td><?= htmlspecialchars($row['email']) ?></td>
          </tr>
        <?php endwhile; ?>
      <?php else: ?>
        <tr><td colspan="10">Belum ada data pendaftaran.</td></tr>
      <?php endif; ?>
    </tbody>
  </table>

</body>
</html>

<?php $conn->close(); ?>