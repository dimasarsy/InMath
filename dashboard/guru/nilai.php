<?php 
  session_start();

  $izin = $_SESSION["level"];
  if ($izin !== 'guru') {
      header("location: ../index.php");
      exit;
  }
  $username = $_SESSION["username"];
  $nomor1 = 1;
  $nomor2 = 1;
  $nomor3 = 1;
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
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="materi.php">Materi Ajar</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="pembahasan.php">Kumpulan Soal dan Pembahasan</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="nilai.php" style="color: #1ABC9C;">Pencarian Nilai Siswa</a></li>
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
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">NILAI SISWA</h2><br>
                <form method="post">
                <input type="text" name="filter" style="width: 100%; border-radius: 2px;" placeholder="Ketikan Username/Nama Siswa untuk Filter" class="form-control">
                <!-- Icon Divider-->
                <div class="divider-custom">
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-11 col-xl-11">
                    <b>Keterangan:
                    Benar = 1;
                    Salah = 0.</b><br><br>
                    <div id="content">
                    <h4>Nilai Soal Harga Jual, Harga Beli, Untung, dan Rugi</h4>
                    <table style="width: 100%;" class="table table-striped">
                        <tr>
                            <th>
                                Nomor
                            </th>
                            <th>
                                Nama
                            </th>
                            <th>
                                Nomor 1
                            </th>
                            <th>
                                Nomor 2
                            </th>
                            <th>
                                Nomor 3
                            </th>
                            <th>
                                Nomor 4
                            </th>
                            <th>
                                Nomor 5
                            </th>
                            <th>
                                Nomor 6
                            </th>
                            <th>
                                Nomor 7
                            </th>
                            <th>
                                Nomor 8
                            </th>
                            <th>
                                Nomor 9
                            </th>
                            <th>
                                Nomor 10
                            </th>
                        </tr>
                    <?php 
                    include("../koneksi.php");
                    if(isset($_POST['filter'])){
                      $filter = $_POST['filter'];
                      // $filter = preg_replace("#[^0-9a-z]#i","",$filterq);
                      $sql = "SELECT * FROM nilai WHERE username LIKE '%$filter%' ORDER BY no DESC";
                      $query = mysqli_query($connect, $sql);
                      $count = mysqli_num_rows($query);
                      if ($count == 0) {
                        echo "<td colspan='3'><h5 style='text-align=center;'>Tidak ada data yang Anda cari</h5></td>";
                      } else {
                        while($data = mysqli_fetch_array($query)){
                        echo "<tr style=text-align:center>";
                        echo "<td>".$nomor1++."</td>";
                        echo "<td>".$data['username']."</td>";
                        echo "<td>".$data['satu']."</td>";
                        echo "<td>".$data['dua']."</td>";
                        echo "<td>".$data['tiga']."</td>";
                        echo "<td>".$data['empat']."</td>";
                        echo "<td>".$data['lima']."</td>";
                        echo "<td>".$data['enam']."</td>";
                        echo "<td>".$data['tujuh']."</td>";
                        echo "<td>".$data['delapan']."</td>";
                        echo "<td>".$data['sembilan']."</td>";
                        echo "<td>".$data['sepuluh']."</td>";
                        echo "</tr>";
                        }
                      }
                    }
                    ?>
                    </table><br><br>
                    <h4>Nilai Soal Diskon, Pajak, dan Bunga</h4>
                    <table style="width: 100%;" class="table table-striped">
                        <tr>
                            <th>
                                Nomor
                            </th>
                            <th>
                                Nama
                            </th>
                            <th>
                                Nomor 1
                            </th>
                            <th>
                                Nomor 2
                            </th>
                            <th>
                                Nomor 3
                            </th>
                            <th>
                                Nomor 4
                            </th>
                            <th>
                                Nomor 5
                            </th>
                            <th>
                                Nomor 6
                            </th>
                            <th>
                                Nomor 7
                            </th>
                        </tr>
                    <?php 
                    include("../koneksi.php");
                    if(isset($_POST['filter'])){
                      $filter = $_POST['filter'];
                      // $filter = preg_replace("#[^0-9a-z]#i","",$filterq);
                      $sql = "SELECT * FROM nilai2 WHERE username LIKE '%$filter%' ORDER BY no DESC";
                      $query = mysqli_query($connect, $sql);
                      $count = mysqli_num_rows($query);
                      if ($count == 0) {
                        echo "<td colspan='3'><h5 style='text-align=center;'>Tidak ada data yang Anda cari</h5></td>";
                      } else {
                        while($data = mysqli_fetch_array($query)){
                        echo "<tr style=text-align:center>";
                        echo "<td>".$nomor2++."</td>";
                        echo "<td>".$data['username']."</td>";
                        echo "<td>".$data['satu']."</td>";
                        echo "<td>".$data['dua']."</td>";
                        echo "<td>".$data['tiga']."</td>";
                        echo "<td>".$data['empat']."</td>";
                        echo "<td>".$data['lima']."</td>";
                        echo "<td>".$data['enam']."</td>";
                        echo "<td>".$data['tujuh']."</td>";
                        echo "</tr>";
                        }
                      }
                    }
                    ?>
                    </table><br><br>
                    <h4>Nilai Soal Bruto, Netto, dan Tara</h4>
                    <table style="width: 100%;" class="table table-striped">
                        <tr>
                            <th>
                                Nomor
                            </th>
                            <th>
                                Nama
                            </th>
                            <th>
                                Nomor 1
                            </th>
                            <th>
                                Nomor 2
                            </th>
                            <th>
                                Nomor 3
                            </th>
                            <th>
                                Nomor 4
                            </th>
                            <th>
                                Nomor 5
                            </th>
                        </tr>
                    <?php 
                    include("../koneksi.php");
                    if(isset($_POST['filter'])){
                      $filter = $_POST['filter'];
                      // $filter = preg_replace("#[^0-9a-z]#i","",$filterq);
                      $sql = "SELECT * FROM nilai3 WHERE username LIKE '%$filter%' ORDER BY no DESC";
                      $query = mysqli_query($connect, $sql);
                      $count = mysqli_num_rows($query);
                      if ($count == 0) {
                        echo "<td colspan='3'><h5 style='text-align=center;'>Tidak ada data yang Anda cari</h5></td>";
                      } else {
                        while($data = mysqli_fetch_array($query)){
                        echo "<tr style=text-align:center>";
                        echo "<td>".$nomor3++."</td>";
                        echo "<td>".$data['username']."</td>";
                        echo "<td>".$data['satu']."</td>";
                        echo "<td>".$data['dua']."</td>";
                        echo "<td>".$data['tiga']."</td>";
                        echo "<td>".$data['empat']."</td>";
                        echo "<td>".$data['lima']."</td>";
                        echo "</tr>";
                        }
                      }
                    }
                    ?>
                    </table>
                    </div>
                </div>
                </form>
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
