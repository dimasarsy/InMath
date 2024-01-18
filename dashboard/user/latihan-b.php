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
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="latihan.php" style="color: #1ABC9C;">Latihan Soal</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="soal.php">Kuis</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        
        <!-- Portfolio Modal 6-->
        <section class="page-section bg-primary mb-0" id="about" style="padding-top: 200px;">
            <div class="container">
                <h1 style="color: #2C3E50; text-align: center;">Latihan Soal Harga Jual, Beli, Untung dan Rugi</h1><br>
                <div class="row">
                    <div class="col-md-8">
                    <p style="font-size: x-large;">
                    Fira sedang berbelanja online dan menemukan sebuah masker dengan harga Rp20.000 per masker. <br>
                    Kemudian Fira membeli 10 masker untuk nantinya dijual kembali. <br>
                    Fira memesan online masker tersebut dan dikenakan ongkir Rp10.000. <br>
                    Berapa modal keseluruhan untuk 10 masker yang dibeli Fira? <br><br>
                    Harga beli per unit masker = <input id="isi" type="text" placeholder="Jawab" style="width: 100px;"><input type="text" disabled placeholder="Kunci" style="background: chartreuse; width:100px" id="satu"> <br>
                    Fira membeli <input id="isi2" type="text" placeholder="Jawab" style="width: 100px;"><input type="text" disabled placeholder="Kunci" style="background: chartreuse; width:100px" id="dua"> masker <br>
                    Harga beli keseluruhan masker = <input id="isi3" type="text" placeholder="Jawab" style="width: 100px;"><input type="text" disabled placeholder="Kunci" style="background: chartreuse; width:100px" id="tiga"> x <input id="isi4" type="text" placeholder="Jawab" style="width: 100px;"><input type="text" disabled placeholder="Kunci" style="background: chartreuse; width:100px" id="empat"> <br>
                    Harga beli keseluruhan masker = <input id="isi5" type="text" placeholder="Jawab" style="width: 100px;"><input type="text" disabled placeholder="Kunci" style="background: chartreuse; width:100px" id="lima"> <br><br>

                    Modal adalah besar pengeluaran yang dilakukan untuk melakukan suatu usaha. <br>
                    Maka modal disini adalah penjumlahan dari harga beli dan ongkir. <br>

                    Modal keseluruhan = Harga beli keseluruhan + Ongkir <br>
                    Modal keseluruhan = <input id="isi6" type="text" placeholder="Jawab" style="width: 100px;"><input type="text" disabled placeholder="Kunci" style="background: chartreuse; width:100px" id="enam"> + <input id="isi7" type="text" placeholder="Jawab" style="width: 100px;"><input type="text" disabled placeholder="Kunci" style="background: chartreuse; width:100px" id="tujuh"> <br>
                    Modal keseluruhan = <input id="isi8" type="text" placeholder="Jawab" style="width: 100px;"><input type="text" disabled placeholder="Kunci" style="background: chartreuse; width:100px" id="delapan">
                    </p>
                    </div>
                    <div class="col-md-4">
                    <a href="latihan.php"><button class="btn" style="width: 100%; color: black; background: #FFAC78;"><h5>Latihan Soal Harga Jual, Beli, Untung dan Rugi</h5></button>></button></a>
                    <a href="latihan-2.php"><button class="btn" style="width: 100%; color: black; background: #FFAC78;"><h5>Latihan Soal Diskon, Pajak, dan Bunga</h5></button>></button></a>
                    <a href="latihan-3.php"><button class="btn" style="width: 100%; color: black; background: #FFAC78;"><h5>Latihan Soal Bruto, Netto, Tara</h5></button>></button></a>
                    </div>
                    <table>
                        <tr>
                            <td>
                                <a href="latihan.php"><button class="btn btn-primary" style="border-color: #2C3E50; background: #2C3E50">Kembali</button></a> 
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary" onclick="myFunction()" style="border-color: #2C3E50; background: yellow; color: black">Cek Jawaban</button>
                            </td>
                            <td>
                                <a href="latihan-c.php" style="float: right;"><button class="btn btn-primary" style="border-color: #2C3E50; background: #2C3E50">Selanjutnya</button></a>    
                            </td>
                        </tr>
                    </table>
                </div>
                <script>
                function myFunction(){
                    var x = document.getElementById("isi").value;
                    var x = document.getElementById("isi2").value;
                    var x = document.getElementById("isi3").value;
                    var x = document.getElementById("isi4").value;
                    var x = document.getElementById("isi5").value;
                    var x = document.getElementById("isi6").value;
                    var x = document.getElementById("isi7").value;
                    var x = document.getElementById("isi8").value;
                    if (x == "") {
                        alert("Jawaban harus diisi");
                        return false;
                        }
                    document.getElementById("satu").value = "20.000";
                    document.getElementById("dua").value = "10";
                    document.getElementById("tiga").value = "10";
                    document.getElementById("empat").value = "20.000";
                    document.getElementById("lima").value = "200.000";
                    document.getElementById("enam").value = "200.000";
                    document.getElementById("tujuh").value = "10.000";
                    document.getElementById("delapan").value = "210.000";
                }
            </script>
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
