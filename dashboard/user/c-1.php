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
                                <p><b>1.</b>Ilman membeli sabun dettol dan sabun lifebouy masing-masing 1 sabun dengan tercantum berat bersihnya pada masing-masing sabun. Jika diketahui bahwa berat kemasan sabun dettol adalah 3 gram dan kemasan sabun lifebouy adalah 2 gram. Maka pernyataan yang tepat adalah...</p>
                                <table>
                                    <tr>
                                        <td>
                                            <img src="../img/soal19a.jpg" style="width:100%;"></img>
                                        </td>
                                        <td>
                                            <img src="../img/soal19b.jpg" style="width:100%;"></img>
                                        </td>
                                    </tr>
                                </table>
                                <input type="radio" name="pilgan" value="A. Bruto Dettol < Bruto Lifebouy">
                                <label>A. Bruto Dettol < Bruto Lifebouy</label><br>
                                <input type="radio" name="pilgan" value="B. Tara Dettol = Tara Lifebouy">
                                <label>B. Tara Dettol = Tara Lifebouy</label><br>
                                <input type="radio" name="pilgan" value="C. Netto Dettol > Netto Lifebouy">
                                <label>C. Netto Dettol > Netto Lifebouy</label><br>
                                <input type="radio" name="pilgan" value="D. Brutu Dettol > Bruto Lifebouy">
                                <label>D. Brutu Dettol > Bruto Lifebouy</label><br>
                                <div class="divider-custom">
                                <input type="submit" value="Submit" name="hSkor" class="btn btn-primary" style="border-color: #2C3E50; background: #2C3E50">
                                <?php 
                                    if(isset($_POST['hSkor'])) {
                                        include ('../koneksi.php');
                                        $jawab = $_POST['pilgan'];
                                        $nama = $username;
                                        $correct = "INSERT INTO nilai3 SET username='$nama', satu=1";
                                        $incorrect = "INSERT INTO nilai3 SET username='$nama', satu=0";
                                        if ($jawab=="A. Bruto Dettol < Bruto Lifebouy") {
                                            echo "<script>";
                                            echo "swal('Jawaban Anda Benar!', 'Pembahasan: Sabun Dettol. Netto = 100 gram. Tara = 3 gram. Bruto = Netto + Tara. Bruto = 100 gram + 3 gram. Bruto = 103 gram. Sabun Lifebouy. Netto = 110 gram. Tara = 2 gram. Bruto = Netto + Tara. Bruto = 110 gram + 3 gram. Bruto = 112 gram. Maka. Netto Dettol < Netto Lifebouy. Tara Dettol > Tara Lifebouy. Bruto Dettol < Bruto Lifebouy.', 'success')";
                                            echo ".then((value) => {";
                                            echo "window.location.href = 'c-2.php';";
                                            echo "});";
                                            echo "</script>";
                                            $query = mysqli_query($connect, $correct);
                                        } else {
                                            echo "<script>";
                                            echo "swal('Jawaban Anda Salah!', 'Pembahasan: Sabun Dettol. Netto = 100 gram. Tara = 3 gram. Bruto = Netto + Tara. Bruto = 100 gram + 3 gram. Bruto = 103 gram. Sabun Lifebouy. Netto = 110 gram. Tara = 2 gram. Bruto = Netto + Tara. Bruto = 110 gram + 3 gram. Bruto = 112 gram. Maka. Netto Dettol < Netto Lifebouy. Tara Dettol > Tara Lifebouy. Bruto Dettol < Bruto Lifebouy.', 'error')";
                                            echo ".then((value) => {";
                                            echo "window.location.href = 'c-2.php';";
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
