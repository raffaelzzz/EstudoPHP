<?php

//Metodo(function) é uma função que faz parte de uma classe, representa um comportamento que ela precisa expor para o 
//ambiente externo

//Estrtutura do objeto
class produto {
    //Atributos públicos
    public $descricao;
    public $estoque;
    public $preco;

    //This serve para referenciar um atributo interno e não externo
    //Criando os métodos internos
    public function aumentarEstoque( $unidades ){

        if(is_numeric($unidades) AND $unidades >= 0){//Se o valor passado pelo usuário/programador for maior ou igual a 0 faça

            $this -> estoque += $unidades;//Vai somar o valor que tem no estoque mais o que foi atribuido na $unidade
        }
    }

    public function diminuirEstoque( $unidades ){

        if(is_numeric($unidades) AND $unidades >= 0){

            $this -> estoque -= $unidades;
        }
    }

    public function reajustarPreco($percentual){

        if(is_numeric($percentual) AND $percentual >= 0){

            $this -> preco *= (1 + ($percentual/100));
        }
    }
}

//criando objeto

$p1 = new produto;
$p1 -> descricao = 'Chocolate';
$p1 -> estoque = 20;
$p1 -> preco = 30;

//Printando conteúdo armazenado no atributo do objeto(produto)
print "O estoque de {$p1 -> descricao} é {$p1 -> estoque} <br>\n";
print "o valor do {$p1 -> descricao} é: {$p1 -> preco} <br>\n";


//Utilizando os métodos

$p1 -> aumentarEstoque(10);//adicionando mais 10
$p1 -> diminuirEstoque(5);//diminuindo 5 no estoque
$p1 -> reajustarPreco(30);//Reajuste de 30%

//Printando as modificações

print "O estoque de {$p1 -> descricao} é: {$p1 -> preco} <br>\n";
print "o valor do {$p1 -> descricao} é: {$p1 -> preco} <br>\n";





?>
