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
          <li><a href="#home" class="nav-link px-2 text-white">Home</a></li>
          <li><a href="list_note.php" class="nav-link px-2 text-white">Note</a></li>
          <li><a href="#" class="nav-link px-2 text-white disabled">API</a></li>
        </ul>

        <div class="text-end">
          <a class="btn btn-danger" href="logout.php" role="button">Logout</a>
        </div>
      </div>
    </div>
  </header>

    <div id="home" class="p-5 mb-4 bg-light rounded-3">
    <?php
      // require_once('database.php');
      // if (!isset($_SESSION['username'])) {
      //   $user = $_SESSION['username'];
      //   echo "welcome $user";
      // } else {
      //   echo "gagal masuk usernamenya";
      // }
      // echo "welcome, {$_SESSION['username']}";


      ?>
        <div class="container-fluid py-5 text-center">
            <h1 class="display-5 fw-bold">My Note 2024</h1>
            <p style="margin-left: 18%;" class="col-md-8 fs-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi laudantium facilis officiis odio omnis quaerat illum eius minus repudiandae in!.</p>
            <button class="btn btn-secondary btn-lg" type="button">Decomentation</button>
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