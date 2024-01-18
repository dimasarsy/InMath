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
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="materi.php" style="color: #1ABC9C;">Materi Ajar</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="pembahasan.php">Kumpulan Soal dan Pembahasan</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="nilai.php">Pencarian Nilai Siswa</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        
        <!-- Portfolio Modal 6-->
        <section class="page-section bg-primary text-white mb-0" id="about" style="padding-top: 200px;">
            <div class="container">
                <!-- About Section Heading-->
                <!-- <h2 class="page-section-heading text-center text-uppercase text-white">IN MATH</h2><br><br><br> -->
                <!-- Icon Divider-->
                <!-- <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div> -->
                <!-- About Section Content-->
                <h1 style="color: #2C3E50; text-align: center;">Rangkuman Harga Jual, Beli, Untung dan Rugi</h1><br>
                <div class="row">
                    <div class="col-md-8">
                        <img src="../img/3.png" alt="" style="width: 100%; border-radius:20px;" class="mb-3">
                    </div>
                    <div class="col-md-4 mt-5">
                    <a href="rangkuman3.php"><button class="btn" style="width: 100%; color: black; background: #FFAC78;"><h5>Rangkuman Harga Jual, Beli, Untung dan Rugi</h5></button>></button></a>
                    <a href="rangkuman2.php"><button class="btn" style="width: 100%; color: black; background: #FFAC78;"><h5>Rangkuman Diskon, Pajak, dan Bunga</h5></button>></button></a>
                    <a href="rangkuman1.php"><button class="btn" style="width: 100%; color: black; background: #FFAC78;"><h5>Rangkuman Bruto, Netto, Tara</h5></button>></button></a>
                    </div>
                    <table>
                        <tr>
                            <td>
                                <a href="index.php"><button class="btn btn-primary" style="border-color: #2C3E50; background: #2C3E50">Menu</button></a> 
                            </td>
                            <td>
                                <a href="rangkuman2.php" style="float: right;"><button class="btn btn-primary" style="border-color: #2C3E50; background: #2C3E50">Selanjutnya</button></a>    
                            </td>
                        </tr>
                    </table>
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
