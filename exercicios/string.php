<div class="titulo">Tipo String</div>

<?php 
    echo 'Eu sou uma string';
    echo '<br>';
    var_dump("Eu Também!");
    echo '<br>';
    // concatenação 
    //operador de concatenação de string usa o . 
    echo "Nós também " . 'somos';
    echo '<br>' . "Número é " . 123;
    echo '<br>', "Também aceito ", "vírgulas"; //vírgula ambém funciona, mas o ideal é usar sempre o ponto
    echo '<br>';
    echo " 'Teste' " . ' "Teste" ' . '\'Teste\' ' . "\"Teste\" " . "\\" ; //aspas simplese duplas dentro da string podem ser usadas alternadamente, se não alternar tem que usar a \
    print("<br> Também existe a função print");
    print "<br> Também funciona sem os parenteses";
    echo ('<br>Também funcioa com os parenteses');


    //algumas funções de string
    echo '<br>' . strtoupper('maximizado'); //todas as letras maisculas
    echo '<br>' . strtolower('MINIMIZADO'); //todas as letras minusculas
    echo '<br>' . ucfirst('texto capitulizado'); //Maiscula só na primeira (capitulizado)
    echo '<br>' . ucwords('começando em maisculo todas as palavras'); //Todas as palavras começando em maisculo
    echo '<br>' . strlen('Quantas letras?'); //contador de caracteres na string
    echo '<br>' . strlen('Eu Também'); //Contador não funciona direito em UTF-8
    echo '<br>' . mb_strlen('Eu Também', "utf-8"); //Com essa função, resolvemos esse problema
    echo '<br>' . substr('só uma parte mesmo', 7, 6); //recortar parte da string, sendo primeiro a string, depois o primeiro parametro é quando começa a cortar, e o seugndo é quando parar, lembrando de sempre deixar um número a mais
    echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso'); // substituir texto na string, lembrando que a primeira é o texto que vc quer substituir e o segundo é o texto novo, seguido da string
?>