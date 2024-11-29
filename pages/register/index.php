<?php
$path = $_SERVER['DOCUMENT_ROOT'] . '/GeFinance/validacao/conexao.php';
if (file_exists($path)) {
    include($path);
} else {
    echo "Arquivo conexao.php não encontrado.";
}


$path = $_SERVER['DOCUMENT_ROOT'] . '/GeFinance/validacao/login.php';
if (file_exists($path)) {
    include($path);
} else {
    echo "Arquivo login.php não encontrado.";
} 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav>
            <ul class="nav-bar">
                <li class="logo"><a href="/pages/home_page/index.php"><img src="GF (1).png" alt="Logo"></a></li>
                <input type="checkbox" id="check" />
                <label for="check" class="open-menu"><i class="fas fa-bars"></i></label>
                <div class="menu">
                    <li><a href="/GeFinance/pages/home_page/index.php">Home</a></li>
                    <li><a href="/GeFinance/pages/Planos/index.php">Planos</a></li>
                    <li><a href="/GeFinance/pages/login/index.php">Login</a></li>
                    <li><a href="#">Sobre</a></li>
                    <label for="check" class="close-menu"><i class="fas fa-times"></i></label>
                </div>
            </ul>
        </nav>
    </header>
    <form action="" method="POST">
        <div class="register-box">
            <div class="register-header">
                <h1 style="color: white;">Registrar</h1>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" id="nome" placeholder="Nome Completo" autocomplete="off" required>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" id="email" placeholder="Email" autocomplete="off" required>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" id="confirm-email" placeholder="Confirmar Email" autocomplete="off" required>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" id="senha" placeholder="Senha" autocomplete="off" required>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" id="confirm-senha" placeholder="Confirmar Senha" autocomplete="off" required>
            </div>
            <div class="input-submit">
                <button class="submit-btn" id="submit"></button>
                <label for="submit">Registrar</label>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>