<div class="col-12">

    <?php
    require_once 'classes/repositorio_autor_class.php';
    $registro_autor = new RepositorioAutorMySQL();
    $lista_autor = $registro_autor->getlistaAutor();
    ?>
    
    <table class="table-responsive table-bordered">
        <tr class="table-light">
            <td>Codigo</td>
            <td>Nome</td>
            <td>Descrição</td>
            <td>Foto</td>
        </tr>
        <?php 
            while ($listagem_autor= mysqli_fetch_array($lista_autor)){
        ?>
        <tr>
            <td class="px-2"><?php echo $listagem_autor[0];?></td>
            <td class="px-2"><?php echo $listagem_autor[1];?></td>
            <td class="px-2"><?php echo substr($listagem_autor[2],0,10);?></td>
            <td class="px-2"><img class="img-thumbnail img-fluid w-50 h-50" src="imgs/autores/<?php echo $listagem_autor[3];?>"></td>
            <td class="mx-auto"><a href="alterar_autor.php?id=<?php echo $listagem_autor[0];?>">Alterar</a>
        </tr>
            <?php } ?>
    </table>
</div>


