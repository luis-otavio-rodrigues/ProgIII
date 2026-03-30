<?php 

class Carro {

    public $marca;
    public $modelo;
    public $ano;
    public $cor;
    public $velocidadeMaxima;
   
    public function acelerar(){
        echo "acelerando<br>";
    }

    public function frear(){
        echo "freando<br>";
    }
}


$carro1 = new Carro();
$carro1->marca = "Ford";
$carro1->modelo = "Fusion";
$carro1->ano = 2019;
$carro1->cor = "Preto";
$carro1->velocidadeMaxima = 220;

echo"MArca do carro: " . $carro1->marca ."<br>";
echo "modelo do carro: ". $carro1->modelo ."<br>";
echo "Fabricado em: ". $carro1->ano ."<br>";
echo "Cor do carro: ". $carro1->cor ."<br>";
echo "Velociade maxima:". $carro1->velocidadeMaxima . "KM/H<br>";

$carro1->acelerar();
$carro1->frear();
echo"<br>";

$carro2 = new Carro();
$carro2->marca = "Chevrolet";
$carro2->modelo = "Onix";
$carro2->ano = 2021;
$carro2->cor = "Branco";
$carro2->velocidadeMaxima = 180;

    echo"MArca do carro: " . $carro2->marca ."<br>";
echo "modelo do carro: ". $carro2->modelo ."<br>";
echo "Fabricado em: ". $carro2->ano ."<br>";
echo "Cor do carro: ". $carro2->cor ."<br>";
echo "Velociade maxima:". $carro2->velocidadeMaxima . "KM/H<br>";



$carro2->acelerar();
$carro2->frear();

?>