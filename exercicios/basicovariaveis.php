<div class="titulo">Básico de Variáveis</div>

<?php
    $numeroA = 13;
    echo $numeroA, '<br>';
    echo var_dump($numeroA), '<br>';
    $a = 3;
    $b = 16;
    $soma = $a + $b;
    echo $soma, '<br>'; //variáveis são case sensitive
    echo isset($soma), '<br>';
    unset($soma);
    echo $soma, '<br>';
    echo var_dump($soma), '<br>';
    $variavel = 10;
    echo $variavel, '<br>';
    $variavel = "Agora eu sou uma String!";
    echo $variavel, '<br>';
    // nomeclatura de variaveis 

    $var = 'valida';
    $var2 = 'valida';
    $VAR3 = 'valida';
    $_var_4 =  'valida';
    $vâr5 =  'valida'; //evitar
    //$6var =  'invalida';
    //$%var7 =  'invalida';
    //$var8% =  'invalida';
    echo $_SERVER . '<br>';
    //echo var_dump($_SERVER) . '<br>';
    var_dump($_SERVER["HTTP_HOST"]);
    echo '<br>';
?>