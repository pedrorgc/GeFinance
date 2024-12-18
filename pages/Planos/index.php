<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Planos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
      <nav>
          <ul class="nav-bar">
              <li class="logo"><a href="/GeFinance/pages/home_page/index.php"><img src="GeFinance.png" alt="Logo"></a></li>
              <input type="checkbox" id="check" />
              <label for="check" class="open-menu"><i class="fas fa-bars"></i></label>
              <div class="menu">
                  <li><a href="/GeFinance/pages/home_page/index.php">Home</a></li>
                  <li><a href="#">Sobre</a></li>
                  <li><a href="/GeFinance/pages/login/index.php">Login</a></li>
                  <label for="check" class="close-menu"><i class="fas fa-times"></i></label>
              </div>
          </ul>
      </nav>
  </header>
  

    <div class="planos">
      <h2 class="block-heading">
        Basico
      </h2>
      <ul class="list-basic">
        <li>Relatório Geral.</li>
        <li>Controle financeiro manual, registro de despesas e receitas.</li>
        <li>Acesso a dicas de economia e finanças personalizadas.</li>
      </ul>
      <div class="valor">
      <strong><p>R$99,90/Mês <br>
          ou <br>
          R$949,90/Ano
      </p><small>5% de desconto</small></strong>
      <button class="button">Assinar</button>
      </div>
    </div>

    <div class="planos">
      <h2 class="block-heading">
        Premium
      </h2>
      <ul class="list-basic">
        <li>Relatório Geral.</li>
        <li>Controle financeiro manual, registro de despesas e receitas.</li>
        <li>Acesso a dicas de economia e finanças personalizadas.</li>
        <li>Relatórios avançados com gráficos e análises detalhadas.</li>
        <li>Definição e monitoramento de metas financeiras personalizadas com notificações.</li>
      </ul>
      <div class="valor1">
        <strong><p>R$129,90/Mês <br>
          ou <br>
          R$1324,90/Ano
        </p><small>15% de desconto</small></strong>
        <button class="button">Assinar</button>
      </div>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>