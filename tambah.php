<?php
require 'function.php';
if(isset($_POST["submit"])){
  if(tambah($_POST)>0){
    echo "
    <script>
    alert('data berhasil di tambah');
    document.location.href = 'index.php';
    </script>";
    
  } else {echo "
    <script>
    alert('data gagal di tambah');
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
  <title>Tambah data</title>
</head>
<body>
  <h1>Tambah data Pegawai</h1>
  <form action="" method="POST">
  <ul>
    <li> 
    <label>Nama :
          <input type="text" name="nama" autofocus required>
        </label> 
    </li>
    <li> 
    <label>No. HP :
          <input type="text" name="no_hp" autofocus required>
        </label> 
    </li>
    <li>
      <button type="submit" name="submit">Tambah</button></li>
  </ul>
  </form> 
</body>
</html>