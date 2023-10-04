<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tugas PHP 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
    <style>
      .content {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
      }
      i {
        font-size: 5rem;
      }
    </style>
  </head>
  <?php
  $linkedin = 'Khasan Dullatif';
  $insta = '@ahsans_';
  $wa = '+62 821 3641 3106';
  $git = 'AHSANS354';
  $foter = 'Khasan Dullatif || 2023';
  ?>
  <body class="bg-light">
    <div class="home">
      <div class="content">
        <div class="row pt-5">
          <div class="col d-flex flex-column">
            <a href="https://www.linkedin.com/in/khasan-dullatif/" target="_blank" class="d-flex align-items-center gap-3 text-dark text-decoration-none"><i class="bi bi-linkedin text-info"></i><?= $linkedin ?></a>

            <a href="https://www.instagram.com/_ahsans_/" target="_blank" class="d-flex align-items-center gap-3 text-dark text-decoration-none"><i class="bi bi-instagram" style="color: #c13584"></i><?= $insta ?></a>

            <a href="https://wa.me/+6282136413106/" target="_blank" class="d-flex align-items-center gap-3 text-dark text-decoration-none"><i class="bi bi-whatsapp text-success"></i><?= $wa ?></a>

            <a href="https://github.com/AHSANS354" target="_blank" class="d-flex align-items-center gap-3 text-dark text-decoration-none"><i class="bi bi-github text-dark"></i><?= $git ?></a>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
