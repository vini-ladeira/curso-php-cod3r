<div class="titulo">Desafio Precedência</div>

<?php
    echo '<p>1. Qual o valor será impresso?<p>';
    echo "2 + 5 *3 + (12 / 6) / (-8 + 2 ** 3)";
    

    echo '<p>2. Qual a expressão imprime o valor 100?</p>';
    echo 'a) ', "(1 + 2) * 20 -15", '</br>';
    echo 'b) ', "4 * 5 ** 2", '</br>';
    echo 'c) ', "2 ** 3 ** 4 / 1e25", '</br>';
    echo 'd) ', "3 + (3 * 8) / 2 - 3", '</br>';
?>

<h2>Desafio resolvido</h2>
<?php  
    echo '<p> 1. - INF';
    echo '<p> 2. - B';
?>

<h2>Gabarito</h2>

<?php
    echo '<p>1. Qual o valor será impresso?/<p>';
    echo 2 + 5 *3 + (12 / 6) / (-8 + 2 ** 3);

    echo '<p>2. Qual a expressão imprime o valor 100?</p>';
    echo 'a) ', (1 + 2) * 20 -15, '</br>';
    echo 'b) ', 4 * 5 ** 2, '</br>';
    echo 'c) ', 2 ** 3 ** 4 / 1e25, '</br>';
    echo 'd) ', 3 + (3 * 8) / 2 - 3, '</br>';
?>