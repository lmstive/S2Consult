<?php
// Determinar a página atual
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <span class="fw-bold">S2</span> Consultoria
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>" href="index.php">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'sobre.php') ? 'active' : ''; ?>" href="sobre.php">Sobre Nós</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'servicos.php') ? 'active' : ''; ?>" href="servicos.php">Serviços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'instrutores.php') ? 'active' : ''; ?>" href="instrutores.php">Instrutores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'contato.php') ? 'active' : ''; ?>" href="contato.php">Contato</a>
                </li>
            </ul>
        </div>
    </div>
</nav>