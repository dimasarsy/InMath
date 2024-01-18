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
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
        <style>
            label{
                font-size: x-large;
            }
            p{
                font-size: x-large;
            }
        </style>
    </head>
    <body id="page-top" style="background-image: url('img/bg_kuis.jpg');">
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
        <section class="page-section" id="contact" style="margin-top: 100px;">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Kuis</h2><br>
                <!-- Icon Divider-->
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <!-- <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="GET"> -->
                            <form method="POST">
                            <div style="color: black; border-style:solid; border:1px; padding:10px; border-radius: 10px; background-color: white;">
                                <p><b>4.</b> Diketahui satu kemasan susu dengan bruto 1 kg dan tara 80 gram. Persentase nettonya adalah...</p>
                                <input type="radio" name="pilgan" value="A. 20%">
                                <label>A. 20%</label><br>
                                <input type="radio" name="pilgan" value="B. 80%">
                                <label>B. 80%</label><br>
                                <input type="radio" name="pilgan" value="C. 82%">
                                <label>C. 82%</label><br>
                                <input type="radio" name="pilgan" value="D. 92%">
                                <label>D. 92%</label><br>
                                <div class="divider-custom">
                                <input type="submit" value="Submit" name="hSkor" class="btn btn-primary" style="border-color: #2C3E50; background: #2C3E50">
                                <?php 
                                    if(isset($_POST['hSkor'])) {
                                        include ('../koneksi.php');
                                        $jawab = $_POST['pilgan'];
                                        $nama = $username;
                                        $correct = "UPDATE nilai3 SET empat=1 WHERE username='$nama'";
                                        $incorrect = "UPDATE nilai3 SET empat=0 WHERE username='$nama'";
                                        if ($jawab=="D. 92%") {
                                            echo "<script>";
                                            echo "swal('Jawaban Anda Benar!', 'Pembahasan : Bruto = 1 kg = 1.000 gram. Tara = 80 gram. Netto = Bruto – Tara. Netto = 1.000 gram – 80 gram. Netto = 920 gram. Persentase netto =Netto/Bruto×100%. Persentase netto =(920 gram)/(1.000 gram)×100%. Persentase netto =(920 gram)/(10 gram)×1%. Persentase netto =(92 gram)/(1 gram)×1%. Persentase netto = 92%', 'success')";
                                            echo ".then((value) => {";
                                            echo "window.location.href = 'c-5.php';";
                                            echo "});";
                                            echo "</script>";
                                            $query = mysqli_query($connect, $correct);
                                        } else {
                                            echo "<script>";
                                            echo "swal('Jawaban Anda Salah!', 'Pembahasan : Bruto = 1 kg = 1.000 gram. Tara = 80 gram. Netto = Bruto – Tara. Netto = 1.000 gram – 80 gram. Netto = 920 gram. Persentase netto =Netto/Bruto×100%. Persentase netto =(920 gram)/(1.000 gram)×100%. Persentase netto =(920 gram)/(10 gram)×1%. Persentase netto =(92 gram)/(1 gram)×1%. Persentase netto = 92%', 'error')";
                                            echo ".then((value) => {";
                                            echo "window.location.href = 'c-5.php';";
                                            echo "});";
                                            echo "</script>";
                                            $query = mysqli_query($connect, $incorrect);
                                        }
                                    }
                                 ?>
                            </form>
                            <!-- <script type="text/javascript">
                                 function myFunction(){
                                    Swal.fire({
                                      icon: 'error',
                                      title: 'Oops...',
                                      text: 'Something went wrong!',
                                      footer: '<a href="">Why do I have this issue?</a>'
                                    })
                                 }
                             </script> -->
                        <!-- </form> -->
                    </div>
                </div>
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
