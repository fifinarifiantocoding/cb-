<?php
require 'function.php';
$id = $_GET['id'];
//query pegawai berdasarkan id 
$p = query("SELECT * FROM pegawai WHERE id = $id"); 
if(isset($_POST["ubah"])){
  if(ubah($_POST)>0){
    echo "
    <script>
    alert('data berhasil di Rubah');
    document.location.href = 'index.php';
    </script>";
    
  } else {echo "
    <script>
    alert('data gagal di Rubah');
    document.location.href = 'index.php';
    </script>";
    }
}
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit data</title>
</head>
<body>
  <h1>Edit data Pegawai</h1>
  <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $p['id'];?>">
  <ul>
    <li> 
    <label>Nama :
          <input type="text" name="nama" autofocus required value="<?= $p['nama'];?>">
        </label> 
    </li>
    <li> 
    <label>No. Hp :
          <input type="text" name="no_hp" autofocus required value="<?= $p['no_hp'];?>">
        </label> 
    </li>
    <li>
      <button type="submit" name="ubah">Edit</button></li>
  </ul>
  </form> 
</body>
</html>