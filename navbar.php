<?php
  $array1 = array("about_ganffest.php", "profil_kurator.php", "lokasi_jadwal.php", "tim_ganffest.php", "mitra_ganffest.php");
  $array2 = array("sinema_keliling.php", "becoming_human.php", "bandung_nu_aing.php", "behind_closed_doors.php", "erectus.php", "jestful_society.php", "kelas_jason.php", "kompetisi.php", "rontofu.php", "horizon.php", "romantic_movies.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="S__9715892.jpg">
    <title>Ganffest 2018</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="ganffest.css" rel="stylesheet">
    <nav class="navbar navbar-light navbar-toggleable-md navbar-default bg-default fixed-top">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
      </button>
      <a class="navbar-brand">
        <img src="Logo-GFF.png"  width="64" alt="" style="max-width:500px; height:auto; max-height:600px;">
      </a>
      <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
        <ul class="navbar-nav navbar-right">
          <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'active'?>">
            <a class="nav-link" href="index.php">Beranda</a>
          </li>
          <li class="nav-item dropdown <?php if (in_array(basename($_SERVER['PHP_SELF']), $array1)) echo 'active'?>">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Info Festival</a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="about_ganffest.php">Tentang Ganffest</a>
              <a class="dropdown-item" href="profil_kurator.php">Tim Program</a>
              <a class="dropdown-item" href="lokasi_jadwal.php">Lokasi dan Jadwal</a>
              <a class="dropdown-item" href="tim_ganffest.php">Tim Ganffest 2018</a>
              <a class="dropdown-item" href="mitra_ganffest.php">Mitra</a>
            </div>
          </li>
          <li class="nav-item dropdown <?php if (in_array(basename($_SERVER['PHP_SELF']), $array2)) echo 'active'?>">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Program</a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="sinema_keliling.php">Sinemakeliling</a>
              <a class="dropdown-item" href="kompetisi.php">Kompetisi</a>
              <a class="dropdown-item" href="bandung_nu_aing.php">Bandung Nu Aing!</a>
              <a class="dropdown-item" href="horizon.php">Horizon</a>
              <a class="dropdown-item" href="#">Bincang Ganesha</a>
              <h6 class="dropdown-header">Kelas!</h6>
              <a class="dropdown-item" href="rontofu.php">Kelas Rontofu! (With) Bahasinema</a>
              <a class="dropdown-item" href="kelas_jason.php">Kelas (With) Jason Iskandar</a>
              <h6 class="dropdown-header">A Look On</h6>
              <a class="dropdown-item" href="becoming_human.php">Becoming Human</a>
              <a class="dropdown-item" href="behind_closed_doors.php">Behind Closed Doors</a>
              <a class="dropdown-item" href="erectus.php">Erectus Disfunction</a>
              <a class="dropdown-item" href="jestful_society.php">Jestful Society</a>
              <a class="dropdown-item" href="romantic_movies.php">Romantic Movies</a>
            </div>
          </li>
          <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'kontak_ganffest.php') echo 'active'?>">
            <a class="nav-link" href="kontak_ganffest.php">Kontak</a>
          </li>
        </ul>
      </div>
    </nav>
  </head>
  <body>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
