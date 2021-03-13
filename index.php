<?php 

function getCurl($url) {
  $ch = curl_init(); 
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
  $output = curl_exec($ch);
  curl_close($ch);      
  return json_decode($output, true);
}

$data = getCurl("https://samp-api.tk/server/YOUR_SERVER_IP_HERE");
?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Relived Community</title>
    <meta name="title" content="Relived Community">
    <meta name="description" content="Relived Roleplay adalah server dari GTA San Andreas Multiplayer yang didedikasikan untuk seluruh player SA:MP, server ini bermode Roleplay.">
    <meta name="keywords" content="relived community, rrp, relived roleplay, relived rp, samp relived roleplay, relived roleplay samp, relived community samp, rrp gta samp, gta samp rrp">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="author" content="Relived Community">
    <meta name="og:image" content="assets/img/hero-header.png">

    <link rel="shortcut icon" href="assets/img/favicons/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/img/favicons/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

    <link href="assets/css/theme.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/landing/style.css">

  </head>
  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="./index"><img class="img-fluid logo" src="assets/img/icons/logo.png" /></a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto ms-lg-4 ms-xl-7 border-bottom border-lg-bottom-0 pt-2 pt-lg-0" id="navigation">
              <li class="nav-item"><a class="nav-link" aria-current="page" href="#about">About</a></li>
              <li class="nav-item"><a class="nav-link" href="#serverStats">Server Stats</a></li>
              <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
              <li class="nav-item"><a class="nav-link" href="#staff">Staff</a></li>
              <li class="nav-item"><a class="nav-link" href="#links">Usefull Links</a></li>
            </ul>
          </div>
        </div>
      </nav>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-5" id="about">

        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5 col-lg-7 order-md-1 pt-8"><img class="img-fluid" src="assets/img/illustrations/about.svg" /></div>
            <div class="col-md-7 col-lg-5 text-center text-md-start pt-5 pt-md-9">
              <h1 class="mb-4 display-2 fw-bold">Relived Roleplay</h1>
              <p class="mt-3 mb-4">Relived Roleplay adalah server dari GTA San Andreas Multiplayer yang didedikasikan untuk seluruh player SA:MP, server ini bermode Roleplay.</p><a class="btn btn-lg btn-info rounded-pill" href="https://discord.gg/HHhMMWnPZA" role="button" target="_blank">Join Discord</a>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-4" id="serverStats">

        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="card mb-3 bg-soft-danger rounded-3">
                <div class="row g-0 align-items-center">
                  <div class="col-md-5 col-lg-6 text-md-center"><img class="img-fluid" src="assets/img/illustrations/server-stats.svg" /></div>
                  <div class="col-md-7 col-lg-6 px-md-2 px-xl-6 text-center text-md-start">
                    <div class="card-body px-4 py-5 p-lg-3 p-md-4">
                      <h1 class="mb-4 fw-bold">Server Statistics</h1>
                      <table class="table table-hover table-consended table-danger table-striped">
                        <thead><tr><th colspan="2">Server Status: <?= (($data["online"] === true) ? "<b style='color: green'>ON</b>" : "<b style='color: red'>OFF</b>"); ?></th></tr></thead><tbody><?php if ($data["online"] === true) : ?><tr><td>Hostname</td><td><?= $data["hostname"]; ?></td></tr><tr><td>Players</td><td><?= $data["players"]; ?> / <?= $data["maxplayers"]; ?></td></tr><tr><td>Gamemode</td><td><?= $data["gamemode"]; ?></td></tr><tr><td>Version</td><td><?= $data["version"]; ?></td></tr><tr><td>Worldtime</td><td><?= $data["worldtime"]; ?></td></tr><tr><td>Weather</td><td><?= $data["weather"]; ?></td></tr><tr><td>Language</td><td><?= $data["language"]; ?></td></tr><?php else: ?><tr><td colspan="2"><b>Server is offline</b></td></tr><?php endif; ?></tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->

      <section class="py-6" id="features">
        <div class="container bg-soft-success rounded-3">
          <div class="row flex-center mb-2">
            <div class="col-auto text-center my-4">
              <h1 class="mb-4 fw-bold">Features</h1>
              <p>Some of the features and advantages that we provide for those of you</p>
            </div>
          </div>
          <div class="row">
            <div class="col-auto">
              <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
                  <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
                  <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
                  <li data-bs-target="#carouselExampleDark" data-bs-slide-to="3"></li>
                  <li data-bs-target="#carouselExampleDark" data-bs-slide-to="4"></li>
                  <li data-bs-target="#carouselExampleDark" data-bs-slide-to="5"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="5000">
                    <img src="assets/img/features/ws.jpg" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                      <h5 class="fw-bold" style="color: white">Workshop System</h5>
                      <p>Workshop adalah bengkel pribadi yang bisa dibeli oleh player dan bisa memperkerjakan mekanik menjadi karyawannya.</p>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <img src="assets/img/features/sweeper.jpg" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                      <h5 class="fw-bold" style="color: white">Sidejob - Sweeper</h5>
                      <p>Sweeper adalah kerja sampingan pembersih jalanan di kota Los Santos.</p>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <img src="assets/img/features/bus.jpg" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                      <h5 class="fw-bold" style="color: white">Sidejob - Bus Driver</h5>
                      <p>Bus Driver adalah kerja sampingan tujuan pekerjaan ini adalah mengantarkan penumpang ke tempat tujuannya.</p>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <img src="assets/img/features/mc.jpg" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                      <h5 class="fw-bold" style="color: black">Mechanic Center</h5>
                      <p style="color: white">Mechanic Center adalah tempat para mekanik bekerja dan menawarkan jasanya kepada pelanggannya.</p>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <img src="assets/img/features/modshop.jpg" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                      <h5 class="fw-bold" style="color: black">Modshop</h5>
                      <p style="color: white">Modshop adalah tempat untuk memodifikasi kendaraan.</p>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <img src="assets/img/features/garage.jpg" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                      <h5 class="fw-bold" style="color: black">Private Garage</h5>
                      <p style="color: white">Private Garage adalah garasi pribadi yang dapat dibeli oleh player, garasi ini sudah ada banyak di Kota Los Santos.</p>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev text-white fw-bold" href="#carouselExampleDark" role="button" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next text-white fw-bold" href="#carouselExampleDark" role="button" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="py-5" id="staff">
        <div class="container-lg bg-info rounded">
          <div class="row flex-center mb-2">
            <div class="col-auto text-center my-4">
              <h1 class="mb-4 fw-bold">Staff List</h1>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <h4 class="fw-bold text-center">Management Team</h4>
              <table class="table table-info table-hover table-striped table-consended">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Rank</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Leonardo</td>
                    <td>Founder</td>
                  </tr>
                  <tr>
                    <td>Lukman</td>
                    <td>Developer</td>
                  </tr>
                  <tr>
                    <td>Anen</td>
                    <td>Developer Support</td>
                  </tr>
                  <tr>
                    <td>Ridho</td>
                    <td>Server Manager</td>
                  </tr>
                  <tr>
                    <td>Cozta</td>
                    <td>Server Support</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col">
              <h4 class="fw-bold text-center">Administrator Team</h4>
              <table class="table table-info table-hover table-striped table-consended">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Rank</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Ray</td>
                    <td>Admin Level 1</td>
                  </tr>
                  <tr>
                    <td>Dikaa</td>
                    <td>Admin Level 1</td>
                  </tr>
                  <tr>
                    <td>Faddil35</td>
                    <td>Admin Level 1</td>
                  </tr>
                  <tr>
                    <td>Angga</td>
                    <td>Admin Level 1</td>
                  </tr>
                  <tr>
                    <td>Fnama</td>
                    <td>Admin Level 1</td>
                  </tr>
                  <tr>
                    <td>dottskuyy</td>
                    <td>Helper</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-6 pb-0" id="links">

        <div class="container">
          <hr class="text-info opacity-25" />
          <div class="row justify-content-lg-around">
            <div class="col-12 col-sm-12 col-lg-3 mb-4 order-0 order-sm-0"><a class="text-decoration-none" href="#"><img class="img-fluid me-3" src="assets/img/icons/logo.png" alt="" /><span class="fw-bold fs-1 text-1000">Relived Roleplay</span></a>
              <p class="mt-4">Jalan Manunggal Bhakti Rt.08/Rw.011 No.5 Kalisari Koppasus.<br>Jakarta Timur, DKI Jakarta INDONESIA</p>
              <a class="text-decoration-none" href="mailto:info@relivedcommunity.org">info@relivedcommunity.org</a>
            </div>
            <div class="col mb-3 order-3 order-sm-2">
              <h3 class="lh-lg fw-bold mb-4"> Usefull Links </h3>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-dark fs--1 text-decoration-none" href="https://discord.gg/HHhMMWnPZA" target="_blank">Our Discord</a></li>
                <li class="lh-lg"><a class="text-dark fs--1 text-decoration-none" href="https://ucp.relivedcommunity.org" target="_blank">UCP</a></li>
              </ul>
            </div>
            <div class="col mb-3 order-1 order-sm-3">
              <h3 class="lh-lg fw-bold mb-4">Social Media </h3>
              <ul class="list-unstyled mb-md-4 mb-lg-0 social">
                <li class="list-inline-item"><a class="text-dark fs--1 text-decoration-none" href="#"><i class="fab fa-facebook fa-2x"></i></a></li>
                <li class="list-inline-item"><a class="text-dark fs--1 text-decoration-none" href="#"><i class="fab fa-instagram fa-2x"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-6">

        <div class="container">
          <div class="row flex-center px-3">
            <div class="col px-md-0 order-1 order-md-0">
              <div class="text-center text-md-start">
                <p class="mb-0">Copyright &copy; <?= date("Y"); ?> Relived Roleplay.</p>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/landing/page.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,700;1,900&amp;display=swap" rel="stylesheet">
  </body>

</html>
