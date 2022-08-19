<div class="titulo">Integração - CSS</div>

<style>
    button {
        padding: 5px <?= 2 * 20 ?>px;
        background-color: blue;
        color: white;
        font-weight: bold;
        border-radius: 10px;
    }
</style>

<div> <button dobro> <?= "Legal!"; ?> </button> </div>

<br>
<style>
    [center] {
        display: flex;
        justify-content: center;
    }
    <?= "[azul]" ?> {
        color: blue;
    }
    [dobro] {
        font-size: <?= 5 - 2 ?>rem;
    }
</style>

<?= "<div center azul> outra forma de me expressar!</div>" ?>