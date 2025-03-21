<?php
// Página principal do site
include_once 'includes/header.php';
include_once 'includes/navbar.php';
?>

<main>
    <!-- Banner Principal / Hero Section -->
    <section id="hero" class="bg-primary text-white text-center py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h1 class="display-4">S2 Consultoria em Segurança do Trabalho</h1>
                    <p class="lead mb-4">Protegendo o que é mais importante: a saúde e segurança dos seus colaboradores</p>
                    <a href="contato.php" class="btn btn-light btn-lg">Solicite uma Avaliação</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção de Serviços Destaques -->
    <section id="servicos-destaque" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Nossos Serviços</h2>
            
            <div class="row">
                <!-- Serviço 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-file-alt fa-3x mb-3 text-primary"></i>
                            <h3 class="card-title">PPRA</h3>
                            <p class="card-text">Programa de Prevenção de Riscos Ambientais para identificar e controlar riscos no ambiente de trabalho.</p>
                            <a href="servicos.php#ppra" class="btn btn-outline-primary">Saiba mais</a>
                        </div>
                    </div>
                </div>
                
                <!-- Serviço 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-heartbeat fa-3x mb-3 text-primary"></i>
                            <h3 class="card-title">PCMSO</h3>
                            <p class="card-text">Programa de Controle Médico de Saúde Ocupacional para promover a saúde de seus colaboradores.</p>
                            <a href="servicos.php#pcmso" class="btn btn-outline-primary">Saiba mais</a>
                        </div>
                    </div>
                </div>
                
                <!-- Serviço 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-hard-hat fa-3x mb-3 text-primary"></i>
                            <h3 class="card-title">Treinamentos</h3>
                            <p class="card-text">Treinamentos especializados em segurança do trabalho para capacitar sua equipe.</p>
                            <a href="servicos.php#treinamentos" class="btn btn-outline-primary">Saiba mais</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-4">
                <a href="servicos.php" class="btn btn-primary">Ver Todos os Serviços</a>
            </div>
        </div>
    </section>

    <!-- Seção Por que Escolher a S2 -->
    <section id="diferenciais" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Por que Escolher a S2 Consultoria?</h2>
            
            <div class="row">
                <!-- Diferencial 1 -->
                <div class="col-md-4 mb-4">
                    <div class="text-center">
                        <i class="fas fa-certificate fa-3x mb-3 text-primary"></i>
                        <h4>Equipe Especializada</h4>
                        <p>Profissionais altamente qualificados e experientes na área de segurança do trabalho.</p>
                    </div>
                </div>
                
                <!-- Diferencial 2 -->
                <div class="col-md-4 mb-4">
                    <div class="text-center">
                        <i class="fas fa-tachometer-alt fa-3x mb-3 text-primary"></i>
                        <h4>Soluções Personalizadas</h4>
                        <p>Adaptamos nossos serviços às necessidades específicas da sua empresa.</p>
                    </div>
                </div>
                
                <!-- Diferencial 3 -->
                <div class="col-md-4 mb-4">
                    <div class="text-center">
                        <i class="fas fa-headset fa-3x mb-3 text-primary"></i>
                        <h4>Suporte Contínuo</h4>
                        <p>Acompanhamento e assessoria permanente para garantir a implementação efetiva das soluções.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção de Chamada para Ação -->
    <section id="cta" class="py-5 bg-primary text-white text-center">
        <div class="container">
            <h2 class="mb-3">Pronto para tornar sua empresa mais segura?</h2>
            <p class="lead mb-4">Entre em contato conosco e descubra como podemos ajudar sua empresa a cumprir as normas de segurança e promover bem-estar.</p>
            <a href="contato.php" class="btn btn-light btn-lg">Fale Conosco</a>
        </div>
    </section>
</main>

<?php
include_once 'includes/footer.php';
?>