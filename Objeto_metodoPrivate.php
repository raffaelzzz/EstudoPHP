<?php

//Estrutura objeto

class produto{

    private $descricao;
    private $estoque;
    private $preco;


//Devido a utilização do private, precisamos utilizar o setters(gravação) e getters(Leitura)
//Métodos são públicos, ou seja, são acessíveis de fora da classe
//Os atributos são privates


//Método gravação

    public function setdescricao($descricao){

        if (is_string($descricao)) {
            $this->descricao = $descricao;
        }
    }

    public function setestoque($estoque){

        if(is_numeric($estoque) AND $estoque >= 0){
            
            $this -> estoque = $estoque;
        }
    }

    //Método leitura

    public function getdescricao(){

        return $this -> descricao;

    }

    public function getestoque(){

        return $this -> estoque;

    }
}

//Modo escrita setters(gravação) 
$p1 = new produto;
$p1 -> setdescricao('Chocolate');
$p1 -> setestoque(18);

//Modo leitura getters(Leitura)
print 'Descrição: ' . $p1->getdescricao() . '<br>'.PHP_EOL;
print 'Estoque: ' . $p1->getestoque() . '<br>'.PHP_EOL;





?>
