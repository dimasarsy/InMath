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
                        $r1 = "SELECT video1 FROM konten";
                        $qr1 = mysqli_query($connect, $r1);
                        $hqr1= mysqli_fetch_assoc($qr1);

                        $r2 = "SELECT video2 FROM konten";
                        $qr2 = mysqli_query($connect, $r2);
                        $hqr2= mysqli_fetch_assoc($qr2);

                        $r3 = "SELECT video3 FROM konten";
                        $qr3 = mysqli_query($connect, $r3);
                        $hqr3= mysqli_fetch_assoc($qr3);

                        $r4 = "SELECT video4 FROM konten";
                        $qr4 = mysqli_query($connect, $r4);
                        $hqr4= mysqli_fetch_assoc($qr4);

                        $r5 = "SELECT video5 FROM konten";
                        $qr5 = mysqli_query($connect, $r5);
                        $hqr5= mysqli_fetch_assoc($qr5);
                     ?>
                    <table>
                        <tr>
                            <td>
                                <form method="post" enctype="multipart/form-data">
                                <h1 style="color: #2C3E50; text-align: center;">Video Harga Jual dan Beli</h1><br>
                                <video width="100%" height="500" controls style="border-radius: 10px;">
                                    <source src="../video/<?php echo $hqr1['video1']; ?>" type="video/mp4">
                                </video> 
                                <p style="color: #2C3E50;">Ganti Video Harga Jual dan Beli (.mp4)</p>
                                    <input type="file" name="file">
                                    <br>
                                    <button class="btn btn-primary mt-2" style="border-color: #2C3E50; background: #2C3E50" name="submit">Ganti</button>
                                    <?php 
                                        include('../koneksi.php');
                                          if (isset($_POST['submit'])) {
                                            $nama_file = $_FILES['file']['name'];
                                            $tmp_file = $_FILES['file']['tmp_name'];
                                            $nama = "video 1 fix.mp4";
                                            $path = "../video/".$nama;
                                            if (move_uploaded_file($tmp_file, $path)) {
                                                $sql = "UPDATE konten SET video1 = '$nama' WHERE no=1";
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
                                <h1 style="color: #2C3E50; text-align: center;">Video Untung dan Rugi</h1><br>
                                <video width="100%" height="500" controls style="border-radius: 10px;">
                                    <source src="../video/<?php echo $hqr2['video2']; ?>" type="video/mp4">
                                </video> 
                                <p style="color: #2C3E50;">Ganti Video Untung dan Rugi (.mp4)</p>
                                    <input type="file" name="file">
                                    <br>
                                    <button class="btn btn-primary mt-2" style="border-color: #2C3E50; background: #2C3E50" name="submit2">Ganti</button>
                                    <?php 
                                        include('../koneksi.php');
                                          if (isset($_POST['submit2'])) {
                                            $nama_file = $_FILES['file']['name'];
                                            $tmp_file = $_FILES['file']['tmp_name'];
                                            $nama = "video 2 fix.mp4";
                                            $path = "../video/".$nama;
                                            if (move_uploaded_file($tmp_file, $path)) {
                                                $sql = "UPDATE konten SET video2 = '$nama' WHERE no=1";
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
                                <h1 style="color: #2C3E50; text-align: center;">Video Diskon</h1><br>
                                <video width="100%" height="500" controls style="border-radius: 10px;">
                                    <source src="../video/<?php echo $hqr3['video3']; ?>" type="video/mp4">
                                </video> 
                                <p style="color: #2C3E50;">Ganti Video Diskon (.mp4)</p>
                                    <input type="file" name="file">
                                    <br>
                                    <button class="btn btn-primary mt-2" style="border-color: #2C3E50; background: #2C3E50" name="submit3">Ganti</button>
                                    <?php 
                                        include('../koneksi.php');
                                          if (isset($_POST['submit3'])) {
                                            $nama_file = $_FILES['file']['name'];
                                            $tmp_file = $_FILES['file']['tmp_name'];
                                            $nama = "video 3 fix.mp4";
                                            $path = "../video/".$nama;
                                            if (move_uploaded_file($tmp_file, $path)) {
                                                $sql = "UPDATE konten SET video3 = '$nama' WHERE no=1";
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
                                <h1 style="color: #2C3E50; text-align: center;">Video Pajak dan Bunga</h1><br>
                                <video width="100%" height="500" controls style="border-radius: 10px;">
                                    <source src="../video/<?php echo $hqr4['video4']; ?>" type="video/mp4">
                                </video> 
                                <p style="color: #2C3E50;">Ganti Video Pajak dan Bunga (.mp4)</p>
                                    <input type="file" name="file">
                                    <br>
                                    <button class="btn btn-primary mt-2" style="border-color: #2C3E50; background: #2C3E50" name="submit4">Ganti</button>
                                    <?php 
                                        include('../koneksi.php');
                                          if (isset($_POST['submit4'])) {
                                            $nama_file = $_FILES['file']['name'];
                                            $tmp_file = $_FILES['file']['tmp_name'];
                                            $nama = "video 4 fix.mp4";
                                            $path = "../video/".$nama;
                                            if (move_uploaded_file($tmp_file, $path)) {
                                                $sql = "UPDATE konten SET video4 = '$nama' WHERE no=1";
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
                                <h1 style="color: #2C3E50; text-align: center;">Video Bruto, Netto dan Tara</h1><br>
                                <video width="100%" height="500" controls style="border-radius: 10px;">
                                    <source src="../video/<?php echo $hqr5['video5']; ?>" type="video/mp4">
                                </video> 
                                <p style="color: #2C3E50;">Ganti Video Bruto, Netto dan Tara (.mp4)</p>
                                    <input type="file" name="file">
                                    <br>
                                    <button class="btn btn-primary mt-2" style="border-color: #2C3E50; background: #2C3E50" name="submit5">Ganti</button>
                                    <?php 
                                        include('../koneksi.php');
                                          if (isset($_POST['submit5'])) {
                                            $nama_file = $_FILES['file']['name'];
                                            $tmp_file = $_FILES['file']['tmp_name'];
                                            $nama = "video 5 fix.mp4";
                                            $path = "../video/".$nama;
                                            if (move_uploaded_file($tmp_file, $path)) {
                                                $sql = "UPDATE konten SET video5 = '$nama' WHERE no=1";
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
                                <a href="konten.php"><button class="btn btn-primary" style="border-color: #2C3E50; background: #2C3E50"><< Kembali</button></a>    
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
