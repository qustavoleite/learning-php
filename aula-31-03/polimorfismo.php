<?php 

class Pessoa {
    public $nome;
    public $CPF;
    public $email;

    public function fazerLogin() {
        return "A pessoa {$this->nome} esta fezzendo login\n";
    }
}

class Aluno extends Pessoa {
    public $ra;

    public function verBoleto() {
        return "Oo {$this->nome} esta vendo um boleto\n";
    }
}

//polimorfismo reescrever a mesma função da clase pai na classe filho
class Professor extends Pessoa {
    public function fazerLogin(){
        return "O professor {$this->nome} esta fazendo login no portal educacional\n";
    }    
}


$obj2 = new Professor();
$obj2->nome = "Bob professor";
echo $obj2->fazerLogin();

?>