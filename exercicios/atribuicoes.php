<div class="titulo">Atribuições</div>

<?php
    $title = "Atribuições";
    $numero = 10;
    echo $numero . '<br>';
    $numero = $numero - 1;
    echo $numero . '<br>';
    $numero = $numero + 1.5;
    echo $numero . '<br>';
    $numero--; //pós-fixado
    echo $numero . '<br>';
    --$numero; //pré-fixado
    echo $numero . '<br>';
    $numero++;
    echo $numero . '<br>';
    ++$numero;
    echo $numero . '<br>';
    $numero -= 5;
    echo $numero . '<br>';
    $numero += 5;
    echo $numero . '<br>';
    $numero *= 5;
    echo $numero . '<br>';
    $numero /= 5;
    echo $numero . '<br>';
    $numero %= 6;
    echo $numero . '<br>';
    $numero **= 5;
    echo $numero . '<br>';
    
    $texto = "Este é um texto ";
    echo $texto . '<br>';
    $texto = $texto . "Qualquer ";
    echo $texto . '<br>';
    $texto .= "Eu juro!";
    echo $texto . '<br>';

    //$VariavelInexistente = "Valor inexistente";
    echo $VariavelInexistente . '<br>';
    $valor = $VariavelInexistente ?? "Valor padrão";
    echo '<br>'. $valor;
?>