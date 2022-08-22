<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Curso PHP</title>
</head>
<body>
        <header class="cabecalho">
            <h1>Curso PHP</h1>
            <h2>Índice dos Exercícios</h2>
        </header>
        <main class="principal">
            <div class="conteudo">
                <nav class="modulos">
                    <div class="modulo verde">
                        <h3>Módulo 01</h3>
                        <ul>
                            <li><a href="exercicio.php?dir=exercicios&file=ola">Olá Php</a></li>
                            <li><a href="exercicio.php?dir=exercicios&file=html">Integração - HTML</a></li>
                            <li><a href="exercicio.php?dir=exercicios&file=css">Integração - CSS</a></li>
                            <li><a href="exercicio.php?dir=exercicios&file=comentarios">Comentários</a></li>
                            <li><a href="exercicio.php?dir=exercicios&file=desafio">Desafio</a></li>
                        </ul>
                    </div>
                    <div class="modulo vermelho">
                        <h3>Módulo 02</h3>
                        <ul>
                            <li><a href="exercicio.php?dir=exercicios&file=int">Tipo Inteiro</a></li>
                            <li><a href="exercicio.php?dir=exercicios&file=float">Tipo Float</a></li>
                            <li><a href="exercicio.php?dir=exercicios&file=aritimetica">Operações Aritiméticas</a></li>
                            <li><a href="exercicio.php?dir=exercicios&file=desafio_precedencia">Desafio Precedência</a></li>
                            <li><a href="exercicio.php?dir=exercicios&file=string">Tipo String</a></li>
                            <li><a href="exercicio.php?dir=exercicios&file=desafio_string">Desafio String</a></li>
                            </ul>
                    </div>
                    <div class="modulo azul">
                        <h3>Módulo 03</h3>
                        <ul>
                            <li><a href="#">Exercício A</a></li>
                            <li><a href="#">Exercício B</a></li>
                            <li><a href="#">Exercício C</a></li>
                        </ul>
                    </div>
                    <div class="modulo roxo">
                        <h3>Módulo 04</h3>
                        <ul>
                            <li><a href="#">Exercício A</a></li>
                            <li><a href="#">Exercício B</a></li>
                            <li><a href="#">Exercício C</a></li>
                        </ul>
                    </div>
                    <div class="modulo laranja">
                        <h3>Módulo 05</h3>
                        <ul>
                            <li><a href="#">Exercício A</a></li>
                            <li><a href="#">Exercício B</a></li>
                            <li><a href="#">Exercício C</a></li>
                        </ul>
                    </div>
                    <div class="modulo verde-escuro">
                        <h3>Módulo 06</h3>
                        <ul>
                            <li><a href="#">Exercício A</a></li>
                            <li><a href="#">Exercício B</a></li>
                            <li><a href="#">Exercício C</a></li>
                        </ul>
                    </div>
                    <div class="modulo vermelho-escuro">
                        <h3>Módulo 07</h3>
                        <ul>
                            <li><a href="#">Exercício A</a></li>
                            <li><a href="#">Exercício B</a></li>
                            <li><a href="#">Exercício C</a></li>
                        </ul>
                    </div>
                    <div class="modulo azul-escuro">
                        <h3>Módulo 08</h3>
                        <ul>
                            <li><a href="#">Exercício A</a></li>
                            <li><a href="#">Exercício B</a></li>
                            <li><a href="#">Exercício C</a></li>
                        </ul>
                    </div>
                    <div class="modulo roxo-escuro">
                        <h3>Módulo 09</h3>
                        <ul>
                            <li><a href="#">Exercício A</a></li>
                            <li><a href="#">Exercício B</a></li>
                            <li><a href="#">Exercício C</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            
        </main>
        <footer class="rodape">
            COD3R & ALUNOS - Vinícius Ladeira - <?= date('Y'); ?>
        </footer>
</body>
</html>