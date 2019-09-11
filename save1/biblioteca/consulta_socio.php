<?php
    require_once 'classes/repositorio_socio_class.php';
    $registro_socio = new RepositoriosocioMySQL();
    $listagem = $registro_socio->getlistasocio();
?>
<table class="table-responsive border mt-5">
    <tr class="bg-light">
        <td>ID</td>
        <td>Nome</td>
        <td>Email</td>
        <td>Celular</td>
        <td>Telefone</td>
        <td>Excluir</td>
    </tr>
<?php  
    while($reg_socio = mysqli_fetch_array($listagem)){
    
    ?>
    <tr>
        <td><?php echo $reg_socio[0];?></td>
        <td><?php echo $reg_socio[1];?></td>
        <td><?php echo $reg_socio[2];?></td>
        <td><?php echo $reg_socio[3];?></td>
        <td><?php echo $reg_socio[4];?></td>
        <td><a href="excluir_socio.php?id=<?php echo $reg_socio[0];?>">Excluir</a></td>
    </tr>
    <?php }  ?>