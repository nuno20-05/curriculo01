<?php
$name = "Nuno Silva";
$contact_email = "nuno.silva@gmail.com";
$contact_phone = "912 345 678";
$success_message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $visitante_nome = htmlspecialchars($_POST['nome'] ?? '');
    $visitante_email = htmlspecialchars($_POST['email'] ?? '');
    $visitante_mensagem = htmlspecialchars($_POST['mensagem'] ?? '');

    if ($visitante_nome && $visitante_email && $visitante_mensagem) {
        $success_message = "Obrigado, $visitante_nome! A sua mensagem foi recebida.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Contacto - <?php echo $name; ?></title>
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
        <h2>Contacto</h2>

        <?php if ($success_message): ?>
            <div class="success-message">
                <?php echo $success_message; ?>
            </div>
        <?php endif; ?>

        <div class="contacto-info">
            <p><strong>Email:</strong> <a href="mailto:<?php echo $contact_email; ?>"><?php echo $contact_email; ?></a></p>
            <p><strong>Telefone:</strong> <?php echo $contact_phone; ?></p>
        </div>

        <form method="POST" action="contacto.php" class="contacto-form">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" rows="5" required></textarea>

            <button type="submit">Enviar</button>
        </form>
    </section>
</main>

<footer>
    <p>&copy; 2026 <?php echo $name; ?></p>
</footer>
</body>
</html>
