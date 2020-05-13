<?php
  include("config_agenda.php");
      
  if(isset($_POST['usuario'])) {
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $consulta =  $MySQLi->query("INSERT INTO TB_USUARIOS (USU_NOME,USU_EMAIL,USU_SENHA) values( '$usuario', '$email','$senha')");
        header("Location: listar_eventos.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Guilherme Costa de Medeiros">

  <title>Schedate</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/grayscale.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Schedate</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#projects">Cadastro</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">SCHEDATE</h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">Organizando da forma correta os seus compromissos</h2>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section id="about" class="about-section text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-white mb-4">Sobre o projeto</h2>
          <p class="text-white-50">A correria do nosso dia-a-dia nos faz perceber, as vezes de uma forma difícil, que tempo é dinheiro. Ao longo do dia buscamos aproveitar ao máximo o tempo que temos e organizar nossas obrigações e as vezes fazer isso sozinho é um tanto complicado, então pensando nisso desenvolvi esse mini sistema web para organizar de forma simples suas tarefas. Boa sorte!</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Projects Section -->
  <section id="projects" class="projects-section bg-light">
    <div class="container">

      <!-- Conteudo -->
      <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
        <div class="col-lg-6">
          <center><form action="?" method="POST">
              <input placeholder="Digite seu nickname" name="usuario"></input><br><br>
              <input placeholder="Digite seu email" name='email'></input><br><br>
              <input placeholder="Digite sua senha" type="password" name="senha"></input><br><br>
              <button type='submit'>Registrar</button>
          </form></center>
        </div>
        <div class="col-lg-6">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-left">
                <h4 class="text-white">Efetue seu cadastro</h4>
                <p class="mb-0 text-white-50">É necessário criar uma conta para poder ter acesso às funcionalidades do sistema web. <br> Caso ja possua cadastro, <b><a href="login_agenda.php">CLIQUE AQUI</a></b> para logar na sua conta.</p>
                <hr class="d-none d-lg-block mb-0 ml-0">
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-black small text-center text-white-50">
    <div class="container">
      Copyright &copy; Guiga <?php echo $hoje = date('Y'); ?>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/grayscale.min.js"></script>

</body>

</html>
