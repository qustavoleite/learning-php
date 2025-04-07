<?php

interface Forma {
    public function calcularArea();
}

class Retangulo implements Forma {
    private $largura;
    private $altura;

    public function __construct($largura, $altura) {
        $this->largura = $largura;
        $this->altura = $altura;
    }

    public function calcularArea() {
        return $this->largura * $this->altura;
    }
}

class Circulo implements Forma {
    private $raio;

    public function __construct($raio) {
        $this->raio = $raio;
    }

    public function calcularArea() {
        return pi() * pow($this->raio, 2);
    }
}

// Testando as formas
$ret = new Retangulo(5, 10);
echo "Área do Retângulo: " . $ret->calcularArea() . "<br>";

$cir = new Circulo(3);
echo "Área do Círculo: " . number_format($cir->calcularArea(), 2) . "<br><br>";

abstract class ContaBancaria {
    protected $saldo;

    public function __construct($saldoInicial) {
        $this->saldo = $saldoInicial;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    abstract public function sacar($valor);
}

class ContaCorrente extends ContaBancaria {
    public function sacar($valor) {
        if ($valor > $this->saldo) {
            return "Saldo insuficiente.<br>";
        }

        $this->saldo -= $valor;
        return "Saque de R$$valor realizado com sucesso.<br>";
    }
}

class ContaPoupanca extends ContaBancaria {
    public function sacar($valor) {
        if ($valor < 50) {
            return "Saques abaixo de R$50,00 não são permitidos.<br>";
        }

        if ($valor > $this->saldo) {
            return "Saldo insuficiente.<br>";
        }

        $this->saldo -= $valor;
        return "Saque de R$$valor realizado com sucesso.<br>";
    }
}

// Testando as contas
$cc = new ContaCorrente(300);
echo $cc->sacar(100);
echo "Saldo Conta Corrente: R$" . $cc->getSaldo() . "<br>";

$cp = new ContaPoupanca(300);
echo $cp->sacar(30); // não pode
echo $cp->sacar(60); // pode
echo "Saldo Conta Poupança: R$" . $cp->getSaldo() . "<br>";

?>