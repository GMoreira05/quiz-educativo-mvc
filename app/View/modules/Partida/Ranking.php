<html>

<head>
    <title>Ranking</title>
    <link rel="stylesheet" href="/css/geral.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-color: #0d0d2b;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .dashboard-container {
            background-color: #111;
            border-radius: 10px;
            padding: 20px;
            width: 800px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            margin-top: 5rem;
        }

        .dashboard-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .dashboard-header h2 {
            color: #fff;
            margin: 0;
        }

        .botao-novo {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .botao-novo:hover {
            background-color: #45a049;
        }

        .lista-questao {
            background-color: #333;
            padding: 15px;
            border-radius: 5px;
            color: #fff;
        }

        .item-lista-questao {
            background-color: #444;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .item-lista-questao:last-child {
            margin-bottom: 0;
        }

        .enunciado-questao {
            margin: 0;
        }

        .botao-editar,
        .botao-excluir {
            background-color: #ff4d4d;
            color: #fff;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s;
        }

        .botao-editar {
            background-color: #4d79ff;
        }

        .botao-editar:hover {
            background-color: #3d5dbf;
        }

        .botao-excluir:hover {
            background-color: #e60000;
        }

        #conteudo {
            display: flex;
        }

        .item-ranking {
            display: flex;
            width: 100%;
            padding-left: 1rem;
            padding-right: 1rem;
            justify-content: space-between;
        }
    </style>
</head>

<body>
    <?php include 'View/components/Navbar.php'; ?>
    <div id="conteudo">
        <div class="dashboard-container">
            <div class="dashboard-header">
                <h2>Ranking de Pontuações</h2>
            </div>
            <div class="lista-questao">
                <?php $i = 1; ?>
                <?php foreach ($model->rows as $item): ?>
                    <div class="item-lista-questao">
                        <p class="enunciado-questao">
                            <?= '#' . $i ?>     <?= $i == 1 ? '🥇' : '' ?>     <?= $i == 2 ? '🥈' : '' ?>     <?= $i == 3 ? '🥉' : '' ?>
                        </p>
                        <div class="item-ranking">
                            <p class="enunciado-questao"><?= $item->nome ?></p>
                            <p class="enunciado-questao"><?= $item->pontuacao ?>pts</p>
                        </div>
                    </div>
                    <?php $i++; ?>
                <?php endforeach ?>
            </div>
        </div>

    </div>
</body>

</html>