<?php

$codigo = $_GET['id'];
    require_once 'classes/repositorio_Livro_class.php';
    $registro_Livro = new RepositorioLivroMySQL();   
    $listagem_Livro = $registro_Livro->removerLivro($codigo);
    echo "Livro Removido com Sucesso!";
    ?>