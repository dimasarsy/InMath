<?php 

include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($connect, "select * from user where username='$username' and password='$password' and status='1'");
$cek = mysqli_num_rows($login);

if($cek > 0){

	$data = mysqli_fetch_assoc($login);
 	
 	session_start();
	if($data['level']=="admin"){
		$_SESSION['level'] = "admin";
		$_SESSION['username'] = "$username";
		header("location:admin/index.php");
	} else if($data['level']=="user"){
		$_SESSION['level'] = "user";
		$_SESSION['username'] = "$username";
		header("location:user/index.php");
	} else if($data['level']=="guru"){
		$_SESSION['level'] = "guru";
		$_SESSION['username'] = "$username";
		header("location:guru/index.php");
	} else {
		header("location:index.php");
	}
} else {
    header("location:index.php");
}
?>

