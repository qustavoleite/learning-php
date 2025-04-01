<?php 

interface Veiculo {
    public function ligar();
}

class Carro implements Veiculo {
    public function ligar(){
        return "O carro está ligado\n";
    }
}

$obj1 = new Carro();
echo $obj1->ligar()

?>