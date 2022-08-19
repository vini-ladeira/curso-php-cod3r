<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/exercicio.css">
    <title>Exercício - Curso PHP</title>
</head>
<body class="exercicio">
        <header class="cabecalho">
            <h1>Curso PHP</h1>
            <h2>Visualização dos Exercícios</h2>
        </header>
        <nav class="navegacao">
            <a href=<?= $_GET['dir'] . "/" . $_GET['file'] . ".php" ?> class="verde">Sem formatação</a>
            <a href="index.php" class="vermelho">Voltar</a>
        </nav>
        <main class="principal">
            <div class="conteudo">
                <?php
                    include($_GET['dir'] . "/" . $_GET['file'] . ".php")
                ?>
            </div>
        </main>
        <footer class="rodape">
            COD3R & ALUNOS - Vinícius Ladeira - <?= date('Y'); ?>
        </footer>
</body>
</html>