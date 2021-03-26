<?php


//Estrtutra objeto

class produto {

    private $descricao;
    private $estoque;
    private $preco;

//Construtor simplificado
public function __construct($descricao, $estoque, $preco) {

    $this -> descricao = $descricao;
    $this -> estoque = $estoque;
    $this -> preco = $preco;

    print "CONSTRUÍDO: objeto {$descricao}, estoque {$estoque}, preço {$preco}" . '<br>' . PHP_EOL;
}
//Finalizar conexões
public function __destruct() {

    print "DESTRUÍDO: objeto {$this -> descricao}, estoque {$this -> estoque}, preco {$this -> preco}" . '<br>' . PHP_EOL;

    }
}

$p1 = new produto('Chocolate', 10, 5);
unset($p1);//Finaliza o processo
$p2 = new produto('Miojo', 4, 3);
unset($p2);




?>
