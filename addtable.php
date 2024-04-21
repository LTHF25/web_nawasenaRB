<?php

$servername = "localhost";
$username = "root";
$password = "MuhammadLuthfi25";
$dbname = "anggota_robotik";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// -------------------------------------------------------------

$nama_alat = "";
$harga_satuan = "";
$jumlah = "";
$harga_total = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Ambil nilai dari form
  $nama_alat = $_POST["nama_alat"];
  $harga_satuan = $_POST["harga_satuan"];
  $jumlah = $_POST["jumlah"];
  $harga_total = $_POST["harga_total"];


  // hitung harga total EXPERMN
  // $harga_total = $harga_satuan + $jumlah;


  // pengecekan data -----------------------------------------------
  do {
    if (empty($nama_alat) || empty($harga_satuan) || empty($jumlah) || empty($harga_total)) {

      $errorMessage = "invalid 🚫";
      break;
    }
    // Add data ke database LTH
    $sql = "INSERT INTO db_anggota (nama_alat, harga_satuan, jumlah, harga_total)" . "VALUES ('$nama_alat', '$harga_satuan', '$jumlah', '$harga_total')";
    $result = mysqli_query($con, $sql);

    if (!$result) {
      $errorMessage = "invalid data 🚫";
      break;
    }
    // Clear data ----------------------------------------------------------------

    $nama_alat = "";
    $harga_satuan = "";
    $jumlah = "";
    $harga_total = "";

    $successMessage = "Data berhasil masuk";
    header("location: table.php");
    exit;
    // --------------------------------------------------

  } while (false);
}

session_start();

// Fungsi untuk memeriksa apakah pengguna sudah login
function isUserLoggedIn()
{
  return isset($_SESSION["is_login"]) && $_SESSION["is_login"] === true;
}

// Periksa apakah pengguna belum login
if (!isUserLoggedIn()) {
  // Jika belum login, arahkan pengguna ke halaman login
  header("location: Lg_admin.php");
  exit();
}

?>





?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add data</title>

  <!--     
    - favicon 
  -->
  <link rel="shortcut icon" href="img/logo_robotik-RV.png" type="image/jpeg">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  <!-- BOXICON -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="Log_up.css">

  <!-- 
    - google font link
  -->
  <link rel=" preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700;800&family=Poppins:wght@400;500&display=swap" rel="stylesheet">
</head>
<!-- -------------------------------------------------------------------------------------------------------------------- -->

<body>
  <!-- Add Table -->

  <header class="container my-5">
    <h2>Add New Tools</h2>
    <!-- PHP POPUP ERROR -->
    <?php
    if (!empty($errorMessage)) {
      echo " <div class='alert alert-warning alert-dismissible fade show' role='alert'>
               <strong>$errorMessage</strong> Ups! data kamu mungkin sudah ada😵
               <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
             </div>";
    }
    ?>
    <!----------------------------------------------------------------------------------------- -->

    <form action="addtable.php" method="POST">
      <div class="row mb-3">
        <label for="data-alat" class="col-sm-3 col-form-label">Nama alat</label>
        <input type="text" class="form-control" id="data-alat" name="nama_alat" value="<?php echo $nama_alat; ?>" aria-describedby="data-help" required>
        <div id="emailHelp" class="form-text">Tolong tambahkan data dengan benar</div>
      </div>
      <div class="row mb-3">
        <label for="harga_satuan" class="form-label">Harga-satuan</label>
        <input type="number" name="harga_satuan" class="form-control" id="harga_satuan" value="<?php echo $harga_satuan; ?>" placeholder=" 10.000" min="0">
      </div>
      <div class="row mb-3">
        <label for="jumlah" class="form-label">Jumlah</label>
        <input type="number" name="jumlah" class="form-control" id="jumlah" min="0" value="<?php echo $jumlah; ?>" onchange="hitungTotal()">
      </div>
      <div class="row mb-3">
        <label for="harga_total" class="form-label">Harga Total (Rp):</label><br>
        <input type="text" class="form-control" id="harga_total" name="harga_total" value="<?php echo $harga_total; ?>" readonly>
      </div>

      <!-- PHP POPUP SUCCES -->
      <?php
      if (!empty($successMessage)) {
        echo " <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                 <div class='col-7'>
                  <strong>$successMessage</strong>✅ Data berhasil ditambahkan
                 </div>
               <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
             </div>";
      }
      ?>
      <!-- --------------------------------------------------------------------------------------------- -->

      <div class="row justify-content-end">
        <div class="col-7">
          <button type="submit" class="btn btn-outline-success"><a>Tambah</a></button>
        </div>
        <div class="col-4">
          <button type="button" class="btn btn-outline-danger"><a href="table.php" style="color: #b11625 ;">Cancel</a></button>
        </div>
      </div>
      </div>
    </form>
  </header>

  <script src="js/porto.js"></script>



</body>

</html>