<?php

function tambah($data){
  $conn = koneksi();
  $nama = $nama['nama'];
  $no_hp = $no_hp['no_hp'];
  $query = "INSERT INTO 
  pegawai
  VALUES
  (NULL, '$nama', '$no_hp');
  ";
  mysqli_query($conn, $query);

 
}
| <a href="hapus.php">hapus</a>
function detail($detail)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result)) {
    return mysqli_fetch_assoc($result);}
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
  
   
}
