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
  <link rel="stylesheet" href="../../../css/global.css">
  <!-- Style about -->
  <link rel="stylesheet" href="./styles.css" />
  <title>Sobre Nós</title>
  <link rel="icon" type="image/x-icon"
    href="https://img.icons8.com/external-flaticons-flat-flat-icons/512/external-technological-technology-ecommerce-flaticons-flat-flat-icons.png">
</head>
<!--Navbar-->
<nav id=" navbar" class="navbar navbar-expand-lg navbar-dark bg-dark shadow p-3 mb-5 bg-white rounded">
  <a class="navbar-brand" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
      class="bi bi-command" viewBox="0 0 16 16">
      <path
        d="M3.5 2A1.5 1.5 0 0 1 5 3.5V5H3.5a1.5 1.5 0 1 1 0-3zM6 5V3.5A2.5 2.5 0 1 0 3.5 6H5v4H3.5A2.5 2.5 0 1 0 6 12.5V11h4v1.5a2.5 2.5 0 1 0 2.5-2.5H11V6h1.5A2.5 2.5 0 1 0 10 3.5V5H6zm4 1v4H6V6h4zm1-1V3.5A1.5 1.5 0 1 1 12.5 5H11zm0 6h1.5a1.5 1.5 0 1 1-1.5 1.5V11zm-6 0v1.5A1.5 1.5 0 1 1 3.5 11H5z" />
    </svg>
  </a>
  <button id="toggler-button-navbar" class="navbar-toggler shadow-none border-0" type="button" data-toggle="collapse"
    data-target="#nav-links" aria-controls="nav-links" aria-expanded="false" aria-label="Toggle navigation">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-justify"
      viewBox="0 0 16 16">
      <path fill-rule="evenodd"
        d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
    </svg>
  </button>
  <div class="collapse navbar-collapse shadow-none border-0" id="nav-links">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a id="home-page" class="nav-link" href="/php-site/src/php/views/home/home.php">Home</a>
      </li>
      <li class="nav-item-">
        <a id="about-page" class="nav-link active" href="/php-site/src/php/views/about-us/about.php">Quem Somos</a>
      </li>
      <li class="nav-item">
        <a id="register-page" class="nav-link " href="/php-site/src/php/views/register/register.php">Cadastre-se</a>
      </li>
      <li class="nav-item-">
        <a id="login-page" class="nav-link" href="/php-site/src/php/views/student/student.php">Estudantes</a>
      </li>
    </ul>
    <form class="form-inline">
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
    <div class="container-fluid">
      <h1>Quem Somos</h1>
      <p class="text-main"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur quos recusandae culpa
        eaque,<br> numquam tenetur velit reiciendis repellat voluptate distinctio laudantium explicabo dolor itaque
        esse, nisi modi fugiat unde enim? <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem
        architecto dolorem temporibus nihil assumenda voluptas <br> praesentium reprehenderit repudiandae optio est
        mollitia odio, veritatis modi doloribus, voluptatibus deserunt in tenetur porro! </p>
      <img src="../../../assets/img/setup-notebook-background.png" class="notebook-background-img" alt="">
    </div>
    <div class="container-divisor">
      <hr class="divisor" />
    </div>
    <section>
      <div id="row-content-about" class="row align-items-center">
        <div class="col">
          <h3 class="title-content-about">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-reply-all"
              viewBox="0 0 16 16">
              <path
                d="M8.098 5.013a.144.144 0 0 1 .202.134V6.3a.5.5 0 0 0 .5.5c.667 0 2.013.005 3.3.822.984.624 1.99 1.76 2.595 3.876-1.02-.983-2.185-1.516-3.205-1.799a8.74 8.74 0 0 0-1.921-.306 7.404 7.404 0 0 0-.798.008h-.013l-.005.001h-.001L8.8 9.9l-.05-.498a.5.5 0 0 0-.45.498v1.153c0 .108-.11.176-.202.134L4.114 8.254a.502.502 0 0 0-.042-.028.147.147 0 0 1 0-.252.497.497 0 0 0 .042-.028l3.984-2.933zM9.3 10.386c.068 0 .143.003.223.006.434.02 1.034.086 1.7.271 1.326.368 2.896 1.202 3.94 3.08a.5.5 0 0 0 .933-.305c-.464-3.71-1.886-5.662-3.46-6.66-1.245-.79-2.527-.942-3.336-.971v-.66a1.144 1.144 0 0 0-1.767-.96l-3.994 2.94a1.147 1.147 0 0 0 0 1.946l3.994 2.94a1.144 1.144 0 0 0 1.767-.96v-.667z" />
              <path
                d="M5.232 4.293a.5.5 0 0 0-.7-.106L.54 7.127a1.147 1.147 0 0 0 0 1.946l3.994 2.94a.5.5 0 1 0 .593-.805L1.114 8.254a.503.503 0 0 0-.042-.028.147.147 0 0 1 0-.252.5.5 0 0 0 .042-.028l4.012-2.954a.5.5 0 0 0 .106-.699z" />
            </svg> Missão
          </h3>
          <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae quo assumenda rerum at ducimus nulla
          </p>
        </div>
        <div class="col">
          <h3 class="title-content-about">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-eye"
              viewBox="0 0 16 16">
              <path
                d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
              <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
            </svg> Visão
          </h3>
          <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae quo assumenda rerum at ducimus nulla
          </p>
        </div>
        <div class="col">
          <h3 class="title-content-about">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-award"
              viewBox="0 0 16 16">
              <path
                d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z" />
              <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z" />
            </svg> Valores
          </h3>
          <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae quo assumenda rerum at ducimus nulla
          </p>
        </div>
      </div>
      <img src="../../../assets/img/isometric-background.png" alt="">
    </section>
    <!-- Footer -->
    <nav id="footer" class="navbar navbar-expand-lg sticky-bottom">
      <div id="foo-container" class="container-fluid">
        <h5 class="foo-title">Entre em contato conosco</h5>
        <div class="row">
          <div class="col-md-auto">
            <i class="bi bi-envelope"></i>
            <p>
              <span class="contact-title"></span> chermauts@gmail.com<br />chermauts@gmail.com
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Boostrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"></script>
    <!--My Script-->
    <script src="/src/js/script.js" type="text/javascript"></script>
</body>

</html>