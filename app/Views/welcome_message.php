<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<style>
    body {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
        background: linear-gradient(to left bottom, #87CEEB, #007bff, #4B0082);
    }

    .container {
        max-width: 300px;
        width: 100%;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: #fff;
    }

    h2 {
        text-align: center;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    .form-group {
        margin-bottom: 5px;
    }

    label {
        font-size: 14px;
        margin-bottom: 3px;
    }

    input {
        padding: 8px;
        font-size: 14px;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-bottom: 10px;
        /* Adicionado para dar espaço entre os campos */
    }

    button {
        padding: 10px;
        font-size: 16px;
        background: linear-gradient(to left, #87CEEB, #007bff, #4B0082);
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background: linear-gradient(to left, #6495ED, #0056b3, #4B0082);
    }

    .ressarc-container {
        text-align: center;
        margin-top: 10px;
    }

    .ressarc-container img {
        height: 30px;
        width: 30px;

    }
</style>

<body>
    <div class="container">

        <h2>Formulário</h2>
        <form action="/calcular" method="post">
            <label for="nome">Nome:</label>
            <div class="form-group">
                <input type="text" name="nome" required>
            </div>
            <label for="salario">Salário:</label>
            <div class="form-group">
                <input type="text" name="salario" required>
            </div>
            <label for="ano_nascimento">Ano de nascimento:</label>
            <div class="form-group">
                <input type="date" name="ano_nascimento" required>
            </div>
            <button type="submit">Enviar</button>
        </form>
    </div>

</body>

</html>