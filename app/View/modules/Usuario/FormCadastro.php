<html>

<head>
    <title>Registro</title>
    <link rel="stylesheet" href="/css/geral.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #0d0d2b;
            font-family: 'Nunito', sans-serif;
            color: white;
        }

        .container {
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 20px;
            padding: 30px;
            text-align: center;
            width: 400px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        }

        .header {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .input-group {
            margin-bottom: 20px;
            position: relative;
        }

        .input-group input {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            font-size: 16px;
            outline: none;
        }

        .input-group input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .input-group::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 10%;
            width: 80%;
            height: 5px;
            background-color: rgba(0, 0, 0, 0.2);
            border-radius: 0 0 10px 10px;
        }

        .register-btn {
            background-color: #ff4d4d;
            border: none;
            border-radius: 10px;
            padding: 15px;
            width: 100%;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: transform 0.2s, background-color 0.2s;
            position: relative;
            border-bottom: 5px solid rgba(0, 0, 0, 0.2);
        }

        .register-btn:hover {
            transform: scale(1.05);
        }

        .botao-login {
            color: white;
        }

        .botao-login:hover {
            text-decoration: underline;
        }

        div.login {
            padding-top: 1.5rem;
        }

        .erro-cadastro {
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="/usuario/cadastro" method="post">
            <div class="header">Registre-se</div>
            <div class="input-group">
                <input type="name" placeholder="Nome" name="nome">
            </div>
            <div class="input-group">
                <input type="email" placeholder="E-Mail" name="email">
            </div>
            <div class="input-group">
                <input type="password" placeholder="Senha" name="senha">
            </div>
            <?= isset($_GET['erro']) ? '<span class="erro-cadastro">Erro: ' . $_GET['erro'] . '</span>' : '' ?></span>
            <button class="register-btn" type="submit">Cadastrar</button>
            <div class="login">
                <a href="/usuario/login" class="botao-login">Já tem uma conta? Entre!</a>
            </div>
        </form>
    </div>
</body>

</html>