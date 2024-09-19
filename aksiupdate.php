<?php
include 'koneksi.php';

$id =$_POST['id'];
$nama =$_POST['nama'];
$alamat =$_POST['alamat'];
$jurusan =$_POST['jurusan'];


mysqli_query($db,"UPDATE siswa SET nama ='$nama',alamat ='$alamat', jurusan ='$jurusan' WHERE id_siswa='$id'");

header('Location:admin.php');
?>