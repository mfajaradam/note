<?php
    require_once("database.php");

if (isset($_POST["submit"])) {
  if(add($_POST) > 0) {
    echo "
      <script>
        alert ('data berhasil ditambahkan!');
        document.location.href = 'list_note.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('data gagal ditambahkan!');
        document.location.href = 'list_note.php';
      </script>
    ";
  }
}
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
  <header class="p-3 bg-dark text-white">
    <div class="container-fluid">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <div class="me-5">
            <h1>Notes</h1>
        </div>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="home.php" class="nav-link px-2 text-white">Home</a></li>
          <li><a href="list_note.php" class="nav-link px-2 text-white">Note</a></li>
          <li><a href="#" class="nav-link px-2 text-white">API</a></li>
        </ul>

        <div class="text-end">
        <a class="btn btn-danger" href="login.php" role="button">Logout</a>
        </div>
      </div>
    </div>
  </header>

    <div class="container w-100 ">
        <div class="card position-absolute top-50 start-50 translate-middle" style="width: 20rem;">
            <div class="card-header">
                <h5>Tambah <span class="text-info">Data</span></h5>
            </div>
            <div class="card-body">
              <form action="" method="post">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Note</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="notes" rows="3"></textarea>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" name="submit">Kirim</button>
                </div>
              </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>