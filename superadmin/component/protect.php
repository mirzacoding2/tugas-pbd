<?php 
error_reporting(0);
session_start();
$profile=$_SESSION['username'];
$status=$_SESSION['level'];
 if($_SESSION['level']=='admin'){
echo "<script>alert('Maaf,anda bukan superadmin,Silakan Login dengan akun Superadmin');history.go(-1);</script>;";
echo $_SESSION['username']; 
}elseif($_SESSION['username'] ||$_SESSION['level']){

}else{
   header('Location:../index.php?kode=login');
}


?>