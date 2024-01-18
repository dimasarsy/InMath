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
                    Paman membeli 10 botol tumbler dengan harga Rp300.000. <br>
                    Sebanyak 6 botol tumbler dijual dengan harga Rp50.000. <br>
                    Dua botol tumbler diberikan kepada anaknya dan dua botol tumbler
                    dijual dengan harga Rp30.000. Persentase keuntungan/kerugian yang diperoleh paman adalah ... <br><br>

                    Harga jual 6 botol masing-masing adalah <input id="isi" type="text" placeholder="Jawab" style="width: 100px;"><input type="text" disabled placeholder="Kunci" style="background: chartreuse; width:100px;" id="satu"> <br>
                    Harga jual 2 botol masing-masing adalah <input id="isi2" type="text" placeholder="Jawab" style="width: 100px;"><input type="text" disabled placeholder="Kunci" style="background: chartreuse; width:100px;" id="dua"> <br><br>
                    2 botol diberikan kepada anaknya maka tidak ada pendapatan dari keduanya <br>

                    Harga jual keseluruhan = Harga jual 6 botol + Harga jual 2 botol <br>
                    Harga jual keseluruhan = (<input id="isi3" type="text" placeholder="Jawab" style="width: 100px;"><input type="text" disabled placeholder="Kunci" style="background: chartreuse; width:100px;" id="tiga"> x <input id="isi4" type="text" placeholder="Jawab" style="width: 100px;"><input type="text" disabled placeholder="Kunci" style="background: chartreuse; width:100px;" id="empat"> ) + ( <input id="isi5" type="text" placeholder="Jawab" style="width: 100px;"><input type="text" disabled placeholder="Kunci" style="background: chartreuse; width:100px;" id="lima"> x <input id="isi6" type="text" placeholder="Jawab" style="width: 100px;"><input type="text" disabled placeholder="Kunci" style="background: chartreuse; width:100px;" id="enam"> ) <br>
                    Harga beli keseluruhan = <input id="isi7" type="text" placeholder="Jawab" style="width: 100px;"><input type="text" disabled placeholder="Kunci" style="background: chartreuse; width:100px;" id="tujuh"> + <input id="isi8" type="text" placeholder="Jawab" style="width: 100px;"><input type="text" disabled placeholder="Kunci" style="background: chartreuse; width:100px;" id="delapan"> <br>
                    Harga beli keseluruhan = <input id="isi9" type="text" placeholder="Jawab" style="width: 100px;"><input type="text" disabled placeholder="Kunci" style="background: chartreuse; width:100px;" id="sembilan"> <br><br>

                    Untuk mencari keuntungan atau kerugian maka dihitung dengan mengurangi pendapatan dengan modal <br>
                    Untung/Rugi = Pendapatan - Modal <br>
                    Untung/Rugi = <input id="isi10" type="text" placeholder="Jawab" style="width: 100px;"><input type="text" disabled placeholder="Kunci" style="background: chartreuse; width:100px;" id="sepuluh"> - <input id="isi11" type="text" placeholder="Jawab" style="width: 100px;"><input type="text" disabled placeholder="Kunci" style="background: chartreuse; width:100px;" id="sebelas"> <br>
                    Untung/Rugi = <input id="isi12" type="text" placeholder="Jawab" style="width: 100px;"><input type="text" disabled placeholder="Kunci" style="background: chartreuse; width:100px;" id="duabelas"> <br>
                    <input id="isi13" type="text" placeholder="Jawab" style="width: 100px;"><input type="text" disabled placeholder="Kunci" style="background: chartreuse; width:100px;" id="tigabelas"> = <input id="isi14" type="text" placeholder="Jawab" style="width: 100px;"><input type="text" disabled placeholder="Kunci" style="background: chartreuse; width:100px;" id="empatbelas"><br><br>

                    Pak Bandri membeli 10 botol tumblr dengan harga Rp300.000 <br>
                    Maka harga beli = <input id="isi15" type="text" placeholder="Jawab" style="width: 100px;"><input type="text" disabled placeholder="Kunci" style="background: chartreuse; width:100px;" id="limabelas">
                    Kemudian persentase untung adalah <br>
                    Persentase untung = (untung:Harga beli)x100% <br>
                    Persentase untung = (<input id="isi16" type="text" placeholder="Jawab" style="width: 100px;"><input type="text" disabled placeholder="Kunci" style="background: chartreuse; width:100px;" id="enambelas"> : <input id="isi17" type="text" placeholder="Jawab" style="width: 100px;"><input type="text" disabled placeholder="Kunci" style="background: chartreuse; width:100px;" id="tujuhbelas"> )x100% <br>
                    Persentase untung = <input id="isi18" type="text" placeholder="Jawab" style="width: 100px;"><input type="text" disabled placeholder="Kunci" style="background: chartreuse; width:100px;" id="delapanbelas">
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
                                <a href="latihan-d.php"><button class="btn btn-primary" style="border-color: #2C3E50; background: #2C3E50">Kembali</button></a> 
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary" onclick="myFunction()" style="border-color: #2C3E50; background: yellow; color: black">Cek Jawaban</button>
                            </td>
                            <td>
                                <a style="float: right;" onclick=myFunction2()><button class="btn btn-primary" style="border-color: #2C3E50; background: #2C3E50">Selanjutnya</button></a>    
                            </td>
                        </tr>
                    </table>
                </div>
                <script>
                    function myFunction2() {
                        var ask = window.confirm("Apakah Yakin Akan Memulai Latihan Soal Diskon, Pajak, dan Bunga?");
                        if (ask) {
                            window.location.href = "latihan-2.php";
                        }
                    }
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
                        var x = document.getElementById("isi17").value;
                        var x = document.getElementById("isi18").value;
                        if (x == "") {
                            alert("Jawaban harus diisi");
                            return false;
                            }
                        document.getElementById("satu").value = "50.000";
                        document.getElementById("dua").value = "30.000";
                        document.getElementById("tiga").value = "6";
                        document.getElementById("empat").value = "50.000";
                        document.getElementById("lima").value = "2";
                        document.getElementById("enam").value = "30.000";
                        document.getElementById("tujuh").value = "300.000";
                        document.getElementById("delapan").value = "60.000";
                        document.getElementById("sembilan").value = "360.000";
                        document.getElementById("sepuluh").value = "360.000";
                        document.getElementById("sebelas").value = "300.000";
                        document.getElementById("duabelas").value = "60.000";
                        document.getElementById("tigabelas").value = "Untung";
                        document.getElementById("empatbelas").value = "60.000";
                        document.getElementById("limabelas").value = "300.000";
                        document.getElementById("enambelas").value = "60.000";
                        document.getElementById("tujuhbelas").value = "300.000";
                        document.getElementById("delapanbelas").value = "20%";
                    }
            </script>
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
