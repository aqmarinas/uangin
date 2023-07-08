<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <!-- CSS -->
    <style>
      * {
        font-family: "Nunito", sans-serif;
      }

      body {
        padding-top: 80px;
        min-height: 2000px;
      }

      .navbar {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 999;
      }

      .jumbotron {
        padding-top: 2rem;
      }

      .row {
        text-align: justify;
      }

      #pendapatan,
      #tagihan,
      #footer {
        background-color: #1cc88a;
        color: white;
        padding: 50px 0;
      }
      #pendapatan {
        margin-top: -70px;
      }

      h1,
      h2,
      h3 {
        font-weight: 800;
      }

      a {
        text-decoration: none;
      }

      #footer a:hover,
      #footer a:visited {
        color: white;
      }
    </style>

    <!-- Title -->
    <title>UangIn</title>
  </head>

  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fff">
      <div class="container">
        <a class="navbar-brand" href="#"> <img src="img/UangInGreen.svg" alt="" width="100" /> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Tentang UangIn</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Fitur </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#pendapatan">Pendapatan</a></li>
                <li><a class="dropdown-item" href="#pengeluaran">Pengeluaran</a></li>
                <li><a class="dropdown-item" href="#tagihan">Tagihan</a></li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#kontak">Kontak</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php" style="background-color: #1cc88a; color: white; border-radius: 5px; padding: 10px 20px; margin-left: 20px; display: inline-block">Log In</a>
            </li>

            <!-- <li class="nav-item">
              <a class="nav-link" href="login.php">Log In</a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>
    <!-- End of Navbar -->

    <!-- Jumbotron -->
    <section class="jumbotron">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-4">
            <h1>UangIn</h1>
            <p>
              UangIn adalah aplikasi keuangan yang bisa bikin hidupmu jadi lebih happy! Bayangkan saja, sekarang kamu bisa mengelola uangMu dengan mudah tanpa perlu ngeri-ngeri sedap lagi. Kamu bisa mencatat pengeluaran, pemasukan, dan
              tagihan dengan cepat dan gampang. Terus, dengan fitur grafiknya yang super ciamik, kamu bisa melihat uangMu bergerak naik turun layaknya roller coaster! Seru banget kan?
            </p>
            <h2>Jadilah Penguasa UangMu!</h2>
            <a href="login.php" style="background-color: #1cc88a; color: white; border-radius: 5px; padding: 10px 20px; display: inline-block">Mulai Sekarang!</a>
          </div>
          <div class="col-6">
            <div class="shadow p-3 mb-5 bg-body rounded">
              <img src="img/overview.png" alt="Overview" style="max-width: 100%" />
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 50 1440 320">
        <path
          fill="#1cc88a"
          fill-opacity="1"
          d="M0,192L60,170.7C120,149,240,107,360,122.7C480,139,600,213,720,229.3C840,245,960,203,1080,192C1200,181,1320,203,1380,213.3L1440,224L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
          data-darkreader-inline-fill=""
          style="--darkreader-inline-fill: #191b1c"
        ></path>
      </svg>
    </section>
    <!-- End of Jumbotron -->

    <!-- Pendapatan -->
    <section id="pendapatan">
      <div class="container">
        <div class="row text-center">
          <div class="col mb-3">
            <h2>Mengapa UangIn?</h2>
          </div>
        </div>

        <div class="row justify-content-center text-center">
          <div class="col-6">
            <div class="shadow p-3 mb-5 bg-body rounded">
              <img src="img/pemasukan.png" alt="Pendapatan" style="max-width: 100%" />
            </div>
          </div>
          <div class="col-4">
            <h3>Pendapatan</h3>
            <h4>"Datanglah Kekasih UangKu"</h4>
            <p>
              Siapa yang tidak senang ketika diberikan uang? Di UangIn, kamu bisa merayakan kedatangan "kekasih uang" dengan fitur "Datanglah Kekasih UangKu". Kamu bisa menambahkan jumlah pemasukan untuk mengingat momen bersama kekasih.
            </p>
          </div>
        </div>
      </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#1cc88a"
        fill-opacity="1"
        d="M0,160L48,149.3C96,139,192,117,288,90.7C384,64,480,32,576,48C672,64,768,128,864,138.7C960,149,1056,107,1152,101.3C1248,96,1344,128,1392,144L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"
      ></path>
    </svg>
    <!-- End of Pendapatan -->

    <!-- Pengeluaran -->
    <section id="pengeluaran">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-4">
            <h3>Pengeluaran</h3>
            <h4>"Sayonara UangKu</h4>
            <p>Pernah merasa sedih ketika harus mengeluarkan uang? Jangan khawatir, dengan fitur "Sayonara UangKu" di aplikasi UangIn, kamu bisa mengenang perpisahan kepada uang yang kamu keluarkan.</p>
          </div>
          <div class="col-6">
            <div class="shadow p-3 mb-5 bg-body rounded">
              <img src="img/pengeluaran.png" alt="Pengeluaran" style="max-width: 100%" />
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#1cc88a"
          fill-opacity="1"
          d="M0,160L48,165.3C96,171,192,181,288,192C384,203,480,213,576,181.3C672,149,768,75,864,48C960,21,1056,43,1152,58.7C1248,75,1344,85,1392,90.7L1440,96L1440,320L1392,320C1344,320,1248,
          320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- End of Pengeluaran -->

    <!-- Tagihan -->
    <section id="tagihan">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-6">
            <div class="shadow p-3 mb-5 bg-body rounded">
              <img src="img/tagihan.png" alt="Tagihan" style="max-width: 100%" />
            </div>
          </div>
          <div class="col-4">
            <h3>Tagihan</h3>
            <h4>"Jangan Sampai Lupa!</h4>
            <p>
              Tidak ada yang lebih buruk daripada lupa membayar tagihan. Apalagi jika lupa membayar kepada teman. Pertemanan putus karena uang. Tak perlu khawatir, untuk membantu mengingatkanmu, UangIn memiliki fitur pencatatan tagihan yang
              disebut "Jangan Sampai Lupa".
            </p>
          </div>
        </div>
      </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#1cc88a"
        fill-opacity="1"
        d="M0,128L40,128C80,128,160,128,240,149.3C320,171,400,213,480,218.7C560,224,640,192,720,192C800,192,880,224,960,218.7C1040,213,1120,171,1200,165.3C1280,160,1360,192,1400,208L1440,224L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"
      ></path>
    </svg>
    <!-- End of Tagihan -->
    <!-- Ajakan -->
    <section id="kontak">
      <div class="container">
        <div class="row justify-content-center text-center">
          <h1>Mudahkan keuanganmu dengan Uangin, coba sekarang!</h1>
          <a href="login.php" style="width: 100px; background-color: #1cc88a; color: white; border-radius: 5px; padding: 10px 20px; display: inline-block">Log In</a>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#1cc88a"
          fill-opacity="1"
          d="M0,256L60,250.7C120,245,240,235,360,192C480,149,600,75,720,90.7C840,107,960,213,1080,261.3C1200,309,1320,299,1380,293.3L1440,288L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- End of Ajakan -->

    <!-- Footer -->
    <section id="footer">
      <div class="container">
        <div class="row">
          <div class="col">
            <img src="img/uangin.svg" alt="Logo Uangin (White)" />
            <p>Dibuat oleh Aqmarina Shabihah</p>
          </div>
          <a href="https://www.instagram.com/aqmarinash" target="_blank"> <img src="img/instagram.svg" alt="Instagram" width="30" style="margin-top: 10px; margin-bottom: 10px; margin-right: 5px" /> @aqmarinash </a>
          <a href="https://github.com/aqmarinas" target="_blank"> <img src="img/github.svg" alt="GitHub" width="30" style="margin-right: 5px" /> @aqmarinas </a>
        </div>
      </div>
    </section>
    <!-- End of Footer -->

    <!-- Template -->
    <!-- 
      <div class="row">
      <div class="col">
        <h3>Pendapatan</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, aperiam?</p>
      </div>
      <div class="col">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit quos aspernatur soluta, provident mollitia iusto a nulla doloribus possimus omnis esse! Facilis, nulla! Vero, accusantium!</p>
      </div>
    </div> 
    -->

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
