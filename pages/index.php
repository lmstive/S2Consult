<?php
// Definição do título da página
$pageTitle = "S2 Consultoria e Treinamento em Segurança do Trabalho";
// Inclusão do cabeçalho
include_once 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero-section" id="home">
    <div class="container text-center">
        <div data-aos="fade-up" data-aos-duration="1000">
            <h1 class="display-4 fw-bold mb-4">S2 Consultoria e Treinamento</h1>
            <h2 class="h3 mb-5">Especialistas em Segurança do Trabalho</h2>
            <p class="lead mb-5">Oferecemos soluções completas em assessoria e treinamentos regulamentados para garantir a segurança e conformidade do seu ambiente de trabalho.</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="servicos.php" class="btn btn-primary btn-lg px-4 py-3">Nossos Serviços</a>
                <a href="contato.php" class="btn btn-outline-light btn-lg px-4 py-3">Entre em Contato</a>
            </div>
        </div>
    </div>
</section>

<!-- About Section Preview -->
<section class="py-5" id="about">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                <img src="assets/images/about-preview.jpg" alt="Sobre a S2 Consultoria" class="img-fluid rounded-3 shadow">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="section-title text-start mb-4">Sobre a S2 Consultoria</h2>
                <p class="lead">Somos especialistas em segurança do trabalho, oferecendo serviços de consultoria e treinamentos de alta qualidade há mais de 10 anos.</p>
                <p>Nossa equipe é formada por profissionais experientes e certificados, prontos para atender às necessidades específicas de cada cliente, sempre com foco na excelência e na conformidade com as normas regulamentadoras.</p>
                <div class="row mt-4">
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="me-3">
                                <i class="fas fa-check-circle text-primary fs-4"></i>
                            </div>
                            <div>
                                <h5 class="mb-1">Missão</h5>
                                <p class="mb-0">Promover a cultura de segurança no trabalho.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="me-3">
                                <i class="fas fa-eye text-primary fs-4"></i>
                            </div>
                            <div>
                                <h5 class="mb-1">Visão</h5>
                                <p class="mb-0">Ser referência em segurança do trabalho.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="sobre.php" class="btn btn-primary mt-4">Saiba Mais</a>
            </div>
        </div>
    </div>
</section>

<!-- Services Section Preview -->
<section class="py-5 bg-light" id="services">
    <div class="container py-5">
        <h2 class="section-title text-center">Nossos Serviços</h2>
        <p class="text-center mb-5">Oferecemos treinamentos especializados em diversas normas regulamentadoras</p>
        
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card card border-0">
                    <img src="assets/images/nr20-preview.jpg" class="card-img-top" alt="NR 20">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">NR 20</h5>
                        <p class="card-text">Segurança e Saúde no Trabalho com Inflamáveis e Combustíveis</p>
                        <a href="servicos.php#nr20" class="btn btn-outline-primary">Saiba Mais</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card card border-0">
                    <img src="assets/images/nr5-preview.jpg" class="card-img-top" alt="NR 5">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">NR 5</h5>
                        <p class="card-text">Comissão Interna de Prevenção de Acidentes (CIPA)</p>
                        <a href="servicos.php#nr5" class="btn btn-outline-primary">Saiba Mais</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card card border-0">
                    <img src="assets/images/nr12-preview.jpg" class="card-img-top" alt="NR 12">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">NR 12</h5>
                        <p class="card-text">Segurança no Trabalho em Máquinas e Equipamentos</p>
                        <a href="servicos.php#nr12" class="btn btn-outline-primary">Saiba Mais</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-4">
            <a href="servicos.php" class="btn btn-primary">Ver Todos os Serviços</a>
        </div>
    </div>
</section>

<!-- Instructors Section Preview -->
<section class="py-5" id="instructors">
    <div class="container py-5">
        <h2 class="section-title text-center">Nossos Instrutores</h2>
        <p class="text-center mb-5">Conheça nossa equipe de profissionais especializados</p>
        
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="instructor-card">
                    <img src="assets/images/instructor-1.jpg" alt="Instrutor 1">
                    <div class="p-4">
                        <h5 class="fw-bold">Paulo Silva</h5>
                        <p class="text-primary mb-2">Especialista em NR 20</p>
                        <p class="mb-3">Engenheiro de Segurança do Trabalho com mais de 15 anos de experiência.</p>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="mx-2 text-secondary"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="mx-2 text-secondary"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="instructor-card">
                    <img src="assets/images/instructor-2.jpg" alt="Instrutor 2">
                    <div class="p-4">
                        <h5 class="fw-bold">Ana Oliveira</h5>
                        <p class="text-primary mb-2">Especialista em NR 5 e NR 12</p>
                        <p class="mb-3">Técnica em Segurança do Trabalho com certificação internacional.</p>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="mx-2 text-secondary"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="mx-2 text-secondary"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="instructor-card">
                    <img src="assets/images/instructor-3.jpg" alt="Instrutor 3">
                    <div class="p-4">
                        <h5 class="fw-bold">Carlos Santos</h5>
                        <p class="text-primary mb-2">Especialista em NR 11 e NR 31</p>
                        <p class="mb-3">Engenheiro Mecânico com especialização em equipamentos industriais.</p>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="mx-2 text-secondary"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="mx-2 text-secondary"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-4">
            <a href="instrutores.php" class="btn btn-primary">Conhecer Todos os Instrutores</a>
        </div>
    </div>
</section>

<!-- Contact Section Preview -->
<section class="py-5 bg-light" id="contact">
    <div class="container py-5">
        <h2 class="section-title text-center">Entre em Contato</h2>
        <p class="text-center mb-5">Estamos prontos para atender às suas necessidades</p>
        
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-info-box text-center">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h5 class="mb-3">Endereço</h5>
                    <p class="mb-0">Av. República, 1500, Centro</p>
                    <p>Cascavel, PR - CEP 85810-040</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="contact-info-box text-center">
                    <div class="contact-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <h5 class="mb-3">Telefone</h5>
                    <p class="mb-0">(45) 3223-0000</p>
                    <p>(45) 99999-9999</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="contact-info-box text-center">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h5 class="mb-3">E-mail</h5>
                    <p class="mb-0">contato@s2consultoria.com.br</p>
                    <p>comercial@s2consultoria.com.br</p>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-4">
            <a href="contato.php" class="btn btn-primary">Formulário de Contato</a>
        </div>
    </div>
</section>

<?php
// Inclusão do rodapé
include_once 'includes/footer.php';
?>