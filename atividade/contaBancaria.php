<?php

class ContaBancaria {
    protected $saldo;

    public function __construct($saldoInicial) {
        $this->saldo = $saldoInicial;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function sacar($valor) {
        if ($valor > $this->saldo) {
            return "Saldo insuficiente.<br>";
        }

        $this->saldo -= $valor;
        return "Saque de R$$valor realizado com sucesso.<br>";
    }
}

class ContaCorrente extends ContaBancaria {
}

class ContaPoupanca extends ContaBancaria {
    public function sacar($valor) {
        if ($valor < 50) {
            return "Saques abaixo de R$50,00 não são permitidos na conta poupança.<br>";
        }

        return parent::sacar($valor);
    }
}

$conta1 = new ContaCorrente(500);
echo "Saldo atual: R$" . $conta1->getSaldo() . "<br><br>";

$conta2 = new ContaPoupanca(300);
echo $conta2->sacar(30);
echo $conta2->sacar(100); 
echo "Saldo atual: R$" . $conta2->getSaldo() . "<br>";

?>
