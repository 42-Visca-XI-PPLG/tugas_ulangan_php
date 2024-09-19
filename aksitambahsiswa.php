<?php
include 'koneksi.php';
// masuk databade = $POST['namahtml'];
$nama =$_POST['nama'];
$alamat =$_POST['alamat'];
$jurusan =$_POST['jurusan'];

// var_dump($username);
// var_dump($email);
// var_dump($username);

mysqli_query($db,"insert into siswa values(null, '$nama', '$alamat', '$jurusan')");
header("Location:admin.php");
?>