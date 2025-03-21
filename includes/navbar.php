<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="index.php">
            <!-- Substituir pelo logo real ou usar texto -->
            <span class="h4 text-primary fw-bold">S2 Consultoria</span>
        </a>
        
        <!-- Botão Toggler para Mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Links de Navegação -->
        <div class="collapse navbar-collapse" id="navbarMain">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>" href="index.php">Início</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'sobre.php') ? 'active' : ''; ?>" href="sobre.php">Sobre Nós</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'servicos.php') ? 'active' : ''; ?>" href="servicos.php">Serviços</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'instrutores.php') ? 'active' : ''; ?>" href="instrutores.php">Instrutores</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'contato.php') ? 'active' : ''; ?>" href="contato.php">Contato</a>
                </li>
                
                <!-- Botão de Destaque para Orçamento -->
                <li class="nav-item ms-lg-3">
                    <a class="btn btn-primary" href="contato.php">Solicitar Orçamento</a>
                </li>
            </ul>
        </div>
    </div>
</nav>