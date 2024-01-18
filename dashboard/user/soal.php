<?php 
  session_start();

  $izin = $_SESSION["level"];
  if ($izin !== 'user') {
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
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="video1.php">Video</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="rangkuman3.php">Rangkuman</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="lagu.php">Lagu</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="latihan.php">Latihan Soal</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="soal.php" style="color: #1ABC9C;">Kuis</a></li>
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
                <div class="row">
                    <table>
                        <tr>
                            <td>
                                <h1 style="color: #2C3E50; text-align: center;">PILIHAN KUIS</h1><br>
                                <a onclick="myFunction()"><button class="btn" style="width: 100%; color: black; background: #FFAC78;"><h5>Kuis Harga Jual, Harga beli, Untung, dan Rugi</h5></button>></button></a>
                                <a onclick="myFunction2()"><button class="btn" style="width: 100%; color: black; background: #FFAC78;"><h5>Kuis Diskon, Pajak, dan Bunga</h5></button>></button></a>
                                <a onclick="myFunction3()"><button class="btn" style="width: 100%; color: black; background: #FFAC78;"><h5>Kuis Bruto, Netto, dan Tara</h5></button>></button></a>
                            </td>
                        </tr>
                    </table>
                    <script>
                    function myFunction() {
                        var ask = window.confirm("Apakah Yakin Akan Memulai Kuis Mengenai Harga Jual, Harga beli, Untung, dan Rugi?");
                        if (ask) {
                            window.location.href = "a-1.php";

                        }
                    }
                    function myFunction2() {
                        var ask = window.confirm("Apakah Yakin Akan Memulai Kuis Mengenai Diskon, Pajak, dan Bunga?");
                        if (ask) {
                            window.location.href = "b-1.php";

                        }
                    }
                    function myFunction3() {
                        var ask = window.confirm("Apakah Yakin Akan Memulai Kuis Mengenai Bruto, Netto, dan Tara?");
                        if (ask) {
                            window.location.href = "c-1.php";

                        }
                    }
                    </script>
                    <!-- <a href="materi.php"><button class="btn btn-primary" style="border-color: white;">Kembali</button></a> -->
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
