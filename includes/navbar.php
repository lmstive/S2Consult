<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="assets/images/logo.png" alt="S2 Consultoria" height="60" class="d-inline-block align-top">
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage == 'home') ? 'active' : ''; ?>" href="index.php">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage == 'sobre') ? 'active' : ''; ?>" href="sobre.php">Sobre Nós</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage == 'servicos') ? 'active' : ''; ?>" href="servicos.php">Serviços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage == 'instrutores') ? 'active' : ''; ?>" href="instrutores.php">Instrutores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage == 'contato') ? 'active' : ''; ?>" href="contato.php">Contato</a>
                </li>
            </ul>
            <div class="d-flex align-items-center ms-lg-4">
                <a href="contato.php" class="btn btn-primary rounded-pill px-4">Solicitar Orçamento</a>
            </div>
        </div>
    </div>
</nav>