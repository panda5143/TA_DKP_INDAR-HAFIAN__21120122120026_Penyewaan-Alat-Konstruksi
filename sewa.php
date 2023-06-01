<?php
session_start();

if (isset($_GET['harga'])) {
    $hargaSewa = $_GET['harga'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nama = $_POST['nama'];
        $tanggalMulai = $_POST['tanggal_mulai'];
        $tanggalSelesai = $_POST['tanggal_selesai'];

        $tanggalMulaiObj = new DateTime($tanggalMulai);
        $tanggalSelesaiObj = new DateTime($tanggalSelesai);
        $durasiSewa = $tanggalMulaiObj->diff($tanggalSelesaiObj)->days;
        $totalHarga = $hargaSewa * $durasiSewa;

        $_SESSION['nama'] = $nama;
        $_SESSION['hargaSewa'] = $hargaSewa;
        $_SESSION['tanggalMulai'] = $tanggalMulai;
        $_SESSION['tanggalSelesai'] = $tanggalSelesai;
        $_SESSION['durasiSewa'] = $durasiSewa;
        $_SESSION['totalHarga'] = $totalHarga;

        header('Location: hasil.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulir Penyewaan</title>
    <link rel="stylesheet" type="text/css" href="sewa.css">
</head>
<body>
    <header>
        <h1>Formulir Penyewaan</h1>
    </header>
  
    <nav>
        <ul>
            <li><a href="coba2.php">Beranda</a></li>
            <li><a href="coba3.php">Kendaraan</a></li>
            <li><a href="tentang.php">Tentang Kami</a></li>

        </ul>
    </nav>

    <div class="container">
        <form method="POST" action="">
            <label for="nama">Nama Penyewa:</label>
            <input type="text" name="nama" id="nama" required><br><br>
            <label for="tanggal_mulai">Tanggal Mulai:</label>
            <input type="date" name="tanggal_mulai" id="tanggal_mulai" required><br><br>
            <label for="tanggal_selesai">Tanggal Selesai:</label>
            <input type="date" name="tanggal_selesai" id="tanggal_selesai" required><br><br>
            <input type="submit" value="Sewa Mobil">
        </form>
    </div>

    <footer>
        <p>Penyewaan Alat Konstruksi Terbaik dan Lengkap hanya NICE</p>
    </footer>
</body>
</html>
