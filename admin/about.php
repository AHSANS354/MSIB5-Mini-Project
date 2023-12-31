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
  $nama = 'Khasan Dullatif';
  $pekerjaan = 'Junior Web Developer';
  $foter = 'Khasan Dullatif || 2023';
  $konten = "Saya menguasai HTML, CSS, Javasript, Jquery, Bootstrap, React Js, Vue Js, Next Js <br />
  Selalu belajar dan senang menambahkan pengalamam baru adalah Moto saya"
  ?>
  <body class="bg-light">
    <div class="home">
      <div class="row pt-3 d-flex align-items-center">
        <div class="col-6 d-flex justify-content-end">
          <i class="bi bi-person-circle text-dark" style="font-size: 20rem"></i>
        </div>
        <div class="col-4 shadow p-5 text-dark">
          <h1><?= $nama ?></h1>
          <p><strong><?= $pekerjaan ?></strong></p>
          <p>
            <?= $konten ?>
          </p>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
