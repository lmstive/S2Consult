<?php
$pageTitle = "S2 Consultoria e Treinamento em Segurança do Trabalho";
$currentPage = "home";
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Hero Section -->
<div class="hero-section">
    <div class="container">
        <div class="row align-items-center min-vh-75">
            <div class="col-lg-6 py-5">
                <h1 class="display-4 fw-bold text-primary animate__animated animate__fadeInUp">Segurança do Trabalho é com a S2 Consultoria</h1>
                <p class="lead mt-3 animate__animated animate__fadeInUp animate__delay-1s">
                    Especialistas em consultoria, assessoria e treinamentos regulamentados pelas Normas Regulamentadoras.
                </p>
                <div class="mt-4 animate__animated animate__fadeInUp animate__delay-2s">
                    <a href="servicos.php" class="btn btn-primary btn-lg me-2">Nossos Serviços</a>
                    <a href="contato.php" class="btn btn-outline-secondary btn-lg">Fale Conosco</a>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block animate__animated animate__fadeIn animate__delay-1s">
                <img src="assets/images/hero-image.jpg" alt="Segurança do Trabalho" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</div>

<!-- Serviços Destaque -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-primary">Nossos Serviços</h2>
            <p class="lead">Oferecemos treinamentos e assessoria especializada nas principais NRs</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 service-card shadow-sm border-0">
                    <div class="card-body text-center p-4">
                        <div class="icon-box mb-4">
                            <i class="bi bi-fire text-primary fs-1"></i>
                        </div>
                        <h3 class="card-title h5 fw-bold">NR 20</h3>
                        <p class="card-text">Segurança e Saúde no Trabalho com Inflamáveis e Combustíveis</p>
                        <a href="servicos.php#nr20" class="btn btn-sm btn-outline-primary mt-3">Saiba mais</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card h-100 service-card shadow-sm border-0">
                    <div class="card-body text-center p-4">
                        <div class="icon-box mb-4">
                            <i class="bi bi-people text-primary fs-1"></i>
                        </div>
                        <h3 class="card-title h5 fw-bold">NR 5</h3>
                        <p class="card-text">Comissão Interna de Prevenção de Acidentes (CIPA)</p>
                        <a href="servicos.php#nr5" class="btn btn-sm btn-outline-primary mt-3">Saiba mais</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card h-100 service-card shadow-sm border-0">
                    <div class="card-body text-center p-4">
                        <div class="icon-box mb-4">
                            <i class="bi bi-gear text-primary fs-1"></i>
                        </div>
                        <h3 class="card-title h5 fw-bold">NR 12</h3>
                        <p class="card-text">Segurança no Trabalho em Máquinas e Equipamentos</p>
                        <a href="servicos.php#nr12" class="btn btn-sm btn-outline-primary mt-3">Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="servicos.php" class="btn btn-primary">Ver todos os serviços</a>
        </div>
    </div>
</section>

<!-- Sobre Nós Resumo -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="assets/images/about-us.jpg" alt="Sobre a S2 Consultoria" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6">
                <h2 class="fw-bold text-primary">Sobre a S2 Consultoria</h2>
                <p class="lead">Somos especialistas em segurança do trabalho, dedicados a criar ambientes mais seguros.</p>
                <p>Na S2 Consultoria e Treinamento, nossa missão é proporcionar às empresas as ferramentas e conhecimentos necessários para garantir a segurança e saúde de seus colaboradores, em conformidade com as normas regulamentadoras.</p>
                <a href="sobre.php" class="btn btn-outline-primary mt-3">Conheça nossa história</a>
            </div>
        </div>
    </div>
</section>

<!-- Instrutores Destaque -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-primary">Nossos Instrutores</h2>
            <p class="lead">Profissionais qualificados e experientes</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 instructor-card shadow-sm border-0">
                    <div class="instructor-img-container">
                        <img src="assets/images/instructor-1.jpg" class="card-img-top" alt="Instrutor">
                    </div>
                    <div class="card-body text-center p-4">
                        <h3 class="card-title h5 fw-bold">Nome do Instrutor</h3>
                        <p class="text-muted">Especialista em NR 20 e NR 12</p>
                        <p class="card-text">Engenheiro de Segurança do Trabalho com mais de 10 anos de experiência.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 instructor-card shadow-sm border-0">
                    <div class="instructor-img-container">
                        <img src="assets/images/instructor-2.jpg" class="card-img-top" alt="Instrutor">
                    </div>
                    <div class="card-body text-center p-4">
                        <h3 class="card-title h5 fw-bold">Nome do Instrutor</h3>
                        <p class="text-muted">Especialista em NR 5 e NR 31</p>
                        <p class="card-text">Técnico de Segurança do Trabalho com experiência no setor agroindustrial.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 mx-auto">
                <div class="card h-100 instructor-card shadow-sm border-0">
                    <div class="instructor-img-container">
                        <img src="assets/images/instructor-3.jpg" class="card-img-top" alt="Instrutor">
                    </div>
                    <div class="card-body text-center p-4">
                        <h3 class="card-title h5 fw-bold">Nome do Instrutor</h3>
                        <p class="text-muted">Especialista em NR 11</p>
                        <p class="card-text">Instrutor certificado com ampla experiência em operação de equipamentos.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="instrutores.php" class="btn btn-primary">Conhecer todos os instrutores</a>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <h2 class="fw-bold">Pronto para tornar seu ambiente de trabalho mais seguro?</h2>
                <p class="lead mb-0">Entre em contato conosco para uma consultoria personalizada.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="contato.php" class="btn btn-light btn-lg">Fale Conosco</a>
            </div>
        </div>
    </div>
</section>

<!-- WhatsApp Button -->
<a href="https://wa.me/5500000000000" class="whatsapp-btn" target="_blank">
    <i class="bi bi-whatsapp"></i>
</a>

<?php include 'includes/footer.php'; ?>