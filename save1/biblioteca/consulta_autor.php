<?php
    require_once 'classes/repositorio_autor_class.php';
    $registro_autor = new RepositorioAutorMySQL();
    $listagem_autor = $registro_autor->getlistaAutor();
?>
<table class="table-responsive border mt-5">
    <tr class="bg-light">
        <td>ID</td>
        <td>nome</td>
        <td>descrição</td>
        <td>foto</td>
        <td>Excluir</td>
    </tr>
<?php  
    while($reg_autor = mysqli_fetch_array($listagem_autor)){
    
    ?>
    <tr>
        <td><?php echo $reg_autor[0];?></td>
        <td><?php echo $reg_autor[1];?></td>
        <td><?php echo $reg_autor[2];?></td>
        <td><?php echo $reg_autor[3];?></td>
        <td><a href="excluir_autor.php?id=<?php echo $reg_autor[0];?>">Excluir</a></td>

        <td><?php echo $lista_nome_autor[1];?></td>
        <td><?php echo $lista_nome_editora[1];?><td>

        <?php } ?>
   
    </tr>
    
</table>