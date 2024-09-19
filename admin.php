<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" href="css/admin.css">
    <title>Sekolahku</title>
</head>
<body>
    <div class="split left">
        <section class="centered">
            <h2>TABEL DATA SISWA</h2>
            <form action="aksitambahsiswa.php" method="post">
                <input type="text" name="nama" placeholder="Nama">
                <input type="text" name="alamat" placeholder="Alamat">
                <input type="text" name="jurusan" placeholder="Jurusan">
                <input type="submit" value="Tambah Siswa">
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
                            <a href="fedit.php?kode=<?= $isi['id_siswa'] ?>">Edit</a>
                            <a href="aksihapus.php?kode=<?= $isi['id_siswa'] ?>">Hapus</a>
                            <a href="aksitambahkaryawan.php?kode=<?= $isi['id_karyawan'] ?>">Tabel Karyawan</a>

    
                    </td>
                    </tr>
                    <?php }?>
                   
                </body>
            </table>
        </section>
    </div>
    
</body>
</html>