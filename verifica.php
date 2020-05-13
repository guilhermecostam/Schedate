<?php
session_start();
if(!isset($_SESSION['codigocliente'])){
	header("Location: index.php");
}