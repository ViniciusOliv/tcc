<!DOCTYPE html>
<?php

require 'classes/repositorio_livro_class.php';

$livro = $repositorio->getListaLivro();

?>
<html>
    <head>
        <meta charset="UTF-8">
        <!---<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="estilo/estilo.css"> --->
        <title></title>
    </head>
    <body>
        <br>
        
                <form>
                    <div class="form-group">
                      <label for="NomeLivro">Nome do livro</label>
                      <input type="text" class="form-control" id="NomeLivro" aria-describedby="nomelivro" placeholder="Nome do livro">
                      <small id="nomelivro" class="form-text text-muted">Digite o nome da livro</small>
                    </div>
                    <div class="form-group">
                      <label for="resumo">Resumo</label>
                      <textarea class="form-control" rows="6" name="resumo" id="resumo"> </textarea>
                       </div>
                    
                    <button type="submit" class="btn btn-primary">Enviar</button>
                 </form>
                
            

        <!-- jQuery library 
        <script src="jquery/jquery.min.js"></script>

  
        <script src="ajax/popper.min.js"></script>

        
        <script src="bootstrap/bootstrap.min.js"></script-->
    </body>
</html>
