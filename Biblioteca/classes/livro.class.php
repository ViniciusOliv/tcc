<?php

class livro{
    private $id_livro;
    private $titulo;
    private $resumo;
    private $id_autor;
    private $id_editora;

    public function __construct($id_livro,$titulo,$resumo,$id_autor,$id_editora) {
        $this->id_livro=$id_livro;
        $this->titulo=$titulo;
        $this->resumo=$resumo;
        $this->id_autor=$id_autor;
        $this->id_editora=$id_editora;
    }
    
    function getId_livro() {
        return $this->id_livro;
    }

    function getTitulo() {
        return $this->titulo;
    }
    
    function getResumo(){
        return $this->resumo;
    }

    function getId_autor(){
        return $this->id_autor;
    }

    function getId_editora(){
        return $this->id_editora;
    }

    function setId_livro($id_livro) {
        $this->id_livro = $id_livro;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    
    function setResumo($resumo){
        $this->resumo = $resumo;
    }
    function setId_autor($id_autor) {
        $this->id_autor = $id_autor;
    }


    function setId_editora($id_editora) {
        $this->id_editora = $id_editora;
    }


}
