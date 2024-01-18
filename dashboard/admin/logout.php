<?php 
// mengaktifkan session
session_start();
 
// menghapus semua session
$_SESSION = [];
session_unset();
session_destroy();
 
// mengalihkan halaman sambil mengirim pesan logout
header("location: ../index.php");
exit;
?>