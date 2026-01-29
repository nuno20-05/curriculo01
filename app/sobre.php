<?php
$name = "Nuno Silva";
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Sobre mim - <?php echo $name; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1><?php echo $name; ?></h1>
    <p class="subtitle">Desenvolvedor Web / DevOps Júnior</p>
</header>

<nav>
    <a href="index.php">Home</a>
    <a href="sobre.php">Sobre mim</a>
    <a href="contacto.php">Contacto</a>
</nav>

<main>
    <section>
        <h2>Sobre mim</h2>
        <p>
            Sou estudante de Tecnologias de Informação com interesse em desenvolvimento web,
            infraestrutura em nuvem e automação com Docker e CI/CD.
        </p>
        <p>
            Gosto de aprender na prática, através de projetos como este currículo web
            containerizado, e de resolver problemas reais de configuração e deploy.
        </p>

        <h3>Objetivo profissional</h3>
        <p>
            Procuro trabalhar como desenvolvedor backend ou DevOps júnior, em equipas onde possa
            crescer tecnicamente e ajudar a criar soluções estáveis e escaláveis.
        </p>
    </section>
</main>

<footer>
    <p>&copy; 2026 <?php echo $name; ?></p>
</footer>
</body>
</html>
