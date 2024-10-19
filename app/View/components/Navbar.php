<div class="navbar">
    <div class="nav-group">
        <a href="/" class="nav-link">Home</a>
        <a href="/ranking" class="nav-link">Ranking</a>
    </div>
    <div class="nav-group">
        <?= isset($_SESSION['admin']) ? '<a href="/admin" class="nav-link">Admin</a>' : "" ?>
        <?= isset($_SESSION['usuario']) ? '<a href="/usuario/logout" class="nav-link">Logout</a>' : "" ?>

        <?= !isset($_SESSION['usuario']) ? '<a href="/usuario/login" class="nav-link">Login</a>' : "" ?>
        <?= !isset($_SESSION['usuario']) ? '<a href="/usuario/cadastro" class="nav-link">Cadastro</a>' : "" ?>
    </div>
</div>