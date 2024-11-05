<html>

<head>
    <title>Usuários</title>
    <link rel="stylesheet" href="/css/geral.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-color: #0d0d2b;
            width: 100%;
            margin: 0;
            align-items: center;
        }

        .dashboard-container {
            background-color: #111;
            border-radius: 10px;
            padding: 20px;
            width: 800px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            margin: auto;
            margin-top: 8rem;
            margin-bottom: 4rem;
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

        .lista-usuario {
            background-color: #333;
            padding: 15px;
            border-radius: 5px;
            color: #fff;
        }

        .item-lista-usuario {
            background-color: #444;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .item-lista-usuario:last-child {
            margin-bottom: 0;
        }

        .campo-lista {
            margin: 0;
        }

        .icone-admin {
            background-color: #ff4d4d;
            color: #fff;
            padding: 3px 6px;
            border: none;
            border-radius: 5px;
            font-size: 11px;
            transition: background-color 0.3s;
            margin-right: 0.5rem;
        }
    </style>
</head>

<body>
    <?php include 'View/components/Navbar.php'; ?>
    <div class="dashboard-container">
        <div class="dashboard-header">
            <h2>Gerenciar Usuários</h2>
        </div>
        <div class="lista-usuario">
            <div class="item-lista-usuario">
                <p class="campo-lista">ID</p>
                <p class="campo-lista">Nome
                </p>
                <p class="campo-lista">E-Mail</p>
            </div>
            <?php foreach ($model->rows as $item): ?>
                <div class="item-lista-usuario">
                    <p class="campo-lista"><?= $item->id ?></p>
                    <p class="campo-lista"><?= $item->admin ? '<span class="icone-admin">Admin</span>' : '' ?>
                        <?= $item->nome ?>
                    </p>
                    <p class="campo-lista"><?= $item->email ?></p>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</body>

</html>