<!DOCTYPE html>
<html>
<head>
  <title>List Rental Mobil</title>
  <link rel="stylesheet" type="text/css" href="style3.css">
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
  
  <div class="container">
    <?php
    $cars = array(
      array(
        "nama" => "Tower Crane",
        "harga" => "5000000",
        "gambar" => "img/Tower-Crane.jpg"
      ),
      array(
        "nama" => "Mobile Crane",
        "harga" => "1000000",
        "gambar" => "img/mobile_crane.jpg"
      ),
      array(
        "nama" => "Excavator",
        "harga" => "1500000",
        "gambar" => "img/excavator.jpg"
      ),
      array(
        "nama" => "Dump Truck",
        "harga" => "2500000",
        "gambar" => "img/dump-Truck.jpg"
      ),
      array(
        "nama" => "Concrete Vibrator",
        "harga" => "2750000",
        "gambar" => "img/concrete_vibrator.jpg"
      ),
      array(
        "nama" => "Bulldozer",
        "harga" => "3500000",
        "gambar" => "img/Bulldozer.jpeg"
      ),
      array(
        "nama" => "Backhoe loader",
        "harga" => "3750000",
        "gambar" => "img/Backhoe loader.jpg"
      ),
      array(
        "nama" => "Scraper",
        "harga" => "5400000",
        "gambar" => "img/Scraper.jpg"
      ),
      array(
        "nama" => "Sheep foot roller",
        "harga" => "4000000",
        "gambar" => "img/Sheep foot roller.jpg"
      ),
      array(
        "nama" => "Bar Bender & Bar Cutter",
        "harga" => "4500000",
        "gambar" => "img/Bar Bender & Bar Cutter.jpg"
      ),
      array(
        "nama" => "Asphalt Finisher",
        "harga" => "4250000",
        "gambar" => "img/Asphalt Finisher.jpg"
      ),
      array(
        "nama" => "Pneumatic Tired Roller",
        "harga" => "1000000",
        "gambar" => "img/Pneumatic Tired Roller.jpg"
      ),
      
    );

    foreach ($cars as $car) {
      echo '<div class="mobil-item">';
      echo '<img src="' . $car["gambar"] . '" alt="' . $car["nama"] . '">';
      echo '<h3>' . $car["nama"] . '</h3>';
      echo '<p>' . $car["harga"] . '</p>';
      echo '<a href="sewa.php?harga=' . urlencode($car["harga"]) . '" class="btn">Sewa Sekarang</a>';
      echo '</div>';
    }
    ?>
  </div>

  <footer>
    <p>Penyewaan Alat Konstruksi Terbaik dan Lengkap hanya NICE</p>
  </footer>
</body>
</html>
