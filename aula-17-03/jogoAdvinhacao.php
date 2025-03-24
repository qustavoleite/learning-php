<?php 

class jogoAdvinhacao {
    private $numero;

    public function __construct(){
        $this->numero = rand(1, 10);
    }

    public function verificarPalpite($palpite){
        if ($palpite == $this->numero) {
            return "Acertou!";
        } elseif ($palpite < $this->numero) {
            return "Faça um chute maior";
        } else {
            return "Faça um chute menor";
        }
    }
}

$jogador = new jogoAdvinhacao();

echo $jogador->verificarPalpite(10);
echo $jogador->verificarPalpite(5);
echo $jogador->verificarPalpite(3);


?>