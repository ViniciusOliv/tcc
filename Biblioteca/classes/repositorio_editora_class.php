<?php

require_once 'conexao.class.php';
include_once 'editora.class.php';

interface IRepositorioEditora{
    public function cadastrarEditora($editora);
    public function atualizarEditora($editora);
    public function buscarEditora($editora);
    public function removerEditora($editora);
    public function getlistaEditora();
}
class RepositorioEditoraMySQL implements IRepositorioEditora{
    private $conexao;
    //conexao
    public function __construct() {
        $this->conexao = new conexao("localhost", "root", "", "biblioteca");
        if($this->conexao->conectar() == false){
            echo "Erro ".mysqli_error();
        }
    }
    //cadastra editora
    public function cadastrarEditora($editora) {
        $id_editora = $editora->getId_editora();
        $nome=$editora->getNome();
        $email = $editora->getEmail();
        $telefone = $editora->getTelefone();
        
        $sql = "INSERT INTO editoras (id_editora,nome,email,telefone) VALUES ('$id_editora','$nome','$email','$telefone')";
        
        $this->conexao->executarQuery($sql);
    }
    // remove uma editora da lista
    public function removerEditora($id_editora) {
        $sql = "DELETE FROM editoras WHERE id_editora = '$id_editora'";
        $this->conexao->executarQuery($sql);
    }
    // altera editora da lista
    public function atualizarEditora($editora){
        $id_editora = $editora->getId_editora();
        $nome = $editora->getNome();
        $email = $editora->getEmail();
        $telefone = $editora->getTelefone();
        
        $sql = "UPDATE editoras SET id_editora = '$id_editora', nome = '$nome', email = '$email', telefone = '$telefone' WHERE id_editora = '$id_editora'";
        
        $this->conexao->executarQuery($sql);
    }
    
    // Busca uma nova editora a partir de seu id
    
    public function buscarEditora($id_editora) {
        $linha = $this->conexao->obtemPrimeiroRegistroQuery("SELECT * FROM editoras WHERE id_editora = '$id_editora'");
        $editora = new editora(
             $linha['id_editora'],
             $linha['nome'],
             $linha['email'],
             $linha['telefone']
        );
        return $editora;
    }
    
    public function verificarEditora($nome) {
        $registro = $this->conexao->obtemRegistroDuplicado("SELECT * FROM editoras WHERE nome = '$nome'");
        return $registro;
    }
    
    public function getlistaEditora() {
        $listagem = $this->conexao->executarQuery("SELECT * FROM editoras");
        return $listagem;
    }
}

$repositorio = new RepositorioEditoraMySQL();
?>
