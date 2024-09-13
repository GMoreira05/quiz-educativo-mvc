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
        .form-group textarea {
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
        <form>
            <div class="form-group">
                <label for="question">Enunciado</label>
                <textarea id="question" name="question">Qual a capital do Brasil?</textarea>
            </div>
            <div class="form-group">
                <label for="option-a">Alternativa A</label>
                <input type="text" id="option-a" name="option-a" value="Rio de Janeiro">
            </div>
            <div class="form-group">
                <label for="option-b">Alternativa B</label>
                <input type="text" id="option-b" name="option-b" value="São Paulo">
            </div>
            <div class="form-group">
                <label for="option-c">Alternativa C</label>
                <input type="text" id="option-c" name="option-c" value="Brasília">
            </div>
            <div class="form-group">
                <label for="option-d">Alternativa D</label>
                <input type="text" id="option-d" name="option-d" value="Indonésia">
            </div>
            <div class="form-actions">
                <a href="/adm" class="cancel-button">Cancelar</a>
                <button type="submit" class="save-button">Salvar</button>
            </div>
        </form>
    </div>
</body>

</html>