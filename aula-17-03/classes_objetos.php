<?php 

class Carro {
    public $marca;
    public $modelo;
    public $cor;

    public function ligarCarro(){
        return "Carro ligado! \n";
    }

    public function infoCarro() {
        return "Meu carro é da marca: ".$this->marca;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setCor($cor) {
        $this->cor = $cor;
    }

    public function getCor() {
        return $this->cor;
    }
}

$meuCarro = new Carro();
$meuCarro->marca = "Fiat";
$meuCarro->modelo = "Uno";
$meuCarro->cor = "Rosa";
//var_dump($meuCarro); exibe o objeto

echo $meuCarro->ligarCarro();
echo $meuCarro->infoCarro();

//get e set
$meuCarro->setMarca("Ferrari");
$meuCarro->setModelo("Uno");
$meuCarro->setCor("Vermelho");
echo $meuCarro->infoCarro();

?>