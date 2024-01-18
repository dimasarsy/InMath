<?php 
  session_start();

  $izin = $_SESSION["level"];
  if ($izin !== 'guru') {
      header("location: ../index.php");
      exit;
  }
  $username = $_SESSION["username"];
 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>In Math</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top" style="background: #B1F8E5;">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
            <a href="index.php"><img src="../../dashboard/img/home.png" alt="" height="70" width="70" style="margin: 1px 15px 5px 1px;"></a><a class="navbar-brand" href="#">Selamat Datang <br> <?php echo "$username";?></a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="materi.php">Materi Ajar</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="pembahasan.php">Kumpulan Soal dan Pembahasan</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="nilai.php">Pencarian Nilai Siswa</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        
        <!-- Portfolio Modal 6-->
        <section class="page-section bg-primary text-white mb-0" id="about" style="padding-top: 200px; background-color: #b1f8e5;">
            <div class="container">
                <div class="row">
                    <h1 style="color: #2C3E50">In Math<br><p style="font-size:0.5em">E-Learning Berbasis Website.</p></h1>
                    <h5 style="color: black;">Matematika menjadi lebih menarik dengan In Math. Kamu bisa belajar materi aritmetika sosial kelas 7 dengan mengakses konten yang disediakan. Konten telah disesuaikan dengan kompetensi dasar dan indikator pembelajaran.</h5>
                    
                    <div class="col-md-4">
                    <h5 style="color: black;  margin-top:15px;"><b>Kompetensi Dasar</b></h5>
                    
                        <div style="color: black; border-style:solid; border:1px; padding:10px; border-radius: 10px; background-image: url('img/bg1.jpg'); background-size: cover;">
                            <p><b>3.9</b> Mengenal dan menganalisis berbagai situasi terkait aritmetika sosial (penjualan, pembelian, potongan, keuntungan, kerugian, bruto, netto, tara)</p>
                            <p><b>4.9</b> Menyelesaikan masalah berkaitan dengan aritmetika sosial (penjualan, pembelian, potngan, keuntungan, kerugian, bruto, netto, tara)</p>
                        </div>
                    </div>

                    <div class="col-md-8">
                    <h5 style="color: black;  margin-top:15px;"><b>Indikator</b></h5>
                        <div style="color: black; border-style:solid; border:1px; padding:10px; border-radius: 10px; background-image: url('img/bg2.jpg'); background-size: cover;">
                            <p><b>3.9.1</b> Mengenal fenomena atau aktivitas yang terkait dengan aritmetika sosial (penjualan, pembelian, potongan, keuntungan, kerugian, bruto, neto, tara)</p>
                            <p><b>3.9.2</b> Mendapatkan informasi yang terkait dengan aritmatika sosial (penjualan, pembelian, potongan, keuntungan, kerugian, bruto, neto, tara)</p>
                            <p><b>3.9.3</b> Menentukan hubungan antara penjualan, pembelian, untung dan rugi</p>
                            <p><b>3.9.5</b> Menentukan hubungan antara bruto, neto dan tara</p>
                            <p><b>4.9.1</b> Memecahkan masalah terkait dengan aritmetika sosial</p>
                        </div>
                    </div>
                    </div>

                    <h5 style="color: black; margin-top:50px; text-align: center;"><b>Matematika Kelas 7</b></h5>
                    <h5 style="color: black; text-align: center;">Aritmetika Sosial</h5>
                    <div style="color: black; border-style:solid; border:1px; padding:10px; border-radius: 10px; background:white;">
                        <section class="page-section portfolio" id="portfolio">
                        <div class="container">
                            <div class="container" data-aos="fade-up">
                            <div class="row">
                                <div class="col">
                                <a href="video1.php"><img class="card-img-top p-3" src="../img/gvideo.png" alt="Card image cap" /></a>
                                <div class="card-body">
                                    <h5 class="card-title">Video</h5>
                                </div>
                                </div>
                                <div class="col">
                                <a href="rangkuman1.php"><img class="card-img-top p-3" src="../img/grangkuman.png" alt="Card image cap" /></a>
                                <div class="card-body">
                                    <h5 class="card-title">Rangkuman</h5>
                                </div>
                                </div>
                                <div class="col">
                                <a href="lagu.php"><img class="card-img-top p-3" src="../img/glagu.png" alt="Card image cap" /></a>
                                <div class="card-body">
                                    <h5 class="card-title">Lagu</h5>
                                </div>
                                </div>
                                <div class="col">
                                <a href="pembahasan.php"><img class="card-img-top p-3" src="../img/gsoal.png" alt="Card image cap" /></a>
                                <div class="card-body">
                                    <h5 class="card-title">Latihan Soal & Pembahasan</h5>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </section>
                    </div>

                </div>
                <!-- About Section Button-->
            </div>
        </section>
        <div class="copyright py-4 text-center text-white">
                <div class="container"><small>Copyright &copy; In Math - 2021</small></div>
            </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
