<?php
require_once "classes/repositorio_autor_class.php";

$registro_autor = new RepositorioAutorMYSQL();

$lista_autor = $registro_autor->getlistaAutor();
?>
<table class="table border">
    <tr>
        <td>Codigo</td>
        <td>Nome</td>
        <td>Descrição</td>
        <td>Foto</td>
        <td>Alterar</<td>
        <td>Excluir</td>
    <tr>
    <?php
    
        while($listagem_autor = mysqli_fetch_array($lista_autor)){
    ?>
            <tr>
                <td><?php echo $listagem_autor[0];?></td>
                <td><?php echo $listagem_autor[1];?></td>
                <td><?php echo $listagem_autor[2];?></td>
                <td><?php echo $listagem_autor[3];?></td>
                <td><a href="altera_autor.php?id=<?php echo $listagem_autor[0];?>">Alterar</a></td>
                <td><a href="excluir_autor.php?id=<?php echo $listagem_autor[0];?>">Excluir</a></td>
            <?php
        }

    ?>
