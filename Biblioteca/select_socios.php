<?php
require_once "classes/repositorio_socios_class.php";

$registro_socios = new RepositorioSociosMYSQL();

$lista_socios = $registro_socios->getlistaSocios();
?>
<table class="table border">
    <tr>
        <td>Codigo</td>
        <td>Nome</td>
        <td>Email</td>
        <td>Celular</td>
        <td>Telefone</td>
    <tr>
    <?php
    
        while($listagem_socios = mysqli_fetch_array($lista_socios)){
    ?>
            <tr>
                <td><?php echo $listagem_socios[0];?></td>
                <td><?php echo $listagem_socios[1];?></td>
                <td><?php echo $listagem_socios[2];?></td>
                <td><?php echo $listagem_socios[3];?></td>
                <td><?php echo $listagem_socios[4];?></td>
            <?php
        }

    ?>
