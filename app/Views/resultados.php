<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultados</title>

  <style>
    body {
      font-family: 'Arial', sans-serif;
      background: linear-gradient(to bottom left, #8A2BE2, #4B0082);
      /* Gradiente de roxo para azul escuro */
      color: #FFF;
      /* Texto branco */
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      /* 100% da altura da viewport */
    }

    #result-box {
      background: #191970;
      /* Azul escuro */
      padding: 20px;
      border-radius: 10px;
      text-align: center;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
      /* Sombra leve */
    }

    h2 {
      color: #00BFFF;
      /* Azul claro */
    }

    p {
      margin: 10px 0;
    }

    /* Adicione mais estilos conforme necessário */
  </style>
</head>

<body>
  <div id="result-box">
    <h2>Ressarcimento</h2>
    <p>Nome: <?= $nome; ?></p>
    <p>Ano de nascimento: <?= $ano_nascimento; ?></p>
    <p>Salário: R$<?= $salario; ?></p>
    <p>Ressarcimento: R$<?= $ressarcimento; ?></p>
  </div>
</body>

</html>