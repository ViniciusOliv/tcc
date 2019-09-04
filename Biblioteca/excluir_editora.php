<?php

require_once 'classes/repositorio_editora_class.php';

$codigo = $_GET['id_editora'];


$registro_editora = new repositorioEditoraMySQL ();

$lista_editora = $registro_editora->removerEditora($codigo);


?>
