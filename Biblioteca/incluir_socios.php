<?php

require 'classes/repositorio_socios_class.php';
if (isset($_POST['Enviar'])=='Enviar'){
            $id_socios = 0;
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $celular = $_POST['celular'];
            $telefone = $_POST['telefone'];
            $sociosRecebido = new socios($id_socio,$nome, $email, $celular, $telefone);
            $registro = $repositorio->verificarsocios($nome);
            if(!$registro){
                $repositorio->cadastrarsocios($sociosRecebido);
                echo "Cadastrado com sucesso";
            } else {
                echo "Socio já cadastrado";
                
            }
            header('Location:index.php');
        }
        
?>