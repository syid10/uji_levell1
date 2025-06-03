<?php 
session_start();
include('conn.php');
$sql = "SELECT * FROM pendaftar ORDER BY no_daftar DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Petugas</title>
  <link rel="stylesheet" href="css/dashboard_role.css">
</head>
<body>

<a href="logout.php" class="logout-btn" title="Logout">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16 13v-2H7V8l-5 4 5 4v-3zM19 19h-8v-2h8v-6h-8v-2h8a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2z"/></svg>
    Logout
  </a>


  <h2>Dashboard Petugas</h2>

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
        <th colspan="2"><center>Aksi</center></th>
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
            <td><?= htmlspecialchars($row['tanggal_daftar']) ?></td>
            <td><a href='edit.php?id=".$row['no_daftar']."' class = 'edit'>Edit</a></td>
            <td><a href='delete.php?id=".$row['no_daftar']."' class = 'delete' onclick=\"return confirm('Yakin ingin menghapus data ini?' );\">Hapus</a></td>
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