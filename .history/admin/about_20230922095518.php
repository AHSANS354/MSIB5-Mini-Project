<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tugas PHP 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
  </head>
  <?php
  $home = 'Home';
  $porto = 'portofolio';
  $kontak = 'Contact';
  $nama = 'Khasan Dullatif';
  $pekerjaan = 'Junior Web Developer';
  $foter = 'Khasan Dullatif || 2023';
  $konten = "Saya menguasai HTML, CSS, Javasript, Jquery, Bootstrap, React Js, Vue Js, Next Js <br />
  Selalu belajar dan senang menambahkan pengalamam baru adalah Moto saya"
  ?>
  <body class="bg-dark">
    <div class="home">
      <div class="row">
        <ul class="nav fixed-top justify-content-center bg-dark p-3 gap-3 shadow">
          <li class="nav-item">
            <a class="nav-link text-warning" href="home.php"><?= $home?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-warning" href="portofolio.php"><?= $porto ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-warning" href="contact.php"><?= $kontak ?></a>
          </li>
        </ul>
      </div>
      <div class="row mt-5 pt-5 d-flex align-items-center">
        <div class="col-6 d-flex justify-content-end">
          <i class="bi bi-person-circle text-light" style="font-size: 20rem"></i>
        </div>
        <div class="col-4 shadow p-5 text-light">
          <h1><?= $nama ?></h1>
          <p><strong><?= $pekerjaan ?></strong></p>
          <p>
            <?= $konten ?>
          </p>
        </div>
      </div>
    </div>
    <footer class="footer text-light text-center">&copy; <?= $foter ?></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
