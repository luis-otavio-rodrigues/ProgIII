<?php 
class pessoa {
    private $nome;
    private $idade;

    public function setNome($novoNome) {
        if(!empty($novoNome)){
        $this->nome = $novoNome;
            }
   else{
        echo "Nome invalido";
    } }
    public function getNome() {
        return $this->nome;
    }

    public function setIdade($novaIdade) {
        if($novaIdade > 0 && $novaIdade < 120) { 
    $this->idade = $novaIdade;} 
    else{
        echo "Idade Invalida";
    }
    }
    public function getIdade() {
       return $this->idade;
    }
}
$p = new pessoa();
$p->setNome("Ana");
$p->getNome();

$p->setIdade(5);
$p->getIdade();


?>
