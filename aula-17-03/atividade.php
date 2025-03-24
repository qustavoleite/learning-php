<?php
class Produto {
    private $nome;
    private $preco;

    public function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function exibirDetalhes() {
        return "Produto: " . $this->nome . " | Preço: R$ " . number_format($this->preco, 2, ',', '.');
    }
}

$produto1 = new Produto("Smartphone Samsung", 1999.99);
$produto2 = new Produto("Notebook Dell", 4500.50);

echo $produto1->exibirDetalhes() . "<br>";
echo $produto2->exibirDetalhes();
?>
