<?php 

require_once("controller/Aluno.php");
require_once("model/Aluno.php");
require_once("view/Aluno.php");


use controller\Aluno as alunoController;
use model\Aluno as alunoModel;
use view\Aluno as alunoView;

$aluno = new alunoController();
$aluno->imprimir();

echo "<br>";

$aluno1 = new alunoModel();
$aluno1->imprimir();

echo "<br>";
$aluno2 = new alunoView();
$aluno2->imprimir();

echo "<br>";

 ?>