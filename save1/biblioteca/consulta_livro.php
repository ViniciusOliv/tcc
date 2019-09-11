<?php
    require_once 'classes/repositorio_livro_class.php';
    $registro_livro = new RepositoriolivroMySQL();
    $listagem_livro = $registro_livro->getlistalivro();
?>
<table class="table-responsive border mt-5">
    <tr class="bg-light">
        <td>ID</td>
        <td>Titulo</td>
        <td>Resumo</td>
        <td>Editora</td>
        <td>Autor</td>
        <td>Excluir</td>
    </tr>
<?php  
    while($reg_livro = mysqli_fetch_array($listagem_livro)){
    
    ?>
    
    <tr>
        <td><?php echo $reg_livro[0];?></td>
        <td><?php echo $reg_livro[1];?></td>
        <td><?php echo $reg_livro[2];?></td>
        <td><?php echo $reg_livro[3];?></td>
        <td><?php echo $reg_livro[4];?></td>
        <td><a href="excluir_livro.php?id=<?php echo $reg_livro[0];?>">Excluir</a></td>
    </tr>
    <?php } ?>