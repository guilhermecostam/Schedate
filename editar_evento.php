<?php
include("config_agenda.php");

session_start();

if(!isset($_SESSION['codigocliente'])){
	header("Location: login_agenda.php");
}

$codigo = $_GET['codigo'];
if(isset($_POST['titulo'])) {
	$titulo = $_POST['titulo'];
	$codigoevento = $_POST['codigoevento'];
	$descricao = $_POST['descricao'];
	$data_inicio = $_POST['data_inicio'];
	$data_fim = $_POST['data_fim'];
	$consulta = $MySQLi->query("UPDATE TB_EVENTOS set EVEN_CODIGO = $codigoevento, EVEN_TITULO = '$titulo',EVE_DESCRICAO = '$descricao', EVEN_DATAIN = '$data_inicio', EVEN_DATAFIN = '$data_fim' where EVEN_CODIGO = $codigoevento");
	header("Location: listar_eventos.php");
}
$consulta = $MySQLi->query("SELECT * FROM TB_EVENTOS WHERE EVEN_CODIGO = $codigo");
$resultado = $consulta->fetch_assoc();
?>

<?php
include("design_header.php");
?>

<div class="row justify-content-center no-gutters mb-5 mb-lg-0">
	<div class="col-lg-6">
		<center><form action="?" method="POST">
			<input name="codigoevento" value="<?php echo $resultado['EVEN_CODIGO']; ?>" style="visibility:hidden"></input><br>
			<input name="titulo" value="<?php echo $resultado['EVEN_TITULO']; ?>"></input><br><br>
			<input name="descricao" value="<?php echo $resultado['EVE_DESCRICAO']; ?>"></input><br><br>
			<input name="data_inicio" value="<?php echo $resultado['EVEN_DATAIN']; ?>"></input><br><br>
			<input name="data_fim" value="<?php echo $resultado['EVEN_DATAFIN']; ?>"></input><br><br>
			<button type="submit">SALVAR</button>
		</form></center>
	</div>
	<div class="col-lg-6">
		<div class="bg-black text-center h-100 project">
			<div class="d-flex h-100">
				<div class="project-text w-100 my-auto text-center text-lg-left">
					<h4 class="text-white">Edite seus eventos</h4>
					<p class="mb-0 text-white-50">Caso tenha colocado alguma informação errada, simples, nesta aba você consegue atualizar cada campo cadastrado.</p>
					<hr class="d-none d-lg-block mb-0 ml-0">
				</div>
			</div>
		</div>
	</div>
</div>

<?php
include("design_footer.php");
?>