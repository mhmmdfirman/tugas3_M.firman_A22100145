<?php 

function koneksi(){
  return mysqli_connect('localhost' ,'root' ,'' ,'Mahasiswa');

}

function query($query){
  $conn = koneksi();
  $result = mysqli_query($conn ,$query);

  //jika hasil nya cuma 1 data
  if(mysqli_num_rows($result) == 1){
    return mysqli_fetch_assoc($result);
  }


  $rows = [];

  while($row = mysqli_fetch_assoc($result)){
  $rows[] = $row;
  }
  return $rows;
}

function tambah($data){

  $id = htmlspecialchars($data['id']);
  $nim = htmlspecialchars($data['nim'])
  $nama = htmlspecialchars($data['nama']); 
  $kelas = htmlspecialchars($data['kelas']);
  $jurusan = htmlspecialchars($data['jurusan']);
   
  $conn = koneksi();
  $query = "INSERT INTO mhs
  VALUES
  (null ,'$id','$nim','$nama','$kelas','$jurusan')";

  mysqli_query($conn ,$query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

?>