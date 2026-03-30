<?php 

class Funcionario {

    public $nome;
    public $cargo;
    public $salarioMensal;
    public $dataAdmissao;

}

$funcionario1 = new Funcionario();
$funcionario1->nome = "Jonh Jones";
$funcionario1->cargo = "Analista";
$funcionario1->salarioMensal = 3000;
$funcionario1->dataAdmissao = "2022-05-10";

    $salarioAnual1 = $funcionario1->salarioMensal * 12;

echo "Nome: " . $funcionario1->nome . "<br>";
echo "Cargo: " . $funcionario1->cargo . "<br>";
echo "Salario anual: R$ " . $salarioAnual1 . "<br><br>";

$funcionario2 = new Funcionario();
$funcionario2->nome = "Led zeppelin";
$funcionario2->cargo = "Gerente";
$funcionario2->salarioMensal = 5000;
$funcionario2->dataAdmissao = "2021-03-15";

     $salarioAnual2 = $funcionario2->salarioMensal * 12;

    echo "Nome: " . $funcionario2->nome . "<br>";
echo "Cargo: " . $funcionario2->cargo . "<br>";
echo "Salario anual: R$ " . $salarioAnual2 . "<br>";

?>