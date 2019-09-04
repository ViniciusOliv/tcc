<?php

require 'conexao.class.php';
include 'socios.class.php';

interface IRepositorioSocios{
    public function cadastrarSocios($Socios);
    public function atualizarSocios($Socios);
    public function buscarSocios($Socios);
    public function removerSocios($Socios);
    public function getlistaSocios();
}
class RepositorioSociosMySQL implements IRepositorioSocios{
    private $conexao;
    //conexao
    public function __construct() {
        $this->conexao = new conexao("localhost", "root", "", "biblioteca");
        if($this->conexao->conectar() == false){
            echo "Erro ".mysqli_error();
        }
    }
    //cadastra Socios
    public function cadastrarSocios($Socios) {
        $id_Socios = $Socios->getId_Socios();
        $nome=$Socios->getNome();
        $email = $Socios->getEmail();
        $celular = $Socios->getCelular();
        $telefone = $Socios->getTelefone();
        
        $sql = "INSERT INTO socios (id_Socios,nome,email,celular,telefone) VALUES ('$id_Socios','$nome','$email','$celular','$telefone')";
        
        $this->conexao->executarQuery($sql);
    }
    // remove uma Socios da lista
    public function removerSocios($id_Socios) {
        $sql = "DELETE FROM socios WHERE id_Socios = '$id_Socios'";
        $this->conexao->executarQuery($sql);
    }
    // altera Socios da lista
    public function atualizarSocios($Socios){
        $id_Socios = $Socios->getId_Socios();
        $nome = $Socios->getNome();
        $email = $Socios->getEmail();
        $celular = $Socios->getCelular();
        $telefone = $Socios->getTelefone();
        
        $sql = "UPDATE socios SET id_Socios = '$id_Socios', nome = '$nome', email = '$email', telefone = '$telefone' WHERE id_Socios = '$id_Socios'";
        
        $this->conexao->executarQuery($sql);
    }
    
    // Busca Socios a partir de seu id
    
    public function buscarSocios($id_Socios) {
        $linha = $this->conexao->obtemPrimeiroRegistroQuery("SELECT * FROM socios WHERE id_Socios = '$id_Socios'");
        $Socios = new Socios(
             $linha['id_Socios'],
             $linha['nome'],
             $linha['email'],
             $linha['celular'],
             $linha['telefone']
        );
        return $Socios;
    }
    
    public function verificarSocios($nome) {
        $registro = $this->conexao->obtemRegistroDuplicado("SELECT * FROM socios WHERE nome = '$nome'");
        return $registro;
    }
    
    public function getlistaSocios() {
        $listagem = $this->conexao->executarQuery("SELECT * FROM socios");
        return $listagem;
    }
}

$repositorio = new RepositorioSociosMySQL();
?>
