<?php

require 'classes/repositorio_class_socios.php';
$codigo = $_GET['codigo'];
$pesquisa = $repositorio->buscarSocios($codigo);
?>
