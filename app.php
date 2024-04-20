<?php
session_start();

function isUserLoggedIn()
{
    return isset($_SESSION['nim']);
}

function redirectToLogin()
{
    header('Location: Lg_admin.php');
    exit();
}

function redirectToImportantPage()
{
    header('Location: ../view/table.php');
    exit();
}

if (isset($_GET['member'])) {
    if (!isUserLoggedIn()) {
        // Jika pengguna belum login, arahkan mereka ke halaman login
        redirectToLogin();
    } else {
        // Jika pengguna sudah login, arahkan mereka ke halaman penting
        redirectToImportantPage();
    }
}
// -----------------------------------------------------------------------------
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robotik IPB Cirebon</title>
    <meta name="title" content="Bootsrap">
    <!--     
    - favicon 
  -->
    <link rel="shortcut icon" href="img/logo_robotik-RV.png" type="image/jpeg">


    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- BOXICON -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- 
    - custom css link
  -->
    <link rel="stylesheet" href="css/app.css">

    <!-- 
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700;800&family=Poppins:wght@400;500&display=swap" rel="stylesheet">


</head>

<body id="top">


    <!-- 
    - #HEADER
  -->

    <header class="header" data-header>
        <div class="container">
            <a href="#" class="logo">
                <img src="img/logo_robotik-RV.png" width="40" height="20" alt="logo">
            </a>
            <h2 class="m-0 text-primary" style=" margin-right: auto; font-size: 20px;"><i class="fa fa-book me-3"></i>ROBOTIK</h2>


            <nav class="navbar" data-navbar>

                <div class="wrapper">
                    <a href="#" class="logo">
                        <img src="img/logo_robotik.jpeg" width="40" height="50" alt="IPB">
                    </a>
                    <h2 class="m-0 text-primary" style=" margin-right: auto; font-size: 15px;"><i class="fa fa-book me-3"></i>Robotik</h2>

                    <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
                        <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
                    </button>
                </div>

                <ul class="navbar-list">

                    <li class="navbar-item">
                        <a href="#home" class="navbar-link" data-nav-link>Home</a>
                    </li>

                    <li class="navbar-item">
                        <a href="#event" class="navbar-link" data-nav-link>Events</a>
                    </li>

                    <li class="navbar-item">
                        <a href="#about" class="navbar-link" data-nav-link>Galeri</a>
                    </li>

                    <li class="navbar-item">
                        <a href="?member" class="navbar-link" id="member" data-nav-link>TB admin</a>
                    </li>

                    <li class="navbar-item">
                        <a href="#Contact" class="navbar-link" data-nav-link>Contact</a>
                    </li>

                </ul>

            </nav>

            <div class="header-actions">

                <a href="?member" class="navbar-item" style=" padding:5px;">
                    <button name='user'><i style="font-size: 25px;" class='bx bxs-user'></i></button>
                </a>

                <button class="header-action-btn" aria-label="open menu" data-nav-toggler>
                    <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
                </button>

            </div>

            <div class="overlay" data-nav-toggler data-overlay></div>

        </div>
    </header>





    <main>
        <article>

            <!-- 
        - #HERO
      -->

            <section class="section hero " id="home" aria-label="home" width="1910" height="812" style="
            background-image: url('img/anime.png'); 
            background-size: cover; 
            background-attachment: local;
            padding-top: 1%; padding-bottom: 0; 
            margin-top:5%; ">
                <div style="
                backdrop-filter: opacity(0.5); 
                background: linear-gradient(0deg,  hsl(0, 0%, 100%) 0.5%, rgba(255, 255, 255, 0) 30%);  
                background-color: rgba(252, 252, 252, 0.645); 
                position: relative; 
                padding: 14%; ">


                    <div class="container">

                        <div class="hero-content" style="padding-top: 9%;">

                            <h1 class="h1 section-title" style=" mix-blend-mode: hard-light;">
                                Selamat datang di website <span class="span" style="color: #005eb5; font-weight: bold;">Robotik</span> terima kasih telah berkunjung
                            </h1>

                            <p class="hero-text" style="mix-blend-mode: hard-light;">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, iste!
                            </p>

                            <a href="#about" class="btn has-before  btn-outline-info">
                                <span class="span">Tentang kami</span>

                                <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                            </a>

                        </div>

                        <figure class="hero-banner">

                            <div class="img-holder one" style="--width: 170; --height: 100; ">
                            </div>

                            <div class="img-holder two" style="--width: 350; --height: 350;">
                                <img src="img/logo_robotik-RV.png" width="230" height="370" alt="hero banner" class="img-cover" style="mix-blend-mode:normal; object-fit:cover; ">
                            </div>

                            <img src="img/NAWASENA-light.png" width=" 55%" height="170" alt="Nawasena" style=" margin-bottom: 30px; mix-blend-mode: hard-light; " class="shape hero-shape-1">

                            <img src="img/Circuit-board.png" width="322" height="551" alt="png" class="shape hero-shape-2" style="mix-blend-mode: hard-light;  ">


                        </figure>

                    </div>
                </div>
            </section>


            <!-- 
        - #CATEGORY STRUKTUR
      -->

            <section class="section category" aria-label="category">
                <div class="container">

                    <p class="section-subtitle">Categories</p>

                    <h2 class="h2 section-title">
                        Build project <span class="span">Robotik</span> semester 2
                    </h2>

                    <p class="section-text">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore, ea!
                    </p>

                    <ul class="grid-list">

                        <li>
                            <div class="category-card" style="--color: 82, 100%, 39%">

                                <div class="card-icon">
                                    <img src="img/RBT-sumo.svg" width="70" height="55" loading="lazy" alt="Online Degree Programs" class="img">
                                </div>

                                <h3 class="h3">
                                    <a href="#St" class="card-title">Robot Sumo Trainer</a>
                                </h3>
                                <p>Frame terbuat dari 3d Printing dengan bahan PLA (Sari Pati Jagung) plastik aman bagi anak-anak</p>

                                <ul class="card-text">
                                    <h4 style="text-align: start;">Karakteristik RBT</h4>
                                    <li> Mikro : Arduino Nano </li>
                                    <li>Penggerak : Motor DC</li>
                                    <li>Sensor : Infra red & garis</li>
                                    <li>Supply : Battery AA 4 cell</li>
                                </ul>

                                <button class="card-badge"><a href="https://tokopedia.link/rJBTyzLhEIb">Telusuri</a></button>

                            </div>
                        </li>

                        <li>
                            <div class="category-card" style="--color:204, 100%, 60% ">

                                <div class="card-icon">
                                    <img src="img/RBT-lineFollow.svg" width="70" height="55" loading="lazy" alt="Non-Degree Programs" class="img">
                                </div>

                                <h3 class="h3">
                                    <a href="#" class="card-title">Robot line follower arduino 2</a>
                                </h3>
                                <p>Driver yang digunakan L9110S lebih efisien dan tidak membutuhkan sumber baterai dinamo.</p>

                                <ul class="card-text">
                                    <h4 style="text-align: start;">Karakteristik RBT</h4>
                                    <li>MIkro : Arduino UNO SMD</li>
                                    <li>Penggerak : MTRL9110S</li>
                                    <li>Gearbox : dinamo standart 3-6V</li>
                                    <li>Chasis : 2WD bahan akrilik with 1 chaster wheel</li>
                                    <li>Supply : 4 baterai AA (tidak termasuk)</li>
                                </ul>

                                <button class="card-badge"><a href="https://tokopedia.link/WS11FpHhEIb">Telusuri</a></button>

                            </div>
                        </li>

                        <li>
                            <div class="category-card" style="--color: 354, 70%, 54%">

                                <div class="card-icon">
                                    <img src="img/RBT-lineFollow.svg" width="70" height="55" loading="lazy" alt="Off-Campus Programs" class="img">
                                </div>

                                <h3 class="h3">
                                    <a href="#" class="card-title">Robot line follower arduino 2</a>
                                </h3>
                                <p>Driver yang digunakan L9110S lebih efisien dan tidak membutuhkan sumber baterai dinamo.</p>

                                <ul class="card-text">
                                    <h4 style="text-align: start;">Karakteristik RBT</h4>
                                    <li>MIkro : Arduino UNO SMD</li>
                                    <li>Penggerak : MTRL9110S</li>
                                    <li>Gearbox : dinamo standart 3-6V</li>
                                    <li>Chasis : 2WD bahan akrilik with 1 chaster wheel</li>
                                    <li>Supply : 4 baterai AA (tidak termasuk)</li>
                                </ul>

                                <span class="card-badge">SABTU</span>

                            </div>
                        </li>

                        <li>
                            <div class="category-card" style="--color: 134, 61%, 41%">

                                <div class="card-icon">
                                    <img src="img/RBT-sumo.svg" width="70" height="55" loading="lazy" alt="Kalkulus" class="img">
                                </div>

                                <h3 class="h3">
                                    <a href="#" class="card-title">Robot Sumo Trainer</a>
                                </h3>
                                <p>Frame terbuat dari 3d Printing dengan bahan PLA (Sari Pati Jagung) plastik aman bagi anak-anak</p>

                                <ul class="card-text">
                                    <h4 style="text-align: start;">Karakteristik RBT</h4>
                                    <li> Mikro : Arduino Nano </li>
                                    <li>Penggerak : Motor DC</li>
                                    <li>Sensor : Infra red & garis</li>
                                    <li>Supply : Battery AA 4 cell</li>
                                </ul>

                                <span class="card-badge">SELASA</span>

                            </div>
                        </li>

                    </ul>

                </div>
            </section>







            <!--       
        - #ABOUT
      -->

            <section class="section about" id="about" aria-label="about">
                <div class="container">

                    <figure class="about-banner">

                        <div class="img-holder" id="scroll" style="--width: 520; --height: 295;">
                            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-bs-interval="2000">
                                        <img src="img/family_robotik2.jpeg" class="d-block w-100 " alt="...">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                        <img src="img/family_robotik.jpeg" class="d-block w-100">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                        <img src="img/family_robotik.jpeg" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>

                        <img src="img/phone.png" width="195" height="325" loading="lazy" alt="ROBOTIK" style=" margin:30px;" class="shape about-shape-1">

                        <img src="img/logo_robotik-RV.png" width="315" height="380" loading="lazy" alt="" style="border-radius: 20px ; margin-bottom: 20%; width:35%; margin-left:15px;" class="shape about-shape-2">

                        <img src="img/Canva 1.svg" width="522" height="328" loading="lazy" alt="Canva" style="transform: rotate(150deg);" class="shape about-shape-3">

                    </figure>

                    <div class="about-content">

                        <p class="section-subtitle">Tentang kami</p>

                        <h2 class="h2 section-title">
                            Lorem ipsum dolor sit.<span class="span">Robotik </span> Lorem ipsum dolor sit, amet
                        </h2>

                        <p class="section-text">
                            Lorem ipsum dolor sit amet consectur adipiscing elit sed eiusmod ex tempor incididunt labore dolore magna
                            aliquaenim ad
                            minim.
                        </p>

                        <ul class="about-list">

                            <li class="about-item">
                                <ion-icon name="checkmark-done-outline" aria-hidden="true"></ion-icon>

                                <span class="span">Contoh Example</span>
                            </li>

                            <li class="about-item">
                                <ion-icon name="checkmark-done-outline" aria-hidden="true"></ion-icon>

                                <span class="span">Contoh Example</span>
                            </li>

                            <li class="about-item">
                                <ion-icon name="checkmark-done-outline" aria-hidden="true"></ion-icon>

                                <span class="span">Contoh Example</span>
                            </li>

                        </ul>

                        <img src="img/Canva-badge.svg" width="100" height="100" loading="lazy" alt="" class="shape about-shape-4">
                        <img src="img/Canva-badge-L.svg" width="140" height="100" loading="lazy" alt="" class="shape about-shape-4" style="position: absolute; margin-top:73%;">

                    </div>

                </div>
            </section>






            <!-- - #EVENT -->


            <section class="section event" id="event" aria-label="event">
                <div class="container">

                    <p class="section-subtitle">Event me</p>

                    <h2 class="h2 section-title"> Event Robotika</h2>

                    <ul class="grid-list">

                        <li>
                            <div class="event-card">

                                <figure class="card-banner img-holder" style="--width: 370; --height: 215;">
                                    <img src="img/Event1.jpeg" width="370" height="225" loading="lazy" alt="BUild Event Robotik" class="img-cover">
                                </figure>

                                <div class="abs-badge">
                                    <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                    <span class="span">1-juli</span>
                                </div>

                                <div class="card-content">

                                    <data class="badge">2024</data>

                                    <h3 class="h3">
                                        <a href="#" class="card-title">Lomba Invoasi Daerah Kabupaten Cirebon </a>
                                    </h3>

                                    <div class="wrapper">

                                        <div class="rating-wrapper">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>

                                        <p class="rating-text">(5.0/7 Rating)</p>

                                    </div>

                                    <button class="price" value="29" style="text-decoration: underline;"><a href="http://bappelitbangda.cirebonkab.go.id/news/lomba-inovasi-daerah-kabupaten-cirebon-tahun-2024">Info lebih lanjut</a></button>

                                    <ul class="card-meta-list">

                                        <li class="card-meta-item">
                                            <img src="http://bappelitbangda.cirebonkab.go.id/favicon.png" alt="">

                                            <span class="span">BPBD</span>
                                        </li>

                                        <li class="card-meta-item">
                                            <img src="img/LG-cirebon.svg" alt="" style="width:20px; height: 15px;">
                                            <span class="span">Cirebon-katen</span>
                                        </li>

                                    </ul>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="event-card">

                                <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                                    <img src="img/Event2.jpeg" width="370" height="225" loading="lazy" alt="Build UI/UX" class="img-cover">
                                </figure>

                                <div class="abs-badge">
                                    <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                    <span class="span">21-november</span>
                                </div>

                                <div class="card-content">

                                    <span class="badge">2024</span>

                                    <h3 class="h3">
                                        <a href="#" class="card-title">Lomba UI/UX Desain </a>
                                    </h3>

                                    <div class="wrapper">

                                        <div class="rating-wrapper">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>

                                        <p class="rating-text">(4.5 /9 Rating)</p>

                                    </div>

                                    <button class="price" value="29" style="text-decoration: underline;"><a href="https://tr.ee/4M63rgCsdd">Info lebih lanjut</a></button>

                                    <ul class="card-meta-list">

                                        <li class="card-meta-item">
                                            <img src="http://hima-ti.uniku.ac.id/favicon.ico" alt="Icon">
                                            <span class="span">UNIKU</span>
                                        </li>

                                        <li class="card-meta-item">
                                            <img src="https://assets.production.linktr.ee/profiles/_next/static/logo-assets/favicon.ico" alt="">
                                            <span class="span">HIMA-TI</span>
                                        </li>

                                    </ul>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="event-card">

                                <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                                    <img src="img/event-3.svg" width="370" height="220" loading="lazy" alt="The Complete Camtasia Course for Content Creators" class="img-cover">
                                </figure>

                                <div class="abs-badge">
                                    <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                    <span class="span">27-january</span>
                                </div>

                                <div class="card-content">

                                    <span class="badge">2024</span>

                                    <h3 class="h3">
                                        <a href="#" class="card-title">KEJURNAS 2024 Trans studio malang</a>
                                    </h3>

                                    <div class="wrapper">

                                        <div class="rating-wrapper">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>

                                        <p class="rating-text">(5.2 /7 Rating)</p>

                                    </div>

                                    <button class="price" value="29" style="text-decoration: underline;"><a href="https://www.instagram.com/p/C0-HKq2SflC/?utm_source=ig_web_copy_link">Info lebih lanjut</a></button>

                                    <ul class="card-meta-list">

                                        <li class="card-meta-item">
                                            <img src="img/logo-1 IG.ico" alt="Icon" width="23px" height="10px">
                                            <span class="span">Lombarobot.id</span>
                                        </li>

                                        <li class="card-meta-item">
                                            <img src="img/logo-trans.ico" alt="icon" width="22px" height="10px">
                                            <span class="span">Trans-studio</span>
                                        </li>

                                    </ul>

                                </div>

                            </div>
                        </li>

                    </ul>

                    <a href="https://www.instagram.com/lombarobot.id/p/C55OsSNPfxH/" class="btn has-before">
                        <span class="span">Event lainnya</span>

                        <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                    </a>

                </div>
            </section>






            <!-- - #VIDEO -->


            <section class="video has-bg-image" aria-label="video" style="background-image: url('')">
                <div class="container">

                    <div class="video-card">

                        <div class="video-banner img-holder has-after" style="--width: ; --height: ;">
                            <video src="img/video Contoh.mp4" width="970" height="550" loading="lazy" alt="video banner" class="img-cover" autoplay muted>

                                <button class="play-btn" aria-label="play video">
                                    <ion-icon name="play" aria-hidden="true"></ion-icon>
                                </button>
                        </div>

                        <img src="img/Canva 1.svg" width="1006" height="605" loading="lazy" alt="" class="shape video-shape-1">

                        <img src="img/blog-shape.png" width="158" height="174" loading="lazy" alt="" class="shape video-shape-2">

                    </div>

                </div>
            </section>




            <!-- ANGGOTA  -->

            <section class="section blog has-bg-image" id="blog" aria-label="blog" style="background-image: url('./assets/images/blog-bg.svg')">
                <div class="container">
                    <h2 class="h2 section-title">Struktur Anggota</h2>
                    <p class="section-subtitle">Generasi 5</p>

                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="blog-card custom-card">
                                    <!-- Konten slide 1 -->
                                    <li>
                                        <div class="blog-card custom-card">
                                            <figure class="card-banner img-holder has-after">
                                                <img src="img/foto.jpg" width="370" height="370" loading="lazy" alt="Profil 1" class="img-cover">
                                            </figure>
                                            <div class="card-content">
                                                <a href="#" class="card-btn" aria-label="read more">
                                                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                                                </a>
                                                <a href="#" class="card-subtitle">Profil</a>
                                                <h3 class="h3">
                                                    <a href="#" class="card-title">Muhammad Luthif Poeradiredja</a>
                                                </h3>
                                                <ul class="card-meta-list">
                                                    <li class="card-meta-item">
                                                        <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>
                                                        <span class="span">Dec 20, 2005</span>
                                                    </li>
                                                    <li class="card-meta-item">
                                                        <i class='bx bxs-group' aria-hidden="true"></i>
                                                        <span class="span">Pemorgraman 1</span>
                                                    </li>
                                                </ul>
                                                <p class="card-text">Lorem Ipsum Dolor Sit Amet Cons Tetur Adipisicing Sed.</p>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="blog-card custom-card">
                                    <!-- Konten slide 2 -->
                                    <li>
                                        <div class="blog-card custom-card">
                                            <figure class="card-banner img-holder has-after">
                                                <img src="img/foto.jpg" width="370" height="370" loading="lazy" alt="Profil 2" class="img-cover">
                                            </figure>
                                            <div class="card-content">
                                                <a href="#" class="card-btn" aria-label="read more">
                                                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                                                </a>
                                                <a href="#" class="card-subtitle">Profil</a>
                                                <h3 class="h3">
                                                    <a href="#" class="card-title">Muhammad Luthif Poeradiredja</a>
                                                </h3>
                                                <ul class="card-meta-list">
                                                    <li class="card-meta-item">
                                                        <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>
                                                        <span class="span">Dec 20, 2005</span>
                                                    </li>
                                                    <li class="card-meta-item">
                                                        <i class='bx bxs-group' aria-hidden="true"></i>
                                                        <span class="span">Pemorgraman 2</span>
                                                    </li>
                                                </ul>
                                                <p class="card-text">Lorem Ipsum Dolor Sit Amet Cons Tetur Adipisicing Sed.</p>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                            </div>
                            <!-- Tambahkan slide tambahan di sini -->
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <img src="img/blog-shape.png" width="186" height="186" loading="lazy" alt="" class="shape blog-shape">
                </div>
            </section>


        </article>
    </main>







    <!-- - #FOOTER -->


    <footer class="footer" style="background-image: url('img/BG-Canva.svg')" id="Contact">

        <div class="footer-top section">
            <div class="container grid-list">

                <div class="footer-brand">

                    <a href="#Contact" class="logo">
                        <img src="img/logo_robotik.jpeg" width="140" height="50" alt=" logo" style="border-radius: 25%;">
                    </a>

                    <p class="footer-brand-text">
                        Lorem ipsum dolor amet consecto adi pisicing elit sed eiusm tempor incidid unt labore dolore.
                    </p>

                    <div class="wrapper">
                        <span class="span">Add:</span>

                        <address class="address"><a href="https://maps.app.goo.gl/x1ctjpFWKHj8jRPH7">Jl.Brigjen Cirebon</a></address>
                    </div>

                    <div class="wrapper">
                        <span class="span">Call:</span>

                        <a href="tel:+011234567890" class="footer-link">+62 31 9295 7195</a>
                    </div>

                    <div class="wrapper">
                        <span class="span">Email:</span>

                        <a href="mailto:info@eduweb.com" class="footer-link">robotik@gmail.com</a>
                    </div>

                </div>

                <ul class="footer-list">

                    <li>
                        <p class="footer-list-title">Online Platform</p>
                    </li>

                    <li>
                        <a href="#about" class="footer-link">About</a>
                    </li>

                    <li>
                        <a href="../view/table.php" class="footer-link">Member</a>
                    </li>
                    <li>
                        <a href="#event" class="footer-link">Events</a>
                    </li>

                    <li>
                        <a href="../view/table.php" class="footer-link">Instructor Profile</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Coming Soon</a>
                    </li>

                </ul>

                <ul class="footer-list">

                    <li>
                        <p class="footer-list-title">Links</p>
                    </li>

                    <li>
                        <a href="#Contact" class="footer-link">Contact Us</a>
                    </li>

                    <li>
                        <a href="#about" class="footer-link">Gallery</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">News & Articles</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">tabel</a>
                    </li>

                    <li>
                        <a href="Lg_user.php" class="footer-link">Sign In</a>
                    </li>


                </ul>

                <div class="footer-list">

                    <p class="footer-list-title">Contacts</p>

                    <p class="footer-list-text">
                        Masukkan alamat email Anda untuk mendaftar Event kami
                    </p>

                    <div class="popup" id="popup">
                        <h4>Pesan dikirim ✈️ Terimakasih 🙏</h4>
                    </div>

                    <!-- From Email Footer -->
                    <form action="app.php" class="newsletter-form" id="myForm" method="POST">
                        <input type="email" name="Email" placeholder="Your email" class="input-field" required>
                        <button type="submit" id="submitButton" class="btn has-before" name="app">
                            <span class="span">Daftar email</span>
                            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                        </button>
                    </form>


                    <ul class="social-list">

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-linkedin"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-twitter"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-youtube"></ion-icon>
                            </a>
                        </li>

                    </ul>

                </div>

            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">

                <p class="copyright">
                    Copyright 2024 All Rights Reserved by <a href="#" class="copyright-link">LTH-robotik</a>
                </p>

            </div>
        </div>

    </footer>





    <!-- 
        - #BACK TO TOP
      -->

    <a href="#top" class="back-top-btn" aria-label="back top top" data-back-top-btn>
        <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
    </a>


    <!-- 
    - custom js link
  -->
    <script src="js/porto.js"></script>

    <!-- 
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- Script Botsrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- BOXICON -->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>




</body>

</html>