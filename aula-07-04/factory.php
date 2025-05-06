<?php 

interface Transporte {
    public function entregar();
}

class Navio implements Transporte {
    public function entregar() {
        return "Entrega feita por navio";
    }
}

class Caminhao implements Transporte {
    public function entregar(){
        return "Entrega feita por caminhão";
    }
}

class FactoryTransport {
    public function criarTransporte($tipoTransporte){
        if ($tipoTransporte == "terrestre") {
            return new Caminhao();
        } else {
            return new Navio();
        }
    }
}

$fabrica = new FactoryTransport();

$transporte1 = $fabrica->criarTransporte("terrestre");
echo $transporte1->entregar() . "<br>";

$transporte2 = $fabrica->criarTransporte("maritimo");
echo $transporte2->entregar(); 

?>
