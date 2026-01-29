<?php
$name = "Nuno-Silva";
$contact_email = "nuno.silva@gmail.com";
$contact_phone = "912 345 678";
$linkedin = "https://linkedin.com/in/nuno-silva";
$github = "https://github.com/nuno20-05";
$location = "Portalegre, Portugal";
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title><?php echo $name; ?> - CV Web</title>
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
        <h2>Identificação</h2>
        <p><strong>Nome:</strong> <?php echo $name; ?></p>
        <p><strong>Email:</strong> <a href="mailto:<?php echo $contact_email; ?>"><?php echo $contact_email; ?></a></p>
        <p><strong>Telefone:</strong> <?php echo $contact_phone; ?></p>
        <p><strong>Localização:</strong> <?php echo $location; ?></p>
        <p><strong>Links:</strong>
            <a href="<?php echo $linkedin; ?>" target="_blank">LinkedIn</a> |
            <a href="<?php echo $github; ?>" target="_blank">GitHub</a>
        </p>
    </section>

    <section>
        <h2>Formação e competências</h2>
        <h3>Formação</h3>
        <ul>
            <li>CTeSP – Programação Ágil e Segurança de Sistemas de Informação (IPP)</li>
        </ul>
        <h3>Competências técnicas</h3>
        <ul>
            <li>PHP, HTML, CSS, JavaScript</li>
            <li>Docker, Docker Compose, NGINX</li>
            <li>Linux (Debian, Alpine)</li>
        </ul>
        <h3>Competências comportamentais</h3>
        <ul>
            <li>Trabalho em equipa</li>
            <li>Gestão de tempo</li>
            <li>Resolução de problemas</li>
        </ul>
    </section>

    <section>
        <h2>Projetos</h2>
        <ul>
            <li>Currículo web em PHP containerizado com Docker e CI/CD em GitHub Actions.</li>
            <li>Projetos de redes Cisco com BGP, OSPF, VLANs e DHCP.</li>
        </ul>
    </section>
</main>

<footer>
    <p>&copy; 2026 <?php echo $name; ?></p>
</footer>
</body>
</html>
