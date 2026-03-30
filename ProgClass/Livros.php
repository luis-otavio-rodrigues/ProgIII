<?php 
class Livro {

    public $titulo;
    public $autor;
    public $numeroPaginas;
    public $anoPublicacao;

}
$Metamorfose = new Livro();
$Metamorfose->titulo = "Metamorfose";
$Metamorfose->autor = "Franz kafka";
$Metamorfose->numeroPaginas = "120";
$Metamorfose->anoPublicacao = "1915";

echo "O livro se chama " . $Metamorfose->titulo ."<br>";
echo "O livro foi escrito por ". $Metamorfose->autor ."<br>";
echo "Esse livro tem ". $Metamorfose->numeroPaginas . " paginas<br>";
echo "O livro foi lançado em ". $Metamorfose->anoPublicacao . "<br><br>";

$HarryPotter = new Livro();
$HarryPotter->titulo = "Harry Potter";
$HarryPotter->autor = "J. K. Rowling";
$HarryPotter->numeroPaginas = "220";
$HarryPotter->anoPublicacao = "1997";

echo "O livor se chama ". $HarryPotter->titulo ."<br>";
echo "O livro foi escrito por ". $HarryPotter->autor ."<br>";
echo "O livro tem ". $HarryPotter->numeroPaginas . " paginas<br>";
echo "O livro foi lançado em" . $HarryPotter->anoPublicacao . " <br>";

?>