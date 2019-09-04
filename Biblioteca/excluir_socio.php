<?php

require_once 'classes/repositorio_socio_class.php';

$codigo = $_GET['id_socios'];


$registro_socio = new repositorioAutorMySQL ();

$lista_socio = $registro_socio->removerSocio($codigo);


?>
