<?php

require_once 'classes/repositorio_livro_class.php';

$codigo = $_GET['id_livro'];


$registro_livro = new repositorioLivroMySQL ();

$lista_livro = $registro_livro->removerLivro($codigo);


?>
