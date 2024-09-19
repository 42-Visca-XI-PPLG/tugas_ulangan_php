<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" href="css/fedit.css">
    <title>Sekolahku</title>
</head>
<body>
    <div class="split left">
        <section class="centered">
            <h2>EDIT DATA SISWA</h2>
            <?php
            include 'koneksi.php';
            $id = $_GET ['kode'];
            $data = mysqli_query($db, "select * from siswa where id_siswa='$id'");
            // var_dump($data);
            // die;
            $d = mysqli_fetch_array($data);
            ?>
            <form action="aksiupdate.php" method="post">
                <input type="hidden" name="id" value="<?=$d['id_siswa']?>">
                <input type="text" name="nama" value="<?=$d['nama']?>">
                <input type="text" name="alamat" value="<?=$d['alamat']?>">
                <input type="text" name="jurusan" value="<?=$d['jurusan']?>">
                <input type="submit" value="Edit Siswa">
                <a href="admin.php" class="tombol daftar">Reset</a>
            </form>
        </section>
    </div>
    <div class="split right">
        <section class="centered">
            <h2> TABEL DATA SISWA</h2>
            <table class="table" border="1px solid">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jurusan</th>
                    <th>Aksi</th>
                </tr>
                <body>
                
                <?php
                include 'koneksi.php';
                $no = 1;
                $data = mysqli_query($db, 'select * from siswa');
                while ($isi = mysqli_fetch_array($data)){
                    ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $isi['nama'] ?></td>
                    <td><?= $isi['alamat'] ?></td>
                    <td><?= $isi['jurusan'] ?></td>
                    <td>
                        <a href="fedit.php?kode><?= $isi['id_siswa'] ?>">Edit</a>
                        <a href="aksihapus.php?kode><?= $isi['id_siswa'] ?>">Hapus</a>


                </td>
                </tr>
                <?php }?>
               
            </body>
                
            </table>
        </section>
    </div>
    
</body>
</html>