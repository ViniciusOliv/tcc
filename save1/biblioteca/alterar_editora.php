<?php

require 'classes/repositorio_class_editora.php';
$codigo = $_GET['codigo'];
$pesquisa = $repositorio->buscarEditora($codigo);
?>
