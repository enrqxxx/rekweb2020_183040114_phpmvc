<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/Bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <title>Halaman <?= $data['judul'];?></title>
</head>
<body>

<nav>
        <div class="logo">
            <h4>Rekayasa Web</h4>
        </div>
        <ul class="nav-links">
            <li>
              <a href="<?= BASEURL ?>">Home</a>
            </li>
            <li>
              <a href="<?= BASEURL ?>/about">About</a>
            </li>
            <li>
              <a href="<?= BASEURL ?>/mahasiswa">Mahasiswa</a>
            </li>
            <li>
              <a href="#">Tugas</a>
            </li> 
        </ul>
        <div class="burger">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
    </nav>

