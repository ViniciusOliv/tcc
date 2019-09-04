<?php

require 'classes/repositorio_editora_class.php';
if (isset($_POST['Enviar'])=='Enviar'){
            $id_editora = 0;
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $editoraRecebida = new editora($id_editora,$nome, $email, $telefone);
            $registro = $repositorio->verificarEditora($nome);
            if(!$registro){
                $repositorio->cadastrarEditora($editoraRecebida);
                echo "Cadastrado com sucesso";
            } else {
                echo "Editora já cadastrada";
                
            }
            header('Location:index.php');
        }
        
?>