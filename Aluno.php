<?php
require_once "Usuario.php";

//Class Filha - Professor
class Aluno extends Usuario {
    private $matricula;
    public function __construct($nome, $email, $matricula){
        parent::__construct($nome, $email);
        $this->matricula = $matricula;
    }
    public function getMatricula(){
        return $this->matricula;
    }
    public function exibirInfo(){
        return parent::exibirInfo() . " | Matrícula: {$this->matricula}";
    }
    public function estudar() {
        return "{$this->nome}, {$this->email} esta estudando...";
    } 
}