<?php
include("conecta.php");
$nome = $_POST["nome"];
$idade = $_POST["idade"];

$comando = $pdo->prepare("INSERT INTO alunos VALUES ('$nome', $idade, '$matricula')");
$resultado = $comando->execute();

header("Location: cadastro.hml")

?>