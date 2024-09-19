<?php
include 'koneksi.php';

$username =$_POST['username'];
$email =$_POST['email'];
$password =$_POST['password'];


// var_dump($username);
// var_dump($email);
// var_dump($username);


mysqli_query ($db,"insert into siswa values('$username','$email', '$password')");

header("Location:admin.php");
?>