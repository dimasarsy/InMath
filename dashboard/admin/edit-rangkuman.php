<?php 
  session_start();

  $izin = $_SESSION["level"];
  if ($izin !== 'admin') {
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
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="pengguna.php">Edit Pengguna</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="konten.php" style="color: #1ABC9C;">Edit Konten</a></li>
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
                    <?php 
                        include('../koneksi.php');
                        $r1 = "SELECT rangkuman1 FROM konten";
                        $qr1 = mysqli_query($connect, $r1);
                        $hqr1= mysqli_fetch_assoc($qr1);

                        $r2 = "SELECT rangkuman2 FROM konten";
                        $qr2 = mysqli_query($connect, $r2);
                        $hqr2= mysqli_fetch_assoc($qr2);

                        $r3 = "SELECT rangkuman3 FROM konten";
                        $qr3 = mysqli_query($connect, $r3);
                        $hqr3= mysqli_fetch_assoc($qr3);
                     ?>
                    <table>
                        <tr>
                            <td>
                                <form method="post" enctype="multipart/form-data">
                                    <h1 style="color: #2C3E50; text-align: center;">Rangkuman Bruto, Netto, Tara</h1><br>
                                    <img src="../img/<?php echo $hqr1['rangkuman1']; ?>" width="100%" />
                                    <p style="color:#2C3E50">Ganti Rangkuman Bruto, Netto, Tara (.png)</p>
                                    <input type="file" name="file">
                                    <br>
                                    <button class="btn btn-primary"  style="border-color: #2C3E50; margin-top:8px; background: #2C3E50" name="submit">Ganti</button>
                                    <?php 
                                        include('../koneksi.php');
                                          if (isset($_POST['submit'])) {
                                            $nama_file = $_FILES['file']['name'];
                                            $tmp_file = $_FILES['file']['tmp_name'];
                                            $nama = "bruto.png";
                                            $path = "../img/".$nama;
                                            if (move_uploaded_file($tmp_file, $path)) {
                                                $sql = "UPDATE konten SET rangkuman1 = '$nama' WHERE no=1";
                                                $query = mysqli_query($connect, $sql);
                                            } else {
                                                echo "<h1 style='text-align: center; background: red; color:white;'>Isikan Data Dengan Benar! <br> (Termasuk Kolom File Tidak Boleh Kosong)</h1>";
                                            }
                                      }
                                     ?>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <form method="post" enctype="multipart/form-data">
                                    <h1 style="color: #2C3E50; text-align: center;">Rangkuman Diskon</h1><br>
                                    <img src="../img/<?php echo $hqr2['rangkuman2']; ?>" width="100%" />
                                    <p style="color: #2C3E50;">Ganti Rangkuman Diskon (.png)</p>
                                    <input type="file" name="file">
                                    <br>
                                    <button class="btn btn-primary"  style="border-color: #2C3E50; margin-top:8px; background: #2C3E50" name="submit2">Ganti</button>
                                    <?php 
                                        include('../koneksi.php');
                                          if (isset($_POST['submit2'])) {
                                            $nama_file = $_FILES['file']['name'];
                                            $tmp_file = $_FILES['file']['tmp_name'];
                                            $nama = "diskon.png";
                                            $path = "../img/".$nama;
                                            if (move_uploaded_file($tmp_file, $path)) {
                                                $sql = "UPDATE konten SET rangkuman2 = '$nama' WHERE no=1";
                                                $query = mysqli_query($connect, $sql);
                                            } else {
                                                echo "<h1 style='text-align: center; background: red; color:white;'>Isikan Data Dengan Benar! <br> (Termasuk Kolom File Tidak Boleh Kosong)</h1>";
                                            }
                                      }
                                     ?>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <form method="post" enctype="multipart/form-data">
                                    <h1 style="color: #2C3E50; text-align: center;">Rangkuman Harga Jual, Beli, Untung dan Rugi</h1><br>
                                    <img src="../img/<?php echo $hqr3['rangkuman3']; ?>" width="100%" />
                                    <p style="color: #2C3E50;">Ganti Rangkuman Harga Jual, Beli, Untung dan Rugi (.png)</p>
                                    <input type="file" name="file">
                                    <br>
                                    <button class="btn btn-primary" style="border-color: #2C3E50; margin-top:8px; background: #2C3E50" name="submit3">Ganti</button>
                                    <?php 
                                        include('../koneksi.php');
                                          if (isset($_POST['submit3'])) {
                                            $nama_file = $_FILES['file']['name'];
                                            $tmp_file = $_FILES['file']['tmp_name'];
                                            $nama = "3.png";
                                            $path = "../img/".$nama;
                                            if (move_uploaded_file($tmp_file, $path)) {
                                                $sql = "UPDATE konten SET rangkuman3 = '$nama' WHERE no=1";
                                                $query = mysqli_query($connect, $sql);
                                            } else {
                                                echo "<h1 style='text-align: center; background: red; color:white;'>Isikan Data Dengan Benar! <br> (Termasuk Kolom File Tidak Boleh Kosong)</h1>";
                                            }
                                      }
                                     ?>
                                </form>
                            </td>
                        </tr>
                    </table>
                    <table style="margin-top: 10px;">
                        <tr>
                            <td>
                                <a href="konten.php"><button class="btn btn-primary" style="border-color: #2C3E50; background: #2C3E50">Kembali</button></a>    
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- About Section Button-->
            </div>
        </section>
        <div class="copyright py-4 text-center text-white" style="position: fixed; left:0; bottom:0; width:100%;">
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
