<?php

$codigo =  $_GET['id'];
require 'classes/repositorio_autor_class.php';
$registro_autor = new repositorioAutorMySQL ();
$listagem_autor = $registro_autor->buscarAutor($codigo);
echo ($codigo);
?>

<form action="altera_autor.php" method="POST">

                    <div class=" form-group">
                      <label for="TituloLivro">Título do Livro:</label>
                      <input type="text" name="titulo" class="form-control" id="titulolivro" aria-describedby="titulo livro" placeholder="Título do Livro">
                     <!-- <small id="titulolivro" class="form-text text-muted">Insira o Título do Livro</small>-->
                    </div>
                    <div class="form-group">
                      <label for="resumo">Resumo:</label>
                      <textarea class="form-control" rows="6" name="resumo" id="resumo"> </textarea>
                    </div>

                    <div class="form-group">
                      <label for="editora">Editora:</label>
                      <select class="form-control" name="id_editora" id="id_editora">
                        <?php

                        while ($linha_editora = mysqli_fetch_array($listagem_editora)){

                        ?>
                        <option value="<?php  $linha_editora['0'];?>"><?php echo $linha_editora['1'];}?> </option>

                      </select>
                    </div>

                    <div class="form-group">
                      <label for="autor">Autor:</label>
                      <select class="form-control" name="id_autor" id="id_autor" >
                       <?php

                         while ($linha_autor = mysqli_fetch_array($listagem_autor)){

                        ?>
                         <option value="<?php  $linha_autor['0'];?>"><?php echo $linha_autor['1'];}?> </option>

                      </select>
                    </div>

                    <input type="submit" name="Enviar" value="Enviar" class="btn btn-primary">
                 </form>
