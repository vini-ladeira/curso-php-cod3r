<div class="titulo">Desafio string</div>

<?php
    echo 'Enunciado: <br>';
    echo "Avaliando os métodos da documentação da string, qual o método que a posição do texto 'abc' na string '!AbcaBcabc' retorne 1?";
?>

<h2>Desafio resolvido</h2>

<?php
    echo '!AbcaBcabc' . "<br>";
    echo stripos('!AbcaBcabc', "abc") . "<br>";
?>
