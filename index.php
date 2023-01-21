<?php
require 'function.php';
$pegawai = query("SELECT * FROM pegawai");

//ketika tombol cari di klik, maka dia akan melakukan fungsi cari menggunakan keyword yg telah d ketik d kolom 
//pastikan tanda kutipnya sama dengan yg di bawah /tombol 
if (isset($_POST["cari"])){
  $pegawai = cari($_POST["keyword"]);
}
//untuk menampilkan hasil ke halaman yg sama maka bagian action di kosongkan dan kembali kedaftar juga di kosongkan 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Nama</title>
</head>
<body>
  <h1>Daftar Nama</h1>
  <br>
  <a href="tambah.php">Tambah data Pegawai</a>
  <br><br>
  <form action="" method="POST">
  <input type="text" name="keyword" size="30" placeholder="masukkan keyword..." autocomplete="off" autofocus>
  <button type="submit" name="cari">Cari !</button>
  <br><br>
  </form>
  <Table border ="1" cellpadding ="0" cellspacing ="0">
    <tr>
      <td>No</td>
      <td>Nama</td>
      <td>No. HP</td>
      <td>Edit</td>
    </tr>
    <?php $i = 1;
    foreach ($pegawai as $p) :?>
    <tr>
      <td><?= $i++ ;?></td>
      <td><?= $p['nama']; ?></td>
      <td><?= $p['no_hp'] ;?></td>
      <td><a href="detail.php?id=<?= $p['id']; ?>">Detail</a></td>
    </tr>
    <?php endforeach ;?>

  </Table>
  <a href="">Kembali ke daftar</a>
  
  
</body>
</html>