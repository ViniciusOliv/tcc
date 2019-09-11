<?php
    require_once 'classes/repositorio_editora_class.php';
    $registro_editora = new RepositorioEditoraMySQL();
    $listagem_editora = $registro_editora->getlistaEditora();
?>
<table class="table-responsive border mt-5">
    <tr class="bg-light">
        <td>ID</td>
        <td>Nome</td>
        <td>Email</td>
        <td>Telefone</td>
        <td>Excluir</td>
    </tr>
<?php  
    while ($reg_editora = mysqli_fetch_array($listagem_editora)){
    
    ?>
    <tr>
        <td><?php echo $reg_editora[0];?></td>
        <td><?php echo $reg_editora[1];?></td>
        <td><?php echo $reg_editora[2];?></td>
        <td><?php echo $reg_editora[3];?></td>
        <td><a href="excluir.php?id=<?php echo $reg_editora[0];?>">Excluir</a></td>
    </tr>
    <?php } ?>