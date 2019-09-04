<?php
require_once "classes/repositorio_livro_class.php";

$registro_livros = new RepositorioLivroMYSQL();

$lista_livros = $registro_livros->getlistaLivro();
?>
<table class="table border">
    <tr>
        <td>Codigo</td>
        <td>Título</td>
        <td>Resumo</td>
        <td>Autor</td>
        <td>Editora</td>
    <tr>
    <?php
    
        while($listagem_livros = mysqli_fetch_array($lista_livros)){
    ?>
            <tr>
                <td><?php echo $listagem_livros[0];?></td>
                <td><?php echo $listagem_livros[1];?></td>
                <td><?php echo $listagem_livros[2];?></td>
                <td><?php echo $listagem_livros[3];?></td>
                <td><?php echo $listagem_livros[4];?></td>
            <?php
        }

    ?>
