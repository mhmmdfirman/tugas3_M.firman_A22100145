<?php 
require 'functions.php';
$mahasiswa = query("SELECT * FROM mhs");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>
<body>
    <h3>Daftar Mahasiswa</h3>
    <a href="tambah.php">Tambah data mahasiswa</a>


    <table border="1" cellpadding='10' cellspacing="0">
      <tr>
          <th>#</th>
          <th>NAMA</th>
          <th>aksi</th>
        </tr>
       
        <?php $i = 1; foreach($mahasiswa as $mhs): ?>
        <tr>
          <td><?= $i++; ?></td>
          <td><?= $mhs['nama']; ?></td>
          <td><a href="detail.php?id=<?= $mhs['id']; ?>">Lihat Detail</a></td>
        </tr>
       <?php endforeach; ?> 

    </table>
</body>
</html>