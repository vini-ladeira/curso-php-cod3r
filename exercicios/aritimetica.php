<div class="titulo">Operações Aritiméticas</div>

<?php
    echo 1 + 1, '<br>'; //soma entre inteiros
    echo var_dump (1 + 1), '<br>'; 
    echo 1 + 2.5, '<br>'; //soma entre inteiro e float
    echo 10 - 2, '<br>'; //subtraçnao entre inteiros
    echo 2 * 5, '<br>'; //multiplicação entre inteiros
    echo 7 / 4, '<br>'; //divisão entre inteiros
    echo intdiv(7, 4), '<br>'; //divisão em que o resultado ignora as casas decimais para se gerar um inteiro
    echo round(7/ 4), '<br>'; //divisão em que arredonda o resultado para se tornar um número inteiro
    echo 7 % 4, '<br>'; //módulo ou resto da divisão
    // echo 7 / 0, '<br>'; //divisão por zero tende ao infinito, e gera saída única INF
    // echo intdiv(7, 0); //divisão por zero em inteiros dá erro e cancela a renderização do restante da página
    echo 4 ** 2, '<br>'; //exponenciação de inteiros (quatro elevado a dois)


    //precedência de operadores igual a matemática
    // () => ** => / * % => +-

    echo '<p>Procedências</p>';
    echo 2 + 3* 4, '<br>';
    echo (2 +3) * 4, '<br>';
    echo 2 + 3 * 4 ** 2, '<br>';
    echo ((2+3) * 4) ** 2, '<br>';
?>
