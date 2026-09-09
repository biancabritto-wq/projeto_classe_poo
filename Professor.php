<?php
require_once "Usuario.php";
// Classe Filha - Professor
class Professor extends Usuario {
    private $disciplina;

    #[Override]
    public function __construct($nome, $email, $disciplina) {
        parent::__construct($nome, $email);
        $this -> disciplina = $disciplina;
    }
    public function getDisciplina() {
        return $this->disciplina;
    }
    #[Override]
    public function exibirInfo() {
        return parent::exibirInfo() . " | Disciplina: {$this->disciplina}";
    }
    public function darAula() {
        return "{$this->nome} está dando aula de {$this->disciplina}.";
    }
}