<div class="titulo">Desafio de Equação</div>

<?php
    $PrimeiraConta = (6 * (3 + 2)) ** 2 / (3*2);
    $SegundaConta = ((1 - 5) * (2 - 7) / 2 ) ** 2 ;
    $TerceiraConta = 10 ** 3 ;
    $QuartaConta = ($PrimeiraConta - $SegundaConta) ** 3 ;
    $Resultado = ($QuartaConta / $TerceiraConta) ;

    echo $PrimeiraConta . '<br>';
    echo $SegundaConta . '<br>';
    echo $TerceiraConta . '<br>';
    echo $QuartaConta . '<br>';
    echo $Resultado . '<br>';
?>
