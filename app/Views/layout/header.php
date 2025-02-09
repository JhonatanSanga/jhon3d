<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Jhon Sanga</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url('sources/images/icon.ico') ?>" />
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?php echo base_url('sources/css/root.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('sources/css/header.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('sources/css/body.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('sources/css/footer.css') ?>">
  <script src="<?php echo base_url('sources/js/header.js') ?>" defer></script>

  <!-- Twitter -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="Jhon Sanga">
  <meta name="twitter:description" content="Director Productor, propietario de Beresit Films">
  <meta name="twitter:image" content="<?php echo base_url('sources/images/jhon_sanga_thumbnail.jpg') ?>">

  <!-- Facebook -->
  <meta property="og:url" content="<?php echo base_url('/public') ?>">
  <meta property="og:title" content="Jhon Sanga">
  <meta property="og:description" content="Director Productor, propietario de Beresit Films">
  <meta property="og:type" content="article">
  <meta property="og:image" content="<?php echo base_url('sources/images/jhon_sanga_thumbnail.jpg') ?>">
  <meta property="og:image:type" content="image/jpg">
  <meta property="og:image:width" content="1000">
  <meta property="og:image:height" content="1000">

</head>

<body>
  <header class="flex header">
    <div>
      <a href="<?php echo base_url() ?>">
        <img src="<?php echo base_url('sources/images/logocrop.png') ?>" alt="logo" class="logo">
      </a>
    </div>

    <button class="toggle-button" aria-controls="nav" aria-expanded="false">
      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
      </svg>
    </button>

    <nav>
      <ul data-visible="false" id="nav" class="nav flex">
        <li <?php
            helper('cookie');
            if ($_COOKIE['page'] === 'inicio') {
              echo ('class="active"');
            } ?>>
          <a href="<?php echo base_url('/public') ?>">
            Inicio
          </a>
        </li>
        <li <?php
            if ($_COOKIE['page'] === 'premios') {
              echo ('class="active"');
            } ?>>
          <a href="<?php echo base_url('awards') ?>">
            Premios
          </a>
        </li>
        <li <?php
            if ($_COOKIE['page'] === 'proyectos') {
              echo ('class="active"');
            } ?>>
          <a href="<?php echo base_url('projects') ?>">
            Proyectos
          </a>
        </li>
        <li <?php
            if ($_COOKIE['page'] === 'peliculas') {
              echo ('class="active"');
            } ?>>
          <a href="<?php echo base_url('movies') ?>">
            Películas
          </a>
        </li>
        <li <?php
            if ($_COOKIE['page'] === 'servicios') {
              echo ('class="active"');
            } ?>>
          <a href="<?php echo base_url('services') ?>">
            Servicios
          </a>
        </li>
        <li>
          <a href="#contacto">
            Contacto
          </a>
        </li>
      </ul>
    </nav>
  </header>