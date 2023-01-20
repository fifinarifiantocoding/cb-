<?php
require 'function.php';
$pegawai = query("SELECT * FROM pegawai");

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
  <br><br>
<a href="tambah.php">Tambah Data Pegawai</a>
<br><br>
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
  
</body>
</html>