<html>

<head>
    <title>Questão #<?= $_SESSION['questao_atual'] ?></title>
    <link rel="stylesheet" href="/css/geral.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script>
        const handleFinalizar = () => {
            let resultado = confirm('Finalizar Partida?')

            if (resultado) {
                window.location.href = '/partida/finalizar'
            }
        }
    </script>
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
            width: 900px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            position: relative;
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

        .alternativa {
            border: none;
            border-radius: 10px;
            padding: 15px;
            margin: 5px;
            width: 45%;
            color: white;
            font-size: 16px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: transform 0.2s, background-color 0.2s;
            position: relative;
            border-bottom: 5px solid rgba(0, 0, 0, 0.2);
        }

        .alternativa:nth-child(1) {
            background-color: #ff4d4d;
        }

        .alternativa:nth-child(2) {
            background-color: #8a2be2;
        }

        .alternativa:nth-child(3) {
            background-color: #4caf50;
        }

        .alternativa:nth-child(4) {
            background-color: #ffa500;
        }

        .alternativa:hover {
            transform: scale(1.05);
        }

        .alternativa-letra {
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 50px;
            width: 25px;
            height: 25px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 10px;
        }

        .botao-finalizar {
            position: absolute;
            right: 1rem;
            top: 0.5rem;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <span onclick="handleFinalizar()" class="botao-finalizar">X</span>
        <div class="questao">Questão #<?= $_SESSION['questao_atual'] ?></div>
        <div class="enunciado">
            <?= $model->enunciado ?>
        </div>
        <div class="alternativas">
            <a class="alternativa" href="/partida/responder?resposta=a">
                <div class="alternativa-letra">a</div>
                <?= $model->alternativa_a ?>
            </a>
            <a class="alternativa" href="/partida/responder?resposta=b">
                <div class="alternativa-letra">b</div>
                <?= $model->alternativa_b ?>
            </a>
            <a class="alternativa" href="/partida/responder?resposta=c">
                <div class="alternativa-letra">c</div>
                <?= $model->alternativa_c ?>
            </a>
            <a class="alternativa" href="/partida/responder?resposta=d">
                <div class="alternativa-letra">d</div>
                <?= $model->alternativa_d ?>
            </a>
        </div>
    </div>
</body>

</html>