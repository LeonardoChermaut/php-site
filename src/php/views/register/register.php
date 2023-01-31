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
  <!-- Register CSS -->
  <link rel="stylesheet" type="text/css" href="./styles.css">
  <title>Formulário de Cadastro</title>
  <link rel="icon" type="image/x-icon"
    href="https://img.icons8.com/external-flaticons-flat-flat-icons/512/external-technological-technology-ecommerce-flaticons-flat-flat-icons.png">
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
        <a id="register-page" class="nav-link active"
          href="/php-site/src/php/views/register/register.php">Cadastre-se</a>
      </li>
      <li class="nav-item-">
        <a id="login-page" class="nav-link" href="/php-site/src/php/views/student/student.php">Estudantes</a>
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
    <div class="container-fluid">
      <div class="form-container">
        <h3 class="title">Formulário de Cadastro</h3>
        <form id="form-user" class="formSubmit" method="POST" action="/php-site/src/php/service/post_student.php"
          name="submit">
          <label for="name-student">Nome</label>
          <input id="name-student" type="text" name="name-student" maxlength="50" placeholder="Digite seu nome" />
          <label for="email-student">Email</label>
          <input id="email-student" type="email" name="email-student" maxlength="120" placeholder="Digite seu email" />
          <label for="password-student">Senha</label>
          <div class="input-group">
            <input id="password-student" type="password" name="password-student" maxlength="20"
              placeholder="Digite sua senha" />
            <button id="btn-password-input" type="button" class="btn btn-outline-dark shadow-none">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye"
                viewBox="0 0 16 16">
                <path
                  d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
              </svg>
            </button>
          </div>
          <label for="phone-student">Celular</label>
          <input id="phone-student" type="tel" name="phone-student" placeholder="(21) 9 0000-0000"
            pattern="\(\d{2}\)\s\d{1}\s\d{4}-\d{4}" />
          <label for="course-student">Curso</label>
          <input id="course-student" type="text" name="course-student" maxlength="120" placeholder="Digite seu curso" />
          <label for="monthly-payment">Mensalidade</label>
          <input id="monthly-payment" type="text" maxlength="7" name="monthly-payment" placeholder="1552,99" />
          <label for="status-student">Situação da matrícula</label>
          <select id="status-student" name="status-student" class="custom-select mr-sm-2 border-0 shadow-none ">
            <option selected>Escolha uma opção...</option>
            <option value="Ativo">Ativa</option>
            <option value="Inativo">Inativa</option>
            <option value="Cancelada">Cancelada</option>
          </select>
          <label id="observation-student" for="observation-student">Observação</label>
          <textarea class="form-control border-0 shadow-none" id="text-content-form" name="observation-student"
            placeholder="Conte-nos mais"></textarea>
          <label for="date">Criado em</label>
          <input id="createdAt" type="text" name="date" readonly="readonly" />
          <input type="submit" value="Enviar" />
        </form>
      </div>
  </section>
  <!----- Footer ----->
  <nav id="footer" class="navbar navbar-expand-lg">
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
  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Sweet Alert JS -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <!-- Bootrstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
  <!--My Script-->
  <script type="text/javascript" src="../../../js/script.js"></script>
</body>

</html>