<div class="titulo">Conversões</div>

<?php
    echo is_int (PHP_INT_MAX) . '<br>';

    //adicionando mais números do que o limite máximo de inteiros que o PHP suporta, ele converterá o tipo para float

    echo var_dump(PHP_INT_MAX + 1) . '<br>';
    echo var_dump(1 + 1.0) . '<br>';
    echo var_dump((float) 3) . '<br>';


    //float para int
    echo '<p>Float para INT</p>';
    echo var_dump((int) 1.8) . '<br>';
    echo var_dump(intval(2.8)) . '<br>';
    echo var_dump(round(2.8)) . '<br>';
    
    //Operações com string
    echo '<p>Operações com Strings</p>';
    echo var_dump(3 + "2") . '<br>';
    echo var_dump(3 . "2") . '<br>';
    echo is_string(3 . "2") . '<br>';
    echo is_string(3 + "2") . '<br>';
    //echo var_dump(3 + "Cinco") . '<br>'; //erro
    echo var_dump(3 + "2 Dois") . '<br>';
    echo var_dump(3 + "2 + 5") . '<br>'; // Só vai somar o início da string
    echo var_dump(1 + 3.2) . '<br>';
    echo var_dump(1 + "-3.2e2") . '<br>';
    echo var_dump((int) "10.5") . '<br>'; //converter para inteiro
    echo var_dump((float) "10.5") . '<br>';
    
?>