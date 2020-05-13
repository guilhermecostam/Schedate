<?php
include("config_agenda.php");

session_start();

if(!isset($_SESSION['codigocliente'])){
	header("Location: login_agenda.php");
}

if(isset($_GET['excluir'])) {
	$codigo = $_GET['excluir'];
	header("Location: listar_eventos.php");
} 
$consulta = $MySQLi->query("SELECT * FROM TB_EVENTOS");

if(isset($_POST['titulo'])){
	$titulo = $_POST['titulo'];
	$descricao = $_POST['descricao'];
	$data_inicio = $_POST['data_inicio'];
	$data_fim = $_POST['data_fim'];
	$consulta1 =  $MySQLi->query("INSERT INTO TB_EVENTOS (EVEN_TITULO, EVE_DESCRICAO,EVEN_DATAIN,EVEN_DATAFIN) values( '$titulo', '$descricao','$data_inicio','$data_fim')");
	header("Location: listar_eventos.php");
}
?>

<?php
include("design_header.php");
?>
<div class="row justify-content-center no-gutters mb-5 mb-lg-0">
	<div class="col-lg-6">
		<div class="even_lista">
			<table>
				<tr>
					<th>Título</th>
					<th>Descrição</th>
					<th>Início</th>
					<th>Fim</th>
				</tr>
				<?php while($resultado = $consulta->fetch_assoc()) { ?>
					<tr>
						<td><?php echo $resultado['EVEN_TITULO']; ?></td>
						<td><?php echo $resultado['EVE_DESCRICAO']; ?></td>
						<td><?php echo $resultado['EVEN_DATAIN']; ?></td>
						<td><?php echo $resultado['EVEN_DATAFIN']; ?></td>
						<td><a href="editar_evento.php?codigo=<?PHP echo $resultado['EVEN_CODIGO']; ?>"><img src="http://alunos.arioliveira.com/editar.png" width="16"></a> | <a href="?excluir=1"><img src="http://alunos.arioliveira.com/excluir.png" width="16"></a></td>
					</tr>
				<?php } ?>
			</table><br>
			<center><button><a href="sair.php">Sair</a></button></center>
		</div>
	</div>
	<div class="col-lg-6">
		<div class="bg-black text-center h-100 project">
			<div class="d-flex h-100">
				<div class="project-text w-100 my-auto text-center text-lg-left">
					<div class='criar_alterar'>
						<div class='editar_evento'>
							<center><h2>criar evento</h2>
							<form action="?" method="POST">
								<input placeholder="Título" name="titulo"></input><br><br>
								<input placeholder="Descrição" name="descricao"></input><br><br>
								<input type="date" name="data_inicio">Inicio</input><br><br>
								<input type="date" name="data_fim">Fim</input><br><br>
								<button type="submit">SALVAR</button>
							</form></center>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
include("design_footer.php");
?>