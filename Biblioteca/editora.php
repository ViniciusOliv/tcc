<!DOCTYPE html>
<?php

require 'classes/repositorio_editora_class.php';

$editora = $repositorio->getListaEditora();

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
                      <label for="NomeEditora">Nome do editora</label>
                      <input type="text" class="form-control" id="NomeEditora" aria-describedby="nomeeditora" placeholder="Nome da editora">
                      <small id="nomeEditora" class="form-text text-muted">Digite o nome da editora</small>
                    </div>
                    <div class="form-group">
                      <label for="email">E-mail</label>
                      <input type="text" class="form-control" id="email" aria-describedby="email" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                      <input type="tel" class="form-control" id="telefone" aria-describedby="telefone" placeholder="Telefone">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Enviar</button>
                 </form>
                
            

        <!-- jQuery library 
        <script src="jquery/jquery.min.js"></script>

  
        <script src="ajax/popper.min.js"></script>

        
        <script src="bootstrap/bootstrap.min.js"></script-->
    </body>
</html>
