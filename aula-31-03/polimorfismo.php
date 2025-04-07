<?php 

//permite que um mesmo método tinha diferentes implementações em classes distintas
//sobrescrita de métodos (overide). ocorre quando uma classe filha redefine um metodo da classe pai
//o nome do metodo na classe filha deve ser o mesmo nome na classe pai
//o metodo na classe pai nao pode ser private
//os parametros do metodo deve ser igual na classe filha

class Pessoa {
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
        return "Oo {$this->nome} esta vendo um boleto\n";
    }
}

//polimorfismo reescreve a mesma função da clase pai na classe filho
class Professor extends Pessoa {
    public function fazerLogin(){
        return "O professor {$this->nome} esta fazendo login no portal educacional\n";
    }    
}

$obj2 = new Professor();
$obj2->nome = "Bob professor";
echo $obj2->fazerLogin();

?>