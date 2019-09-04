<?php

require 'classes/repositorio_livro_class.php';
if (isset($_POST['Enviar'])=='Enviar'){
            $id_livro = 0;
            $titulo = $_POST['titulo'];
            $resumo = $_POST['resumo'];
            $id_autor = $_POST['id_autor'];
            $id_editora = $_POST['id_editora'];
            $livroRecebida = new livro($id_livro,$titulo, $resumo, $id_autor, $id_editora);
            $registro = $repositorio->verificarLivro($titulo);
            if(!$registro){
                $repositorio->cadastrarLivro($livroRecebida);
                echo "Cadastrado com sucesso";
            } else {
                echo "Livro já cadastrado";
                
            }
            header('Location:index.php');
        }
        
?> 