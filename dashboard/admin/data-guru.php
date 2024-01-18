<?php 
  session_start();

  $izin = $_SESSION["level"];
  if ($izin !== 'admin') {
      header("location: ../index.php");
      exit;
  }
  $username = $_SESSION["username"];
  $nomor = 1;
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
    <body id="page-top">
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
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="pengguna.php" style="color: #1ABC9C;">Edit Pengguna</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="konten.php">Edit Konten</a></li>
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
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">DATA GURU</h2><br>
                <!-- <form method="post" action="proses-terima.php"> -->
                <!-- Icon Divider-->
                <div class="divider-custom">
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                            <div id="content">
                    <h5 style="text-align: center;">Pengajuan Login</h5><br>
                    <table style="width: 100%;" class="table table-striped">
                        <tr>
                            <th>
                                Nomor
                            </th>
                            <th>
                                Nama
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Username
                            </th>
                            <th>
                                Aksi
                            </th>
                        </tr>
                    <?php
                        include('../koneksi.php');
                        $sql = "SELECT * FROM user WHERE status=0 AND level='guru'";
                        $query = mysqli_query($connect, $sql);
                        while ($data = mysqli_fetch_array($query)) {
                            echo "<tr>";
                            echo "<td>".$nomor++."</td>";
                            echo "<td>".$data['nama']."</td>";
                            echo "<td>".$data['email']."</td>";
                            echo "<td>".$data['username']."</td>";
                            echo "<td><a href='proses-terima.php?no=".$data['no']."'><button type='button' class='btn btn-primary' style='margin-right:10px;'>Diterima</button></a>
                                <a href='proses-tolak.php?no=".$data['no']."'><button type='button' class='btn btn-danger' style='margin-right:10px;'>Ditolak</button></a></td>";
                            echo "</tr>";
                        }
                    ?>
                    </table>
                        <!-- </form> -->
                    </div>
                </div>
                <!-- </form> -->
                <div id="content" style="margin-top:100px">
                    <h5 style="text-align: center;">Daftar Guru</h5><br>
                    <table style="width: 100%;" class="table table-striped">
                        <tr>
                            <th>
                                Nomor
                            </th>
                            <th>
                                Nama
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Username
                            </th>
                        </tr>
                    <?php
                        include('../koneksi.php');
                        $sql = "SELECT * FROM user WHERE status=1 AND level='guru'";
                        $query = mysqli_query($connect, $sql);
                        while ($data = mysqli_fetch_array($query)) {
                            echo "<tr>";
                            echo "<td>".$nomor++."</td>";
                            echo "<td>".$data['nama']."</td>";
                            echo "<td>".$data['email']."</td>";
                            echo "<td>".$data['username']."</td>";
                        }
                    ?>
                    </table>
                        <!-- </form> -->
                    </div>
            </div>
        </section>
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
