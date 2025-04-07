<?php 

//permite que uma classe (classe filha) herde atributos e métodos de outra classe (classe pai)
//a classe filha herda todos os métodos e atributos PUBLICOS e PROTEGIDOS da classe pai
//a classe filha nao herda atributos/metodos privados da classe pai
//podemos adcionar novos metodos ao modifica métodos existentes.

class Pessoa {
    public $nome;
    public $CPF;
    public $email;

    public function fazerLogin() {
        return "A pessoa {$this->nome} esta fazendo login\n";
    }
}

//extends indica herança
class Aluno extends Pessoa {
    public $ra;

    public function verBoleto() {
        return "O {$this->nome} esta vendo um boleto \n";
    }
}

class Professor extends Pessoa {
     
}

$obj1 =  new Aluno();
$obj1->nome = "bob";
$obj1->CPF = "123.456.789-90";
$obj1->email = "bob@gmail.com";
$obj1->ra = "22434232455";
echo $obj1->fazerLogin();
echo $obj1->verBoleto();

//var_dump($obj1);

$obj2 = new Professor();
$obj2->nome = "Bob professor";
echo $obj2->fazerLogin();

?>