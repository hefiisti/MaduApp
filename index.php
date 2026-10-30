<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madu Alami Xheya</title>
    <!-- Menghubungkan ke file CSS -->
    <link rel="stylesheet" href="style.css">
    
    <!-- Font Awesome untuk icon sosial media -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Google Font untuk Logo Teks yang Unik (Pacifico) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>

<!-- Latar belakang bg.jpg dipanggil di sini. Pastikan bg.jpg ada di folder yang sama dengan index.php -->
<body style="background-image: url('bg.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed;">

    <!-- NAVBAR -->
    <header class="navbar">
        <div class="logo">
            <!-- Logo menggunakan font unik -->
            <a href="#" class="text-logo">Madu Alami Xheya</a>
        </div>
        <nav>
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Produk</a></li>
                <li><a href="#">Tentang</a></li>
                <li><a href="#">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="hero-text">
            <h1>Madu Hutan<br>Murni Dari<br>Alam</h1>
            <a href="#" class="btn-beli">BELI SEKARANG</a>
        </div>
        <div class="hero-image">
            <img src="assets/gambar.madu.jpeg" alt="Madu Hutan Murni">
        </div>
    </section>

    <!-- BAGIAN FITUR (MENGAPA MEMILIH KAMI) -->
    <section class="features">
        <h2>Mengapa Memilih Kami</h2>
        <div class="feature-grid">
            <div class="card">
                <img src="assets/icon.manis.jpeg" alt="Tanpa Pemanis">
                <p>Manis Alami<br>Nol Gula<br>Tambahan</p>
            </div>
            <div class="card">
                <img src="assets/icon-hutan.png" alt="Hutan Alami">
                <p>Sumber Alami<br>Yang<br>Terjaga</p>
            </div>
            <div class="card">
                <img src="assets/icon-lebah.png" alt="Lebah Lokal">
                <p>Kualitas Lebah<br>Hutan<br>Pilihan</p>
            </div>
            <div class="card">
                <img src="assets/icon-murni.png" alt="Murni Tanpa Aditif">
                <p>Murni<br>Tanpa<br>Zat Aditif</p>
            </div>
            <div class="card">
                <img src="assets/icon-tradisional.png" alt="Proses Tradisional">
                <p>Proses<br>Tradisional<br>Berkualitas</p>
            </div>
            <div class="card">
                <img src="assets/icon-vitamin.png" alt="Padat Vitamin">
                <p>Padat Vitamin<br>dan<br>Antioksidan</p>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="socials">
            <a href="#"><i class="fab fa-instagram instagram-icon"></i> @madualamixheya</a>
            <a href="#"><i class="fab fa-tiktok tiktok-icon"></i> @madualamixheya</a>
        </div>
        <div class="copyright">
            <p>&copy; 2026 madu alami xheya</p>
        </div>
    </footer>

</body>
</html>