<?php
function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'phpdasar');
}
// cara penulisan koneksi ke database ('host','username','pasword','nama database');

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }
   $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
  
   
}
function tambah($data)
{
  $conn = koneksi();
  $nama = htmlspecialchars($data['nama']);
  $no_hp = htmlspecialchars($data['no_hp']);

  $query = "INSERT INTO pegawai
           VALUES
          ('', '$nama', '$no_hp')
          ";
          mysqli_query($conn, $query);
          return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM pegawai WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}
function ubah($data)
{
  $conn = koneksi();
  
  $id = $data['id'];
  $nama = htmlspecialchars($data['nama']);
  $no_hp = htmlspecialchars($data['no_hp']);

  $query = "UPDATE pegawai SET
            nama = '$nama',
            no_hp = '$no_hp'
            WHERE id = $id";
          mysqli_query($conn, $query);
          return mysqli_affected_rows($conn);
}
