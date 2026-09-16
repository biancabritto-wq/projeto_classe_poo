<?php
//importando as classes
require_once 'Usuario.php';
require_once 'Aluno.php';
require_once 'Professor.php';

$professor1 = new Professor(" Carlos", "carlos@escola.com", "Matemática");
$professor2 = new Professor(" Ana", "ana@escola.com", "Física");

$aluno1 = new Aluno(" João", "joao@aluno.com", "2025A001");
$aluno2 = new Aluno(" Maria", "maria@aluno.com", "2025A002");

//exibindo informações dos professores
echo "<h2>Professores</h2>";
echo $professor1->exibirInfo() . "<br>";
echo $professor1->darAula() . "<br><br>";

echo $professor2->exibirInfo() . "<br>";
echo $professor2->darAula() . "<br><br>";

// exibindo informações dos alunos
echo "<h2>Alunos</h2>";
echo $aluno1->exibirInfo() . "<br>";
echo $aluno1->estudar() . "<br><br>";

echo $aluno2->exibirInfo() . "<br>";
echo $aluno2->estudar() . "<br><br>";

?>