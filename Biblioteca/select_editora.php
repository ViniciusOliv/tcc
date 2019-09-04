<?php
require_once "classes/repositorio_editora_class.php";

$registro_editora = new RepositorioEditoraMYSQL();

$lista_editora = $registro_editora->getlistaEditora();
?>
<table class="table border">
    <tr>
        <td>Codigo</td>
        <td>Nome</td>
        <td>E-mail</td>
        <td>Telefone</td>
    <tr>
    <?php
    
        while($listagem_editora = mysqli_fetch_array($lista_editora)){
    ?>
            <tr>
                <td><?php echo $listagem_editora[0];?></td>
                <td><?php echo $listagem_editora[1];?></td>
                <td><?php echo $listagem_editora[2];?></td>
                <td><?php echo $listagem_editora[3];?></td>
            <?php
        }

    ?>
