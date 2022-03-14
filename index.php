<?php

require 'function.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Data Mahasiswa</title>
</head>
<style>
body {
  background-image: url("im.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
<body>

<center><h1 style="font-size:300%;">Daftar Mahasiswa</h1></center>

    <center><a href="tambah.php"><h1 style="font-size:150%;">Tambah Data</hi></a></center>
    <a href="hapus.php"></a>
    <a href="ubah.php"></a>
    <br><br>

    <body>
    <table style="margin-left:auto;margin-right:auto" border="5" cellpadding="30" cellspacing="5">>
        <head>
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Photo</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Jurusan</th>
            <th>Email</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $row) : ?>
            <tr>

                <td> <?= $i; ?> </td>

                <td>
                    <a href="ubah.php?id=<?php echo $row["id"]; ?>">Ubah</a> |
                    <a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Yakin Ingin Menghapus Data');  ">Hapus</a>
                </td>
                <td><img src="img/<?php echo $row["gambar"] ?>" width="50"></td>
                <td><?php echo $row["nama"] ?></td>
                <td><?php echo $row["npm"] ?></td>
                <td><?php echo $row["jurusan"] ?></td>
                <td><?php echo $row["email"] ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>

    </table>

</body>

</html>