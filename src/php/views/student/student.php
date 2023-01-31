<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
  <!--Icons Bootstrap-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />
  <!-- Global Reset CSS -->
  <link rel="stylesheet" type="text/css" href="../../../css/global.css" />
  <!--Style Student-->
  <link rel="stylesheet" type="text/css" href="./styles.css">
  <link rel="icon" type="image/x-icon"
    href="https://img.icons8.com/external-flaticons-flat-flat-icons/512/external-technological-technology-ecommerce-flaticons-flat-flat-icons.png">
  <title>Estudantes</title>
</head>
<!--Navbar-->
<nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-dark shadow p-3 mb-5 bg-white rounded">
  <a class="navbar-brand"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
      class="bi bi-command" viewBox="0 0 16 16">
      <path
        d="M3.5 2A1.5 1.5 0 0 1 5 3.5V5H3.5a1.5 1.5 0 1 1 0-3zM6 5V3.5A2.5 2.5 0 1 0 3.5 6H5v4H3.5A2.5 2.5 0 1 0 6 12.5V11h4v1.5a2.5 
          2.5 0 1 0 2.5-2.5H11V6h1.5A2.5 2.5 0 1 0 10 3.5V5H6zm4 1v4H6V6h4zm1-1V3.5A1.5 1.5 0 1 1 12.5 5H11zm0 6h1.5a1.5 1.5 0 1 1-1.5 1.5V11zm-6 0v1.5A1.5 1.5 0 1 1 3.5 11H5z" />
    </svg>
  </a>
  <button id="toggler-button-navbar" class="navbar-toggler shadow-none border-0" type="button" data-toggle="collapse"
    data-target="#nav-links" aria-controls="nav-links" aria-expanded="false" aria-label="Toggle navigation">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-justify"
      viewBox="0 0 16 16">
      <path fill-rule="evenodd"
        d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0
           1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
    </svg>
  </button>
  <div class="collapse navbar-collapse shadow-none border-0" id="nav-links">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a id="home-page" class="nav-link" href="/php-site/src/php/views/home/home.php">Home</a>
      </li>
      <li class="nav-item-">
        <a id="about-page" class="nav-link" href="/php-site/src/php/views/about-us/about.php">Quem Somos</a>
      </li>
      <li class="nav-item">
        <a id="register-page" class="nav-link" href="/php-site/src/php/views/register/register.php">Cadastre-se</a>
      </li>
      <li class="nav-item-">
        <a id="login-page" class="nav-link active" href="/php-site/src/php/views/student/student.php">Estudantes</a>
      </li>
    </ul>
    <form class="form-inline" method="get" action=".">
      <input class="form-control mr-sm-2 shadow-none border-0 text-success" type="search" placeholder="Pesquisar"
        aria-label="Search" />
      <button class="btn btn-outline-success shadow-none border-0 my-2 my-sm-0" type="submit">
        <i class="bi bi-search"></i>
      </button>
    </form>
  </div>
</nav>
<!--Body-->

<body>
  <!--Section-->
  <section>
    <div id="container-student" class="container-fluid">
      <h2>Alunos cadastrados</h2><br>
      <div class="row justify-content-center">
        <div class="col"> <?php
        require('..\..\..\php\service\list_students.php');
        require('..\..\..\php\service\delete_student.php');

        listStudents();
        ?> </div>
      </div>
    </div>
  </section>
  <!----- Footer ----->
  <nav id="footer" class="navbar navbar-expand-lg sticky-bottom">
    <div id="foo-container" class="container">
      <h5 class="foo-title">Entre em contato conosco</h5>
      <div class="row">
        <div class="col-md-auto">
          <i class="bi bi-envelope"></i>
          <p>
            <span class="contact-title"></span> cooperativa@contato.com<br />cooperativa@popular.com.br
          </p>
        </div>
        <div class="col-md-auto">
          <i class="bi bi-telephone"></i>
          <p>
            <span class="contact-title"></span>0800-0000-0000<br />(021) 99999-9999
          </p>
        </div>
        <div class="col-md-auto">
          <i class="bi bi-globe"></i>
          <li class="footer-link">
            <a class="footer-link" href="#contato"> facebook/cooporativa</a>
          </li>
          <li class="footer-link">
            <a class="footer-link" href="#"> instagram/coorporativa</a>
          </li>
        </div>
      </div>
    </div>
  </nav>
  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Sweet Alert JS -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
  <!--My Script-->
  <script type="text/javascript" src="/php-site/src/js/script.js"></script>
</body>

</html>