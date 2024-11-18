<html>

<head>
    <title>Errou!</title>
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

        .titulo {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .texto {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            font-size: 18px;
        }

        .texto>span {
            padding-top: 1rem;
        }

        .botao {
            border: none;
            border-radius: 10px;
            padding: 15px;
            margin: 5px;
            width: 100%;
            color: white;
            font-size: 16px;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: transform 0.2s, background-color 0.2s;
            position: relative;
            border-bottom: 5px solid rgba(0, 0, 0, 0.2);
            background-color: #c105fa;
        }

        .botao:hover {
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <?php include 'View/components/Navbar.php'; ?>
    <div class="container">
        <div class="titulo">Que pena ☹️</div>
        <div class="texto">
            <span>Você errou essa última questão!</span>
            <span>Sua pontuação: <?= $_SESSION['questao_atual'] - 1 ?>pts</span>
            <span>Treine mais e tente atingir uma pontuação melhor!</span>
        </div>
        <a class="botao" href="/partida/nova">
            Jogar Novamente
        </a>
    </div>
    </div>
</body>

</html>