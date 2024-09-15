<html>

<head>
    <title><?= isset($_GET['id']) ? 'Editar' : 'Nova' ?> Questão</title>
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
            font-family: Arial, sans-serif;
        }

        .edit-container {
            background-color: #111;
            border-radius: 10px;
            padding: 20px;
            width: 600px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        .edit-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .edit-header h2 {
            color: #fff;
            margin: 0;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            color: #fff;
            display: block;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: #333;
            color: #fff;
        }

        .form-group textarea {
            resize: vertical;
            height: 100px;
        }

        .form-actions {
            display: flex;
            justify-content: space-between;
        }

        .save-button,
        .cancel-button {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .save-button:hover {
            background-color: #45a049;
        }

        .cancel-button {
            background-color: #ff4d4d;
        }

        .cancel-button:hover {
            background-color: #e60000;
        }

        button {
            border-bottom: 5px solid rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    <div class="edit-container">
        <div class="edit-header">
            <h2><?= isset($_GET['id']) ? 'Editar' : 'Nova' ?> Questão</h2>
        </div>
        <form method="post" action="/questao/save">
            <input type="hidden" name="id" value="<?= $model->id ?>">
            <div class="form-group">
                <label for="enunciado">Enunciado</label>
                <textarea id="enunciado" name="enunciado"><?= $model->enunciado ?></textarea>
            </div>
            <div class="form-group">
                <label for="alternativa-a">Alternativa A</label>
                <input type="text" id="alternativa-a" name="alternativa-a" value="<?= $model->alternativa_a ?>">
            </div>
            <div class="form-group">
                <label for="alternativa-b">Alternativa B</label>
                <input type="text" id="alternativa-b" name="alternativa-b" value="<?= $model->alternativa_b ?>">
            </div>
            <div class="form-group">
                <label for="alternativa-c">Alternativa C</label>
                <input type="text" id="alternativa-c" name="alternativa-c" value="<?= $model->alternativa_c ?>">
            </div>
            <div class="form-group">
                <label for="alternativa-d">Alternativa D</label>
                <input type="text" id="alternativa-d" name="alternativa-d" value="<?= $model->alternativa_d ?>">
            </div>
            <div class="form-group">
                <label for="alternativa-correta">Alternativa Correta</label>
                <select id="alternativa-correta" name="alternativa-correta">
                    <option value="a" <?= $model->alternativa_correta == 'a' ? 'selected' : '' ?>>Alternativa A</option>
                    <option value="b" <?= $model->alternativa_correta == 'b' ? 'selected' : '' ?>>Alternativa B</option>
                    <option value="c" <?= $model->alternativa_correta == 'c' ? 'selected' : '' ?>>Alternativa C</option>
                    <option value="d" <?= $model->alternativa_correta == 'd' ? 'selected' : '' ?>>Alternativa D</option>
                </select>
            </div>
            <div class="form-actions">
                <a href="/adm" class="cancel-button">Cancelar</a>
                <button type="submit" class="save-button">Salvar</button>
            </div>
        </form>
    </div>
</body>

</html>