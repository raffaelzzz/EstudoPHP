<?php

//Estrutura objeto
class produto{

    //atributo
    private $descricao;
    private $estoque;
    private $preco;

    //construtor + atributos + validações(para ser lidos)
    public function __construct($descricao, $estoque, $preco){

        if(is_string($descricao)){
            $this -> descricao = $descricao;
        }

        if(is_numeric($estoque) AND $estoque > 0){
            $this -> estoque = $estoque;
        }

        if(is_numeric($preco)){
            $this -> preco = $preco;
        }
    }

    //Obter valores do atributos
    public function getDescricao(){

        return $this -> descricao;

    }

    public function getEstoque(){

        return $this -> estoque;

    }

    public function getPreco(){

        return $this -> preco;

    }
}


$p1 = new produto('Chocolate', 10, 5);
print 'Descrição: ' . $p1 -> getdescricao() . '<br>'.PHP_EOL;
print 'Descrição: ' . $p1 -> getEstoque() . '<br>'.PHP_EOL;





?>
