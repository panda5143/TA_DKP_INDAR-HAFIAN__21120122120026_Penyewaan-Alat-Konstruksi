<?php
session_start();

if (isset($_SESSION['nama']) && isset($_SESSION['hargaSewa']) && isset($_SESSION['tanggalMulai']) && isset($_SESSION['tanggalSelesai']) && isset($_SESSION['durasiSewa']) && isset($_SESSION['totalHarga'])) {

    $nama = $_SESSION['nama'];
    $hargaSewa = $_SESSION['hargaSewa'];
    $tanggalMulai = $_SESSION['tanggalMulai'];
    $tanggalSelesai = $_SESSION['tanggalSelesai'];
    $durasiSewa = $_SESSION['durasiSewa'];
    $totalHarga = $_SESSION['totalHarga'];

    unset($_SESSION['nama']);
    unset($_SESSION['hargaSewa']);
    unset($_SESSION['tanggalMulai']);
    unset($_SESSION['tanggalSelesai']);
    unset($_SESSION['durasiSewa']);
    unset($_SESSION['totalHarga']);
} else {

    header('Location: coba3.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Penyewaan</title>
    <link rel="stylesheet" type="text/css" href="hasil.css">
</head>
<body>
    <header>
        <h1>Informasi Penyewaan dan Pembayaran</h1>
    </header>

    <nav>
        <ul>
            <li><a href="coba2.php">Beranda</a></li>
            <li><a href="coba3.php">Kendaraan</a></li>
            <li><a href="tentang.php">Tentang Kami</a></li>

        </ul>
    </nav>

    <div class="container">
        <p>Nama Penyewa: <?php echo $nama; ?></p>
        <p>Harga Sewa per Hari: Rp <?php echo $hargaSewa; ?></p>
        <p>Tanggal Mulai: <?php echo $tanggalMulai; ?></p>
        <p>Tanggal Selesai: <?php echo $tanggalSelesai; ?></p>
        <p>Durasi Sewa: <?php echo $durasiSewa; ?> hari</p>
        <p>Total Pembayaran: Rp <?php echo number_format($totalHarga, 0, ',', '.'); ?></p>
    </div>

    <footer>
        <p>Penyewaan Alat Konstruksi Terbaik dan Lengkap hanya NICE</p>
    </footer>
</body>
</html>
