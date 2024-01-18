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
                    Pak Badri membeli 6 kg telur dengan harga per kg adalah Rp25.000. <br>
                    Saat membawanya pulang untuk dijual ditoko depan rumahnya
                    ternyata dalam perjalanan ada telur yang pecah sebanyak 1 kg. <br>
                    Pak Badri berniat untuk menjual telur yang masih tersisa dengan harga Rp28.000/kg. <br>
                    Apakah Pak Badri akan mendapatkan untung dari penjualan tersebut? <br><br>
                    Untuk mencari tahu tentang keuntungan atau kerugian yang akan dialami
                    maka peru menghitung modal keseluruhan dan pendapatan. <br>
                    Pak Badri membeli <input id="isi" type="text" placeholder="Jawab" style="width: 100px;"><input type="text" disabled placeholder="Kunci" style="width: 100px; background:chartreuse" id="satu"> telur <br>
                    Harga beli telur per kg = <input id="isi2" type="text" placeholder="Jawab" style="width: 100px;"><input type="text" disabled placeholder="Kunci" style="width: 100px; background:chartreuse" id="dua"> <br>
                    Harga beli keseluruhan = <input id="isi3" type="text" placeholder="Jawab" style="width: 100px;"><input type="text" disabled placeholder="Kunci" style="width: 100px; background:chartreuse" id="tiga"> x <input id="isi4" type="text" placeholder="Jawab" style="width: 100px;"><input type="text" disabled placeholder="Kunci" style="width: 100px; background:chartreuse" id="empat"> <br>
                    Harga beli keseluruhan = <input id="isi5" type="text" placeholder="Jawab" style="width: 100px;"><input type="text" disabled placeholder="Kunci" style="width: 100px; background:chartreuse" id="lima"> <br><br>

                    Modal disini sama dengan harga beli keseluruhan karena tidak ada hal lain yang
                    menambah biaya barang sebelum proses penjualan selain harga belinya. <br>
                    Modal = <input id="isi6" type="text" placeholder="Jawab" style="width: 100px;"><input type="text" disabled placeholder="Kunci" style="width: 100px; background:chartreuse" id="enam"><br><br>
                    
                    Telur yang bisa dijual <input id="isi7" type="text" placeholder="Jawab" style="width: 100px;"><input type="text" disabled placeholder="Kunci" style="width: 100px; background:chartreuse" id="tujuh"> kg <br>
                    Harga jual telur per kg = <input id="isi8" type="text" placeholder="Jawab" style="width: 100px;"><input type="text" disabled placeholder="Kunci" style="width: 100px; background:chartreuse" id="delapan"> <br>
                    Pendapatan keseluruhan = <input id="isi9" type="text" placeholder="Jawab" style="width: 100px;"><input type="text" disabled placeholder="Kunci" style="width: 100px; background:chartreuse" id="sembilan"> x <input id="isi10" type="text" placeholder="Jawab" style="width: 100px;"><input type="text" disabled placeholder="Kunci" style="width: 100px; background:chartreuse" id="sepuluh"> <br>
                    Pendapatan keseluruhan = <input id="isi11" type="text" placeholder="Jawab" style="width: 100px;"><input type="text" disabled placeholder="Kunci" style="width: 100px; background:chartreuse" id="sebelas"> <br><br>

                    Maka untuk mengetahui untung atau rugi, gunakan rumus pendapatan dikurangi dengan modal <br>

                    Untung/Rugi = Pendapatan - Modal <br>
                    Untung/Rugi = <input id="isi12" type="text" placeholder="Jawab" style="width: 100px;"><input type="text" disabled placeholder="Kunci" style="width: 100px; background:chartreuse" id="duabelas"> - <input id="isi13" type="text" placeholder="Jawab" style="width: 100px;"><input type="text" disabled placeholder="Kunci" style="width: 100px; background:chartreuse" id="tigabelas"> <br>
                    Untung/Rugi = <input id="isi14" type="text" placeholder="Jawab" style="width: 100px;"><input type="text" disabled placeholder="Kunci" style="width: 100px; background:chartreuse" id="empatbelas"><br>
                    <input id="isi15" type="text" placeholder="Jawab" style="width: 100px;"><input type="text" disabled placeholder="Kunci" style="width: 100px; background:chartreuse" id="limabelas"> = <input id="isi16" type="text" placeholder="Jawab" style="width: 100px;"><input type="text" disabled placeholder="Kunci" style="width: 100px; background:chartreuse" id="enambelas">
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
                                <a href="latihan-c.php"><button class="btn btn-primary" style="border-color: #2C3E50; background: #2C3E50">Kembali</button></a> 
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary" onclick="myFunction()" style="border-color: #2C3E50; background: yellow; color: black">Cek Jawaban</button>
                            </td>
                            <td>
                                <a href="latihan-e.php" style="float: right;"><button class="btn btn-primary" style="border-color: #2C3E50; background: #2C3E50">Selanjutnya</button></a>    
                            </td>
                        </tr>
                    </table>
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
                        var x = document.getElementById("isi9").value;
                        var x = document.getElementById("isi10").value;
                        var x = document.getElementById("isi11").value;
                        var x = document.getElementById("isi12").value;
                        var x = document.getElementById("isi13").value;
                        var x = document.getElementById("isi14").value;
                        var x = document.getElementById("isi15").value;
                        var x = document.getElementById("isi16").value;
                        if (x == "") {
                            alert("Jawaban harus diisi");
                            return false;
                            }
                            document.getElementById("satu").value = "6";
                            document.getElementById("dua").value = "25.000";
                            document.getElementById("tiga").value = "6";
                            document.getElementById("empat").value = "25.000";
                            document.getElementById("lima").value = "150.000";
                            document.getElementById("enam").value = "150.000";
                            document.getElementById("tujuh").value = "5";
                            document.getElementById("delapan").value = "28.000";
                            document.getElementById("sembilan").value = "5";
                            document.getElementById("sepuluh").value = "28.000";
                            document.getElementById("sebelas").value = "140.000";
                            document.getElementById("duabelas").value = "140.000";
                            document.getElementById("tigabelas").value = "150.000";
                            document.getElementById("empatbelas").value = "-10.000";
                            document.getElementById("limabelas").value = "Rugi";
                            document.getElementById("enambelas").value = "10.000";
                        }
                    </script>
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
