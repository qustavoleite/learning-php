<?php 

abstract class Animal {
    abstract public function deslocar();
}

class Papagaio extends Animal {
    public function deslocar(){
        return "O papagaio esta voando \n";
    }
}

class Age extends Animal {
     public function deslocar(){
        return "O peixe esta nadando \n";
    }
}

$obj1 = new Papagaio();
echo $obj1->deslocar();

?>