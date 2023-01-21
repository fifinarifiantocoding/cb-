<?php
require 'function.php';

$id = $_GET['id'];
$p = query("SELECT * FROM pegawai WHERE id = $id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail</title>
</head>

<body>
  <h1>Detail Pegawai</h1>
  <ul>
    <li>Nama : <?= $p['nama']; ?></li>
    <li>no hp: <?= $p['no_hp'];?></li>
    <li><a href="ubah.php?id=<?= $p['id'];?>">Ubah</a> | <a href="hapus.php?id=<?= $p['id'];?>" onclick="return confirm('apakah anda yakin?');">Hapus</a></li>
    <li><a href="index.php">Kembali kedaftar Pegawai</a></li>
  </ul>
  
</body>
</html>