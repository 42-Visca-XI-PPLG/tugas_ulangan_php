<?php
include 'koneksi.php';

$username =$_POST['username'];
$password =$_POST['password'];
// var_dump($username);
// die;

$cek = mysqli_query ($db, "select * from users where username='$username'
and password='$password'");

if(mysqli_num_rows($cek) == 1 ){
    header('location: admin.php');
}else{
    header('location: index.php');
}
?>