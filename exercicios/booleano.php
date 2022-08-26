<div class="titulo">Tipo Booleano</div>

<?php
    echo TRUE;
    echo '<br>';
    echo FALSE;
    echo '<br>';
    echo var_dump(true) . '<br>';
    echo var_dump(false) . '<br>';
    echo var_dump('false') . '<br>';
    echo is_bool(false) . '<br>';

    //regras de conversão 

    echo '<p>Regras</p>';
    echo var_dump((bool) 0) . '<br>'; // Zero é o único número inteiro que se converte para zero 
    echo var_dump((bool) 20) . '<br>'; 
    echo var_dump((bool) -1) . '<br>'; 
    echo var_dump((bool) "") . '<br>'; //converter string vazia para boolean dá falso 
    echo var_dump((bool) " ") . '<br>'; 
    echo var_dump((bool) "0") . '<br>'; //se a string tiver somente um zero, ela também retornará falso 
        
?>