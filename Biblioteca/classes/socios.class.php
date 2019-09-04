<?php

class socios{
    private $id_socio;
    private $nome;
    private $email;
    private $celular;
    private $telefone;
    
    public function __construct($id_socio,$nome,$email,$celular,$telefone) {
        $this->id_socio=$id_socio;
        $this->nome=$nome;
        $this->email=$email;
        $this->celular=$celular;
        $this->telefone=$telefone;
    }
    
    function getId_socios() {
        return $this->id_socio;
    }

    function getNome() {
        return $this->nome;
    }
    
    function getEmail(){
        return $this->email;
    }

    function getCelular() {
        return $this->celular;
    }
    function getTelefone() {
        return $this->telefone;
    }

    function setId_socio($id_socio) {
        $this->id_socio = $id_socio;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }
    
    function setEmail($email){
        $this->email = $email;
    }

    function setCelular($celular) {
        $this->celular = $celular;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

}
