<?php
    require_once("database.php");

    $ids = $_GET["id"];

  if(hapus($ids) > 0) {
    echo "
      <script>
        alert ('data berhasil dihapus!');
        document.location.href = 'list_note.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('data gagal dihapus!');
        document.location.href = 'list_note.php';
      </script>
    ";
  }

?>