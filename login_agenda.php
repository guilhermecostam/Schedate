<?php
include("config_agenda.php");
session_start();
$msg = 0;
if(isset($_POST['usuario'])) {
  $usuario = $_POST['usuario'];
  $senha = $_POST['senha'];
  $consulta = $MySQLi->query("SELECT * FROM TB_USUARIOS where USU_NOME = '$usuario' and USU_SENHA = '$senha'");
  if($resultado = $consulta->fetch_assoc()){
    $_SESSION['codigocliente'] = $resultado['USU_CODIGO'];
    $_SESSION['nomecliente'] = $resultado['USU_NOME'];
    header("Location: listar_eventos.php");
  }
  $msg = 1;
} 
?>

<?php
include("design_header.php");
?>

<div class="row justify-content-center no-gutters mb-5 mb-lg-0">
  <div class="col-lg-6">
    <center><?php if($msg==1) echo "<span style='color:red'> Usuário ou senha inválida! </span>"; ?>
    <form action="?" method="POST">
      <input placeholder="Seu nickname" name="usuario"></input><br>
      <input placeholder="Sua senha" type="password" name="senha"></input><br><br>
      <button type="submit">Entrar</button><br><br>
    </form></center>
  </div>
  <div class="col-lg-6">
    <div class="bg-black text-center h-100 project">
      <div class="d-flex h-100">
        <div class="project-text w-100 my-auto text-center text-lg-left">
          <h4 class="text-white">Efetue seu login</h4>
          <p class="mb-0 text-white-50">É necessário acessar sua conta para poder ter acesso às funcionalidades do sistema web.</p>
          <hr class="d-none d-lg-block mb-0 ml-0">
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include("design_footer.php");
?>