<html>

<head>
    <title>Autenticação</title>
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

        .login-btn {
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

        .login-btn:hover {
            transform: scale(1.05);
        }

        .erro-login {
            margin: 0px;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="/adm/login" method="post">
            <div class="header">Autentique-se</div>
            <div class="input-group">
                <input type="text" placeholder="Usuário" name="usuario">
            </div>
            <div class="input-group">
                <input type="password" placeholder="Senha" name="senha">
            </div>
            <?= isset($_GET['erro']) ? '<span class="erro-login">Credenciais Inválidas</span>' : '' ?></span>
            <button class="login-btn" type="submit">Entrar</button>
        </form>
    </div>
</body>

</html>