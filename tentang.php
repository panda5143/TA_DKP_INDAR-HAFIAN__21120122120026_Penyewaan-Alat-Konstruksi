<!DOCTYPE html>
<html>
<head>
  <title>Penyewaan Alat Konstruksi</title>
  <link rel="stylesheet" type="text/css" href="tentang.css">
</head>
<body>
  <header>
    <h1>Penyewaan Alat Konstruksi NICE</h1>
  </header>
  
  <nav>
    <ul>
      <li><a href="coba2.php">Beranda</a></li>
      <li><a href="coba3.php">Kendaraan</a></li>
      <li><a href="tentang.php">Tentang Kami</a></li>

    </ul>
  </nav>

  <?php
        $namaPerusahaan = "NICE";
        $deskripsiPerusahaan = "<h2>Penyewaan Alat Konstruksi NICE</h2></br>

        Penyewaan Alat Konstruksi NICE adalah perusahaan yang menyediakan layanan penyewaan alat-alat konstruksi yang berkualitas dan handal. Perusahaan kami menawarkan beragam pilihan alat konstruksi yang dibutuhkan dalam berbagai proyek konstruksi, termasuk alat berat, peralatan pemadatan, peralatan pengeboran, dan banyak lagi.</br>
        Komitmen kami adalah memberikan solusi yang efektif dan efisien bagi para pelanggan kami. Dengan menyewa alat konstruksi dari NICE, pelanggan dapat menghemat biaya investasi awal yang signifikan dalam pembelian alat konstruksi baru. Selain itu, pelanggan juga dapat menghindari kerumitan perawatan, perbaikan, dan penggantian alat yang sering terjadi ketika memiliki alat sendiri.</br>
        Kualitas alat konstruksi yang disediakan oleh NICE sangat diutamakan. Kami bekerja sama dengan produsen terkemuka dan hanya menyediakan alat-alat yang telah melalui pemeriksaan ketat untuk memastikan kinerja yang optimal dan keandalan dalam setiap proyek konstruksi. Tim teknisi kami secara teratur melakukan perawatan dan perbaikan untuk menjaga kondisi alat tetap prima.</br>
        Selain itu, NICE juga memberikan layanan pelanggan yang sangat baik. Tim kami yang berpengalaman dan terlatih siap membantu pelanggan dalam memilih alat yang sesuai dengan kebutuhan proyek, memberikan informasi yang akurat tentang spesifikasi dan fitur alat, serta memberikan dukungan teknis selama masa penyewaan.</br>
        Keunggulan Penyewaan Alat Konstruksi NICE adalah kesediaan alat yang beragam dan terkini, layanan pelanggan yang profesional, kualitas alat yang handal, dan fleksibilitas penyewaan yang disesuaikan dengan kebutuhan pelanggan. Kami berkomitmen untuk menjadi mitra yang dapat diandalkan bagi para profesional konstruksi dalam mencapai kesuksesan proyek mereka.</br>
        Dengan memilih Penyewaan Alat Konstruksi NICE, pelanggan dapat fokus pada proyek mereka tanpa khawatir tentang kepemilikan dan pemeliharaan alat konstruksi. Kami hadir untuk mendukung kemajuan industri konstruksi dengan menyediakan solusi penyewaan yang berkualitas, efisien, dan handal.";
        $alamatPerusahaan = "Jalan Yang Benar No. 001, Kota Inazuma";
        $teleponPerusahaan = "+8123-5364-6576";
        $emailPerusahaan = "KonstruksiNICE_Official@perusahaan.id";
        $facebookURL = "https://www.facebook.com/";
        $twitterURL = "https://www.twitter.com/";
        $instagramURL = "https://www.instagram.com/";
    ?>

    <div class="container">
        <p><?php echo $deskripsiPerusahaan; ?></p>
        <p><strong>Alamat:</strong> <?php echo $alamatPerusahaan; ?></p>
        <div class="contact-info">
            <p><strong>Telepon:</strong> <?php echo $teleponPerusahaan; ?></p>
        </div>
        <div class="contact-info">
            <p><strong>Email:</strong> <?php echo $emailPerusahaan; ?></p>
        </div>
        <div class="social-media">
            <a href="<?php echo $facebookURL; ?>" target="_blank">Facebook</a>
            <a href="<?php echo $twitterURL; ?>" target="_blank">Twitter</a>
            <a href="<?php echo $instagramURL; ?>" target="_blank">Instagram</a>
        </div>
    </div>

  <footer>
    <p>Penyewaan Alat Konstruksi Terbaik dan Lengkap hanya NICE</p>
  </footer>
</body>
</html>
