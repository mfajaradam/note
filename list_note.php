<?php
    require_once("database.php");

    $query = query("SELECT * FROM notes");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <?php
    session_start();
    if ($_SESSION['status'] != 'login') {
      header("location:login.php?msg=belumlogin");
    }
    ?>
  <header class="p-3 bg-dark text-white">
    <div class="container-fluid">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <div class="me-5">
            <h1>Notes</h1>
        </div>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="home.php" class="nav-link px-2 text-white">Home</a></li>
          <li><a href="#list" class="nav-link px-2 text-white">Note</a></li>
          <li><a href="#" class="nav-link px-2 text-white">API</a></li>
        </ul>

        <div class="text-end">
        <a class="btn btn-danger" href="login.php" role="button">Logout</a>
        </div>
      </div>
    </div>
  </header>

  <!-- table -->
  <div id="list" class="container mt-4">
    <h1 class="judul pb-4">
        My Notes
    </h1>
    <div class="button pb-3">
    <a class="btn btn-primary" href="add_data.php" role="button">Tambah Data</a>
    </div>
    <table class="table w-100" style="margin: auto;">
  <thead>
    <tr>
      <th scope="col" class="" >no</th>
      <th scope="col" class="" >Note</th>
      <th scope="col" class="" >Waktu</th>
      <th scope="col" class="" >Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    <?php foreach($query as $data) : ?>
    <tr>
      <th scope="row"><?= $i ?></th>
      <td><?= $data["note"]; ?></td>
      <td><?= $data["created_at"]; ?></td>
      <td>
        <a href="edit.php?id=<?= $data["id"]; ?>">Edit</a> |
        <a href="delete.php?id=<?= $data["id"]; ?>" onclick="return confirm('yakin?')">Delete</a>
      </td>
    </tr>
    <?php $i++ ?>
    <?php endforeach; ?>
  </tbody>
</table>
  </div>
  <!-- table -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>