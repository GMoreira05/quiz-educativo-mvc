<html>

<head>
    <title>Nova Partida</title>
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

        .questao {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .enunciado {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 18px;
        }

        .alternativas {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
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
    <div class="container">
        <div class="questao">Quiz Educativo</div>
        <div class="enunciado">
            Responda as questões sem errar e acumule pontos para testar seus conhecimentos gerais!
        </div>
        <a class="botao" href="/partida/criar">
            Vamos Começar?
        </a>
    </div>
    </div>
</body>

</html>