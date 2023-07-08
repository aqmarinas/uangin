<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="img/uang.png">
  <title>Masuk</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style="background: #F4F5F7;">
  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-5 col-lg-6 col-md-4">
        <div class="p-5">
          <div class="text-center">
            <img src="img/UangInGreen.svg" alt="logo" style="margin-bottom: 20px;">
          </div>
          <a href="dashboard.php" style="color:grey";><img src="img/back.svg" width="30" alt="Kembali">Dashboard</a>
          <hr>
          <h3>Masuk</h3>
          <form class="user" action="proses-login.php" method="post">
            <div class="form-group">
              <span class="desc">Email Address</span>
              <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Your Email Address" style="border-radius: 8px; ">
            </div>
            <div class="form-group">
              <span class="desc">Password</span>
              <input type="password" name="pass" class="form-control form-control-user" id="exampleInputPassword" placeholder="Your Password" style="border-radius: 8px;">
            </div>
            <input type="submit" name="submit" class="btn btn-success btn-user btn-block" value="Masuk">
          </form>
          <br>
          <span>Belum punya akun?</span>
          <a href="daftar.php" style="color:#169b6b";>Daftar Sekarang!</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>
</html>