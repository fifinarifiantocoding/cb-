<?php

require 'function.php';
// mengambil id dr URL
$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "
        <script>
          alert('data berhasil di hapus');
          document.location.href = 'index.php';
          </script>";
} else {
  echo "data gagal dihapus!";
}
?>