<?php
// Definição do título da página
$pageTitle = "Sobre Nós | S2 Consultoria e Treinamento";
// Inclusão do cabeçalho
include_once 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero-section-small">
    <div class="container text-center">
        <h1 class="display-4 fw-bold mb-4">Sobre Nós</h1>
        <p class="lead">Conheça a S2 Consultoria e nossa trajetória na área de segurança do trabalho</p>
    </div>
</section>

<!-- Sobre Nós Conteúdo -->
<section class="py-5" id="about-content">
    <div class="container py-5">
        <!-- História da Empresa -->
        <div class="row mb-5">
            <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                <img src="assets/images/about-history.jpg" alt="História da S2 Consultoria" class="img-fluid rounded-3 shadow">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="section-title text-start mb-4">Nossa História</h2>
                <p>A S2 Consultoria e Treinamento nasceu da visão de um grupo de profissionais experientes em segurança do trabalho que identificaram a necessidade de serviços especializados e personalizados no mercado.</p>
                <p>Fundada em 2015, nossa empresa tem como objetivo principal promover a cultura de segurança e saúde no trabalho, contribuindo para ambientes mais seguros e produtivos em diversos setores da economia.</p>
                <p>Ao longo dos anos, conquistamos a confiança de nossos clientes através de um trabalho sério, comprometido e baseado nas melhores práticas do mercado, sempre em conformidade com as normas regulamentadoras vigentes.</p>
            </div>
        </div>

        <!-- Missão, Visão e Valores -->
        <div class="row my-5">
            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="about-feature text-center">
                    <div class="about-feature-icon mx-auto">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3 class="h4 mb-3">Missão</h3>
                    <p>Promover a cultura de segurança e saúde no trabalho através de serviços de consultoria e treinamentos de excelência, contribuindo para a redução de acidentes e doenças ocupacionais nas organizações.</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="about-feature text-center">
                    <div class="about-feature-icon mx-auto">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3 class="h4 mb-3">Visão</h3>
                    <p>Ser reconhecida como referência nacional em consultoria e treinamentos em segurança do trabalho, destacando-se pela qualidade, inovação e compromisso com os resultados de nossos clientes.</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="about-feature text-center">
                    <div class="about-feature-icon mx-auto">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3 class="h4 mb-3">Valores</h3>
                    <p>Ética, comprometimento, excelência, valorização das pessoas, inovação e responsabilidade social são os princípios que norteiam nossas ações e decisões no dia a dia.</p>
                </div>
            </div>
        </div>

        <!-- Diferenciais -->
        <div class="row mt-5">
            <div class="col-12 text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Nossos Diferenciais</h2>
                <p class="lead">O que nos torna uma referência no mercado</p>
            </div>

            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="d-flex">
                    <div class="me-4">
                        <div class="about-feature-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                    </div>
                    <div>
                        <h4 class="mb-3">Equipe Especializada</h4>
                        <p>Contamos com profissionais altamente qualificados e constantemente atualizados, prontos para atender às mais diversas demandas em segurança do trabalho.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="d-flex">
                    <div class="me-4">
                        <div class="about-feature-icon">
                            <i class="fas fa-clipboard-check"></i>
                        </div>
                    </div>
                    <div>
                        <h4 class="mb-3">Metodologia Prática</h4>
                        <p>Nossos treinamentos são desenvolvidos com foco na aplicação prática dos conhecimentos, facilitando o aprendizado e a implementação das normas no dia a dia.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="d-flex">
                    <div class="me-4">
                        <div class="about-feature-icon">
                            <i class="fas fa-industry"></i>
                        </div>
                    </div>
                    <div>
                        <h4 class="mb-3">Soluções Personalizadas</h4>
                        <p>Desenvolvemos projetos sob medida para cada cliente, considerando suas necessidades específicas e as particularidades de cada setor e ambiente de trabalho.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="d-flex">
                    <div class="me-4">
                        <div class="about-feature-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                    </div>
                    <div>
                        <h4 class="mb-3">Suporte Contínuo</h4>
                        <p>Oferecemos acompanhamento contínuo aos nossos clientes, garantindo a correta implementação das normas e a manutenção da cultura de segurança no longo prazo.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5 bg-primary text-white">
    <div class="container py-4 text-center">
        <h2 class="mb-4">Pronto para garantir a segurança no seu ambiente de trabalho?</h2>
        <p class="lead mb-4">Entre em contato conosco e descubra como podemos ajudar sua empresa.</p>
        <a href="contato.php" class="btn btn-light btn-lg px-4">Fale Conosco</a>
    </div>
</section>

<?php
// Inclusão do rodapé
include_once 'includes/footer.php';
?>