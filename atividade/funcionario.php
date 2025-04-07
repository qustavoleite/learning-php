<?php 

abstract class Funcionario {
    protected $nome;
    protected $salarioBase;

    public function __construct($nome, $salarioBase){
        $this->nome = $nome;
        $this->salarioBase = $salarioBase;
    }

    abstract public function calcularSalario();
}

class Gerente extends Funcionario {
    public function calcularSalario(){
        return $this->salarioBase + ($this->salarioBase *  0.5);
    }
}

class Desenvolvedor extends Funcionario {
    public function calcularSalario(){
        return $this->salarioBase + ($this->salarioBase * 0.2);
    }
}

$gerente = new Gerente("Alice", 5000);
$desenvolvedor = new Desenvolvedor("Bob", 4000);

?>