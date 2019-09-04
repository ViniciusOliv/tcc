<?php


require_once 'classes/repositorio_autor_class.php'; 

$codigo = $_GET['id_autor'];


$registro_autor = new repositorioAutorMySQL ();

$lista_autor = $registro_autor->removerAutor($codigo);


?>

