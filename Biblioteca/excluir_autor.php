<?php

$codigo = $_GET['id'];
require_once 'classes/repositorio_autor_class.php'; 

echo ($codigo);

$registro_autor = new repositorioAutorMySQL();

$listagem_autor = $registro_autor->removerAutor($codigo);
echo ("Excluido com sucesso");

header("Location: index.php");
?>

