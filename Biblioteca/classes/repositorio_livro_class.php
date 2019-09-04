<?php

require_once 'conexao.class.php';
include_once 'livro.class.php';

interface IRepositoriolivro{
    public function cadastrarlivro($livro);
    public function atualizarlivro($livro);
    public function buscarlivro($livro);
    public function removerlivro($livro);
    public function getlistaLivro();
}
    class RepositorioLivroMySQL implements IRepositoriolivro{
    private $conexao;
    //conexao
    public function __construct() {
        $this->conexao = new conexao("localhost", "root", "", "biblioteca");
        if($this->conexao->conectar() == false){
            echo "Erro ".mysqli_error();
        }
    }
    //cadastra livro
    public function cadastrarLivro($livro) {
        $id_livro = $livro->getId_livro();
        $titulo=$livro->getTitulo();
        $resumo=$livro->getResumo();
        $id_autor=$livro->getId_autor();
        $id_editora=$livro->getId_editora();

        
        $sql = "INSERT INTO livros (id_livro,titulo,resumo, id_autor, id_editora) VALUES ('$id_livro','$titulo','$resumo', '$id_autor', '$id_editora')";
        
        $this->conexao->executarQuery($sql);
    }
    // remove uma livro da lista
    public function removerlivro($id_livro) {
        $sql = "DELETE FROM livros WHERE id_livro = '$id_livro'";
        $this->conexao->executarQuery($sql);
    }
    // altera livro da lista
    public function atualizarlivro($livro){
        $id_livro = $livro->getId_livro();
        $titulo = $livro->getTitulo();
        $resumo = $livro->getResumo();
        
        $sql = "UPDATE livros SET id_livro = '$id_livro', titulo = '$titulo', resumo = '$resumo' WHERE id_livro = '$id_livro'";
        
        $this->conexao->executarQuery($sql);
    }
    
    // Busca livro a partir de seu id
    
    public function buscarlivro($id_livro) {
        $linha = $this->conexao->obtemPrimeiroRegistroQuery("SELECT * FROM livros WHERE id_livro = '$id_livro'");
        $livro = new livro(
             $linha['id_livro'],
             $linha['titulo'],
             $linha['resumo']
             
        );
        return $livro;
    }
    
    public function verificarLivro($titulo) {
        $registro = $this->conexao->obtemRegistroDuplicado("SELECT * FROM livros WHERE titulo = '$titulo'");
        return $registro;
    }
    
    public function getlistaLivro() {
        $listagem = $this->conexao->executarQuery("SELECT * FROM livros");
        return $listagem;
    }
}

$repositorio = new RepositoriolivroMySQL();
?>
