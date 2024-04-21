<?php
// ------------------------------------------------------
//                    Koneksi ke database
// ------------------------------------------------------
$servername = "localhost";
$username = "root";
$password = "MuhammadLuthfi25";
$dbname = "anggota_robotik";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// ------------------------------------------------------

$id = "";
$nama_alat = "";
$harga_satuan = "";
$jumlah = "";
$harga_total = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER["REQUEST_METHOD"] == 'GET') {
    // Periksa id disetel ke URL

    if (!isset($_GET["id"])) {
        header("location: table.php");
        exit;
    }
    $id = $_GET["id"];

    $sql = "SELECT * FROM db_anggota WHERE id=$id";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location: table.php");
        exit;
    }

    $nama_alat = $row["nama_alat"];
    $harga_satuan = $row["harga_satuan"];
    $jumlah = $row["jumlah"];
    $harga_total = $row["harga_total"];
} else {
    // Jika form diupdate, jalankan blok kode ini
    $id = $_POST["id"];
    $nama_alat = $_POST["nama_alat"];
    $harga_satuan = $_POST["harga_satuan"];
    $jumlah = $_POST["jumlah"];
    $harga_total = $_POST["harga_total"];

    do {
        if (empty($id) || empty($nama_alat) || empty($harga_satuan) || empty($jumlah) || empty($harga_total)) {
            $errorMessage = "invalid 🚫";
            break;
        }
        // update data
        $sql = "UPDATE `db_anggota` " . "SET `nama_alat`='$nama_alat',`jumlah`='$jumlah',`harga_satuan`='$harga_satuan',`harga_total`='$harga_total' " . "WHERE id = $id";
        $result = mysqli_query($con, $sql);

        if (!$result) {
            $errorMessage = "Data Error 🥴 " . $con->error;
            break;
        }

        $successMessage = "Data berhasil diupdate 👍";
        header("location: table.php");
        exit;
    } while (true);
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
                header("location: ../project/Lg_admin.php");
                exit();
            }

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit data</title>

    <!--     
    - favicon 
  -->
    <link rel="shortcut icon" href="../project/img/logo_robotik-RV.png" type="image/jpeg">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- BOXICON -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- 
    - custom css link
  -->
    <link rel="stylesheet" href="../project/css/Log_up.css">

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
        <h2>Edit data</h2>
        <!-- PHP POPUP ERROR -->
        <?php
        if (!empty($errorMessage)) {
            echo " <div class='alert alert-warning alert-dismissible fade show' role='alert'>
               <strong>$errorMessage</strong> Ups! data kamu mungkin sudah ada😵
               <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
             </div>";
        }
        ?>
        <!-- -------------------------------------------------------------------------------------- -->

        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
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
                <input type="text" class="form-control" id="harga_total" name="harga_total" value="<?php echo $harga_total; ?>" readonly><br><br>
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
                    <button type="submit" class="btn btn-outline-success">Edit</button>
                </div>
                <div class="col-4">
                    <button type="button" class="btn btn-outline-danger"><a href="table.php" style="color: #b11625 ;">Cancel</a></button>
                </div>
            </div>
            </div>
        </form>
    </header>

    <script src="../project/js/porto.js"></script>



</body>

</html>