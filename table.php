<?php

session_start();
function isUserLoggedIn()
{
  return isset($_SESSION['nim']);
}

function redirectToLogin()
{
  header('Location:Lg_admin.php');
  exit();
}


function redirectToImportantPage()
{
  header('Location:addtable.php');
  exit();
}

if (isset($_GET['data'])) {
  if (!isUserLoggedIn()) {
    redirectToLogin();
    // Jika pengguna belum login, arahkan mereka ke halaman login
  } else {
    redirectToImportantPage();
    // Jika pengguna sudah login, arahkan mereka ke halaman ini
  }
}



function isUserD()
{
  return isset($_SESSION['nim']);
}

function redirectToD($id)
{
  if (!isUserD()) {
    header('Location:/Lg_admin.php');
  } else {
    header("Location: Dtable.php?id=$id");
  }
  exit();
}

function isUserE()
{
  return isset($_SESSION['nim']);
}

function redirectToE($id)
{
  if (!isUserE()) {
    header('Location:Lg_admin.php');
  } else {
    header("Location: Etable.php?id=$id");
  }
  exit();
}








?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nawasena Table</title>
  <meta name="title" content="Bootsrap">
  <!--     
    - favicon 
  -->
  <link rel="shortcut icon" href="../project/img/logo_robotik-RV.png" type="image/jpeg">


  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- BOXICON -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700;800&family=Poppins:wght@400;500&display=swap" rel="stylesheet">


</head>

<body id="top" style="
    background-image: url(../project/img/tabel-BG.svg);
    background-attachment: fixed;
    background-size: cover;
    background-position: right; height: 100vh; padding: 5px 5%;">

  <nav class="navbar bg-light fixed-top">
    <div class="container-fluid">
      <img class="navbar-brand" src="../project/img/logo_robotik-RV.png" width="40" height="50" alt="IPB">
      <h4 class="navbar-brand">purchasing <span style="color: #005eb5 ;">Nawasena</span></h4>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Nawasena</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../project/app.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="TBlogout.php" id="logout1">logout</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Account
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#Contact">Contact</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <?php

                function isUserNotif()
                {
                  return isset($_SESSION["is_login"]) && $_SESSION["is_login"] === true;
                }
                ?>
                <?php if (isUserNotif()) : ?>
                  <li><a class="dropdown-item" href="#" style="color:green; text-shadow:chartreuse; font-weight:600">NIM: <?= $_SESSION['nim'] ?></a></li>
                <?php else : ?>
                  <li><a class="dropdown-item" href="#" style="color:red; text-shadow:darkred; font-weight:600">Anda belum login</a></li>
                <?php endif; ?>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>


  <!-- 
    - #TABLE
  -->

  <div class="container my-5" style=" padding: 40px 5%;">
    <h3>Daftar pembelian </h3>
    <div class="row justify-content-between">
      <div class="col-4">
        <a class="btn btn-outline-dark" href="?data" role="button" style="margin-top: 3%;">New data</a>
      </div>
      <div class="col-5">
        <img src="../project/img/NAWASENA.RB.png" style="object-fit: cover; width:15rem; " alt="Logo" height="65" class="d-inline-block align-text-start container">
      </div>
    </div>
    <br>
    <!-- TABLE--------------------- -->
    <table class="table table-bordered table-sm" style="min-width: auto;">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Alat</th>
          <th scope="col">Jumlah</th>
          <th scope="col">Harga-satuan</th>
          <th scope="col">Total-harga</th>
          <th scope="col">Fitur</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
        <?php

        include("../project/data/dataApp.php");



        // KONEKSI DATABASE
        $servername = "localhost";
        $username = "root";
        $password = "MuhammadLuthfi25";
        $dbname = "anggota_robotik";

        // Create connection
        $con = new mysqli($servername, $username, $password, $dbname);
        // -------------------------------------------------------------------

        // Check connection
        if ($con->connect_error) {
          die("Connection failed: " . $con->connect_error);
        }
        $sql = "SELECT * FROM db_anggota";
        $result = $con->query($sql);
        if (!$result) {
          die("Invalid query" . $con->error);
        }
        // ---------------------------------------------------------------


        // ---------------------------------------------------------------
        // FRONT DATA DARI DATABASE
        // ---------------------------------------------------------------

        while ($row = $result->fetch_assoc()) {
          echo "<tr class='table-primary' style= 'color: #101113;'>
            <td scope='row'>$row[id]</td>
            <td>$row[nama_alat]</td>
            <td>$row[jumlah]</td>
            <td>$row[harga_satuan]</td>
            <td>$row[harga_total]</td>
            <td>
              <a class='btn btn-warning btn-sm' style='margin:3px 5%;' href='" . (isUserE() ? "Etable.php?id={$row['id']}" : "../project/Lg_admin.php") . "'>Edit</a>
              <a class='btn btn-danger btn-sm' href='" . (isUserD() ? "Dtable.php?id={$row['id']}" : "../project/Lg_admin.php") . "'>Delete</a>

            </td>
          </tr>
            ";
        }
        ?>
        <!------------------------------------------------------------- -->
      </tbody>
    </table>
  </div>


  <!-- - #STATE -->


  <section class="section stats" aria-label="stats">
    <div class="container">
      <ul class="grid-list" style=" 
       list-style-type: none;
       display: inline-flex;
       flex-wrap: wrap;">

        <li>
          <div class="stats-card" style="color: 170, 75%, 41%;">
            <h3 class="card-title">40</h3>

            <p class="card-text">Anggota</p>
          </div>
        </li>

        <li>
          <div class="stats-card" style="--color: 351, 83%, 61%">
            <h3 class="card-title">15%</h3>

            <p class="card-text">Project robot</p>
          </div>
        </li>

        <li>
          <div class="stats-card" style="--color: 260, 100%, 67%">
            <h3 class="card-title">100%</h3>

            <p class="card-text">lorem ipsum</p>
          </div>
        </li>

        <li>
          <div class="stats-card" style="--color: 42, 94%, 55%">
            <h3 class="card-title">354+</h3>

            <p class="card-text">lorem ipsum</p>
          </div>
        </li>

      </ul>

    </div>
  </section>




  <!-- Script Botsrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  <script src="../project/js/porto.js">
  </script>

</body>


<style>
  /* STYLE NUMBER  */
  :root {
    --radius-10: 10px;
    --ff-league_spartan: 'League Spartan', sans-serif;
    --fs-2: 3.2rem;
    --eerie-black-1: hsl(0, 0%, 9%);

  }



  .stats-card {
    text-align: start;
    padding: 25px;
    border-radius: var(--radius-10);
  }

  .stats-card :is(.card-title, .card-text) {
    font-family: var(--ff-league_spartan);

  }

  .stats-card .card-title {
    color: hsl(var(--color));
    font-size: var(--fs-2);
    line-height: 1.1;
  }

  .stats-card .card-text {
    color: var(--eerie-black-1);
    text-transform: uppercase;
  }
</style>

</html>