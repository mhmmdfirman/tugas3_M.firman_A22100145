<?php 
//Koneksi database
$conn = mysqli_connect('localhost' ,'root' ,'' ,'Mahasiswa');
//Query isi tabel Mahasiswa
$result = mysqli_query($conn ,"SELECT * FROM mhs");
// ubah ke array
$rows = [];

while($row = mysqli_fetch_assoc($result)){
  $rows[] = $row;
}
//tampung ke variable Mahasiswa
$mahasiswa = $rows;

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
    <table border="1" cellpadding='10' cellspacing="0">
      <tr>
          <th>#</th>
          <th>id</th>
          <th>nama</th>
          <th></th>
          <th>Email</th>
          <th>Jurusan</th>
          <th>aksi</th>
        </tr>
       
        <?php $i = 1; foreach($mahasiswa as $mhs): ?>
        <tr>
          <td><?= $i++; ?></td>
          <td><?= $mhs['id']; ?></td>
          <td><?= $mhs['nama']; ?></td>
          <td><?= $mhs['nim']; ?></td>
          <td><?= $mhs['kelas'];?></td>
          <td><?= $mhs['jurusan']; ?></td>
          <td><a href="">Ubah</a> | <a href="">Hapus</a></td>
        </tr>
       <?php endforeach; ?> 

    </table>
</body>
</html>