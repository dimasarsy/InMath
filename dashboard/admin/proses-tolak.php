<?php 
session_start();

  $izin = $_SESSION["level"];
  if ($izin !== 'admin') {
      header("location: ../index.php");
      exit;
  }
	include('../koneksi.php');
	if( isset($_GET['no']) ){
    $no = $_GET['no'];
    $sql = "UPDATE user set status=0 WHERE no=$no";
		$query = mysqli_query($connect, $sql);
		if ($query) {
			header("location: pengguna.php");
		}
	}
 ?>