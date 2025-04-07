<?php 
//sao funções que eu tenho dentro de uma classe abstrata, mas as funções nao estao immplementadas, apenas declaradas. a classe que herdar sao obrigadas a implementar as funções (ações)

abstract class Animal {
    abstract public function deslocar();
}

class Papagaio extends Animal {
    public function deslocar(){
        return "O papagaio esta voando \n";
    }
}

class Peixe extends Animal {
     public function deslocar(){
        return "O peixe esta nadando \n";
    }
}

$obj1 = new Papagaio();
echo $obj1->deslocar();

?>