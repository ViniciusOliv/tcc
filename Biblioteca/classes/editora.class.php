<?php

class editora{
    private $id_editora;
    private $nome;
    private $email;
    private $telefone;
    
    public function __construct($id_editora,$nome,$email,$telefone) {
        $this->id_editora=$id_editora;
        $this->nome=$nome;
        $this->email=$email;
        $this->telefone=$telefone;
    }
    
    function getId_editora() {
        return $this->id_editora;
    }

    function getNome() {
        return $this->nome;
    }
    
    function getEmail(){
        return $this->email;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function setId_editora($id_editora) {
        $this->id_editora = $id_editora;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }
    
    function setEmail($email){
        $this->email = $email;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

}
