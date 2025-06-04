<!DOCTYPE html>
<html lang="id">
<head>
<link rel="stylesheet" href="css/history.css">

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cek History Pendaftaran</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #f0f2f5;
    }
    .navbar {
      background-color: #007bff;
      color: white;
      padding: 1rem 2rem;
      text-align: center;
      font-size: 1.2rem;
    }
    .sidebar {
      width: 200px;
      background-color: #343a40;
      height: 100vh;
      float: left;
      color: white;
      padding-top: 20px;
      position: fixed;
    }
    .sidebar a {
      display: block;
      color: white;
      padding: 10px 20px;
      text-decoration: none;
    }
    .sidebar a:hover {
      background-color: #495057;
    }
    .content {
      margin-left: 200px;
      padding: 2rem;
    }
    .card {
      background: white;
      padding: 20px;
      margin-bottom: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body>

  <div class="navbar"><b>History Daftar</b></div>

  <div class="sidebar">
    <a href="index.php" class="kembali-btn">Back</a>

  </div>

  <div class="content">
    <div class="card">

  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h2>Cek Riwayat Pendaftaran Anda</h2>
<form method="POST" action="history.php">
  <label>Masukkan Email atau No. Telepon:</label><br>
  <input type="text" name="keyword" required><br><br>
  <button type="submit">Cari</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  include('conn.php');
  $keyword = $_POST['keyword'];

  // Cari berdasarkan email atau telepon
  $query = "SELECT * FROM pendaftar WHERE email = ? OR no_telpon = ?";
  $stmt = $conn->prepare($query);
  $stmt->bind_param("ss", $keyword, $keyword);
  $stmt->execute();
  $result = $stmt->get_result();

  echo "<h3>Hasil Pencarian:</h3>";
  if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='10'>
      <tr>
        <th>Nama</th>
        <th>TTL</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Asal Sekolah</th>
        <th>Program Keahlian</th>
        <th>No Telepon</th>
        <th>Email</th>
        <th>Edit</th>
        <th>Hapus</th>
      </tr>";

    while ($row = $result->fetch_assoc()) {
      echo "<tr>
        <td>".htmlspecialchars($row['nama'])."</td>
        <td>".htmlspecialchars($row['tempat_ttl'])."</td>
        <td>".htmlspecialchars($row['jk'])."</td>
        <td>".htmlspecialchars($row['alamat'])."</td>
        <td>".htmlspecialchars($row['asal_sekolah'])."</td>
        <td>".htmlspecialchars($row['kode_jur'])."</td>
        <td>".htmlspecialchars($row['no_telpon'])."</td>
        <td>".htmlspecialchars($row['email'])."</td>
        <td><a href='edit.php?id=".$row['no_daftar']."' class = 'edit'>Edit</a></td>
        <td><a href='delete.php?id=".$row['no_daftar']."' class = 'delete' onclick=\"return confirm('Yakin ingin menghapus data ini?' );\">Hapus</a></td>
      </tr>";
    }

    echo "</table>";
  } else {
    echo "<p><strong>Data tidak ditemukan. Pastikan email atau no. telepon sudah benar.</strong></p>";
  }
}
?>
    </div>
  </div>

</body>
</html>

  
</body>
</html>
