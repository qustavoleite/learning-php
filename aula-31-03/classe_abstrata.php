<?php 
//sao classes, possuem atributos e metodos, não podem ser instanciadas (new), so pode ser herdada 

//define um modelo base para aoutras classes
//pode conter metodos concreto e abstratos
//obrigatoriamente deve ser herdade por outra classe

abstract class Pessoa {
    public $nome;
    public $CPF;
    public $email;

    public function fazerLogin() {  
        return "A pessoa {$this->nome} esta fezendo login\n";
    }
}

class Aluno extends Pessoa {
    public $ra;

    public function verBoleto() {
        return "O {$this->nome} esta vendo um boleto\n";
    }
}

class Professor extends Pessoa {
    public function fazerLogin(){
        return "O professor {$this->nome} esta fazendo login no portal educacional\n";
    }    
}

$obj2 = new Professor();
$obj2->nome = "Bob professor";
echo $obj2->fazerLogin();

?>