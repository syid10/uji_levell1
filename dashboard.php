<?php
include('conn.php');
?>


<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pendaftaran Peserta Didik Baru SMK | PPDB 2025/2026</title>
  <meta name="description" content="Pendaftaran Peserta Didik Baru SMK Tahun Ajaran 2025/2026. Wujudkan cita-citamu bersama kami!">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
</head>
<body>
  <!-- Header -->
  <header>
    <div class="container header-container">
      <div class="logo">
        <h3>SMK IGASAR PINDAD BANDUNG<span> | PPDB 2025/2026</span></h3>
      </div>
      <nav>
        <ul>
          <li><a href="#beranda">Beranda</a></li>
          <li><a href="#program">Program Keahlian</a></li>
          <li><a href="#pendaftaran">Pendaftaran</a></li>
          <li><a href="#jadwal">Jadwal</a></li>
          <li><a href="history.php">history</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <!-- Hero Section -->
  <section class="hero" id="beranda">
    <div class="container">
      <h2>Pendaftaran Peserta Didik Baru</h2>
      <p>Selamat datang di portal PPDB SMK Igasar Pindad Bandung Tahun Ajaran 2025/2026. Wujudkan cita-citamu dan raih masa depan cerahmu bersama kami!</p>
      <a href="#pendaftaran" class="btn">Daftar Sekarang</a>
    </div>
  </section>

  <!-- Programs Section -->
  <section class="programs" id="program">
    <div class="container programs-container">
      <h2 class="section-title">Program Keahlian</h2>
      <div class="programs-grid">
        <div class="program-card">
          <img src="aset/tkj.jfif" alt="Teknik Komputer dan Jaringan">
          <div class="program-content">
            <h3>Teknik Komputer dan Jaringan</h3>
            <p>Program keahlian yang mempelajari tentang perakitan komputer, instalasi jaringan, dan pengembangan sistem berbasis teknologi informasi.</p>
          </div>
        </div>
        <div class="program-card">
          <img src="aset/rpl.jfif" alt="Rekayasa Perangkat Lunak">
          <div class="program-content">
            <h3>Rekayasa Perangkat Lunak</h3>
            <p>Program keahlian Rekayasa Perangkat Lunak berfokus pada pengembangan dan pembuatan perangkat lunak, termasuk aplikasi web, aplikasi desktop, aplikasi mobile, dan game.</p>
          </div>
        </div>
        <div class="program-card">
          <img src="aset/to.jfif" alt="Tehnik Permesinan">
          <div class="program-content">
            <h3>Tehnik Permesinan</h3>
            <p>Program Keahlian Teknik Pemesinan berfokus pada penguasaan teknologi pemesinan, termasuk proses produksi dan pengolahan material menggunakan mesin perkakas.</p>
          </div>
        </div>
        <div class="program-card">
          <img src="aset/tkr.jfif" alt="Tehnik Permesinan">
          <div class="program-content">
            <h3>Tehnik Kendaraan Ringan</h3>
            <p>Program keahlian Teknik Kendaraan Ringan berfokus mempersiapkan siswa untuk berkarir di bidang otomotif, khususnya dalam perawatan dan perbaikan kendaraan ringan seperti mobil.</p>
          </div>
        </div>
        <div class="program-card">
          <img src="aset/tbsm.jpg" alt="Tehnik Permesinan">
          <div class="program-content">
            <h3>Tehnik dan Bisnis Sepeda Motor</h3>
            <p>Program Keahlian Teknik dan Bisnis Sepeda Motor adalah cabang dari rumpun program keahlian Teknik Otomotif yang lebih spesifik, fokus pada sepeda motor.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Registration Section -->
  <section class="registration" id="pendaftaran">
    <div class="container registration-container">
      <div class="registration-info">
        <h2 class="section-title">Informasi Pendaftaran</h2>
        <p>Pendaftaran Peserta Didik Baru SMK Igasar Pindad Bandung untuk tahun ajaran 2025/2026 telah dibuka. Segera daftarkan diri Anda untuk mendapatkan kesempatan menjadi bagian dari keluarga besar SMK Igasar Pindad Bandung.</p>
        
        <h3>Persyaratan Pendaftaran:</h3>
        <ul>
          <li>Fotokopi Ijazah SMP/MTs atau sederajat (dilegalisir)</li>
          <li>Fotokopi Akta Kelahiran</li>
          <li>Fotokopi Kartu Keluarga</li>
          <li>Pas foto berwarna ukuran 3x4 (3 lembar)</li>
          <li>Surat Keterangan Lulus dari sekolah asal</li>
          <li>Surat Keterangan Berkelakuan Baik</li>
        </ul>
        
        <h3>Biaya Pendaftaran:</h3>
        <p>Biaya pendaftaran sebesar Rp 100.000,- dapat dibayarkan melalui rekening Bank BNI dengan nomor 0987654321 a.n. Sania Marwah. Dan kirim bukti ke nomor berikut 08123456789(WhatsApp)</p>
      </div>
      
      <div class="registration-form">
        <h3>Formulir Pendaftaran</h3>
        <form action="simpan.php" method="post">
          <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" id="nama" name="nama" required>
          </div>
          
          <div class="form-group">
            <label for="ttl">Tempat, Tanggal Lahir</label>
            <input type="text" id="ttl" name="ttl" required>
          </div>
          
          <div class="form-group">
            <label for="jk">Jenis Kelamin</label>
            <select id="jk" name="jk" required>
              <option value="">Pilih Jenis Kelamin</option>
              <option value="laki-laki">Laki-laki</option>
              <option value="perempuan">Perempuan</option>
            </select>
          </div>
          
          <div class="form-group">
            <label for="alamat">Alamat Lengkap</label>
            <input type="text" id="alamat" name="alamat" required>
          </div>
          
          <div class="form-group">
            <label for="sekolah">Asal Sekolah</label>
            <input type="text" id="sekolah" name="sekolah" required>
          </div>
          
          <div class="form-group">
            <label for="program">Program Keahlian</label>
            <select id="program" name="program" required>
              <option value="">Pilih Program Keahlian</option>
              <option value="IGAPIN_1">Teknik Komputer dan Jaringan</option>
              <option value="IGAPIN_2">Rekayasa Perangkat Lunak</option>
              <option value="IGAPIN_3">Tehnik Permesinan</option>
              <option value="IGAPIN_4">Tehnik Kendaraan ringan</option>
              <option value="IGAPIN_5">Tehnik dan Bisnis Sepeda Motor</option>
            </select>
          </div>
          
          <div class="form-group">
            <label for="telepon">Nomor Telepon</label>
            <input type="tel" id="telepon" name="telepon" required>
          </div>
          
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
          </div>
          
          <button type="submit" class="submit-btn">Kirim Pendaftaran</button>
        </form>
      </div>
    </div>
  </section>

  <!-- Timeline Section -->
  <section class="timeline" id="jadwal">
    <div class="container timeline-container">
      <h2 class="section-title">Jadwal PPDB 2025/2026</h2>
      
      <div class="timeline-items">
        <div class="timeline-item">
          <div class="timeline-dot"></div>
          <div class="timeline-content">
            <h3>Pendaftaran Online</h3>
            <p>1 Januari - 31 Maret 2025</p>
          </div>
        </div>
        
        <div class="timeline-item">
          <div class="timeline-dot"></div>
          <div class="timeline-content">
            <h3>Verifikasi Berkas</h3>
            <p>5 April - 15 April 2025</p>
          </div>
        </div>
        
        <div class="timeline-item">
          <div class="timeline-dot"></div>
          <div class="timeline-content">
            <h3>Tes Seleksi</h3>
            <p>20 April - 25 April 2025</p>
          </div>
        </div>
        
        <div class="timeline-item">
          <div class="timeline-dot"></div>
          <div class="timeline-content">
            <h3>Pengumuman Hasil Seleksi</h3>
            <p>5 Mei 2025</p>
          </div>
        </div>
        
        <div class="timeline-item">
          <div class="timeline-dot"></div>
          <div class="timeline-content">
            <h3>Daftar Ulang</h3>
            <p>10 Mei - 20 Mei 2025</p>
          </div>
        </div>
        
        <div class="timeline-item">
          <div class="timeline-dot"></div>
          <div class="timeline-content">
            <h3>Masa Pengenalan Lingkungan Sekolah</h3>
            <p>15 Juli - 20 Juli 2025</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container footer-container">
      <div class="footer-section">
        <h3>SMK Igasar Pindad Bandung</h3>
        <p>Jl. Pendidikan No. 123<br>
        Kota Sejahtera, 12345<br>
        Indonesia</p>
      </div>
      
      <div class="footer-section">
        <h3>Kontak Kami</h3>
        <p>Telepon: (021) 1234-5678<br>
        Email: info@smkigasarpindadbdg.id</p>
      </div>
      
      <div class="footer-section">
        <h3>Link Penting</h3>
        <ul>
          <li><a href="#beranda">Beranda</a></li>
          <li><a href="#tentang">Tentang</a></li>
          <li><a href="#program">Program Keahlian</a></li>
          <li><a href="#pendaftaran">Pendaftaran</a></li>
          <li><a href="#jadwal">Jadwal</a></li>
        </ul>
      </div>
      
      <div class="footer-section">
        <h3>Jam Operasional</h3>
        <p>Senin - Jumat: 08.00 - 16.00<br>
        Sabtu: 08.00 - 12.00<br>
        Minggu: Tutup</p>
      </div>
    </div>
    
    <div class="container copyright">
      <p>&copy; 2025 SMK Igasar Pindad Bandung. Hak Cipta Dilindungi.</p>
    </div>
  </footer>
</body>
</html>