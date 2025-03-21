<?php
// Página de instrutores
include_once 'includes/header.php';
include_once 'includes/navbar.php';
?>

<main class="container my-5">
    <!-- Banner da página -->
    <div class="bg-light p-5 rounded mb-5 text-center">
        <h1>Nossos Instrutores</h1>
        <p class="lead">Conheça a equipe de especialistas que compartilham conhecimento e experiência</p>
    </div>
    
    <!-- Introdução -->
    <section class="mb-5">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card shadow">
                    <div class="card-body">
                        <p class="card-text">
                            A S2 Consultoria conta com uma equipe de instrutores altamente qualificados e experientes 
                            na área de segurança do trabalho. Nossos profissionais possuem formação especializada, 
                            certificações e vivência prática, garantindo treinamentos de excelência que combinam 
                            teoria e aplicação prática.
                        </p>
                        <p class="card-text">
                            Todos os nossos instrutores passam por capacitação contínua para se manterem atualizados 
                            sobre as mudanças nas normas regulamentadoras e as melhores práticas em segurança do trabalho, 
                            assegurando a qualidade e relevância dos treinamentos oferecidos.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Equipe de Instrutores -->
    <section id="equipe-instrutores" class="mb-5">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <h2 class="text-center mb-4">Equipe de Instrutores</h2>
                
                <!-- Instrutor 1 - Substituir com informações reais -->
                <div class="card shadow mb-4">
                    <div class="row g-0">
                        <div class="col-md-3 text-center py-4">
                            <i class="fas fa-user-circle fa-7x text-primary mb-3"></i>
                            <h3>Nome do Instrutor</h3>
                            <p class="badge bg-primary">Engenheiro de Segurança</p>
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <h4 class="card-title border-bottom pb-2">Especialidades</h4>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <ul>
                                            <li>NR-10 - Segurança em Instalações Elétricas</li>
                                            <li>NR-12 - Segurança no Trabalho com Máquinas</li>
                                            <li>NR-33 - Espaços Confinados</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul>
                                            <li>NR-35 - Trabalho em Altura</li>
                                            <li>Análise Preliminar de Riscos (APR)</li>
                                            <li>Investigação de Acidentes</li>
                                        </ul>
                                    </div>
                                </div>
                                <h4 class="card-title border-bottom pb-2">Formação e Experiência</h4>
                                <p class="card-text">
                                    Engenheiro de Segurança do Trabalho com mais de 10 anos de experiência em 
                                    indústrias de grande porte. Especialista em gestão de riscos e prevenção de 
                                    acidentes, com certificações nacionais e internacionais. Já capacitou mais 
                                    de 3.000 profissionais em diversos segmentos industriais.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Instrutor 2 - Substituir com informações reais -->
                <div class="card shadow mb-4">
                    <div class="row g-0">
                        <div class="col-md-3 text-center py-4">
                            <i class="fas fa-user-circle fa-7x text-primary mb-3"></i>
                            <h3>Nome do Instrutor</h3>
                            <p class="badge bg-success">Técnico em Segurança</p>
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <h4 class="card-title border-bottom pb-2">Especialidades</h4>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <ul>
                                            <li>NR-05 - CIPA</li>
                                            <li>NR-06 - Uso de EPIs</li>
                                            <li>NR-17 - Ergonomia</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul>
                                            <li>NR-18 - Segurança na Construção</li>
                                            <li>Primeiros Socorros</li>
                                            <li>Programas de Prevenção</li>
                                        </ul>
                                    </div>
                                </div>
                                <h4 class="card-title border-bottom pb-2">Formação e Experiência</h4>
                                <p class="card-text">
                                    Técnico em Segurança do Trabalho com formação complementar em Ergonomia. 
                                    Possui 8 anos de experiência em empresas de construção civil e indústria. 
                                    Especialista em identificação e controle de riscos, com abordagem prática 
                                    e dinâmica em seus treinamentos.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Instrutor 3 - Substituir com informações reais -->
                <div class="card shadow mb-4">
                    <div class="row g-0">
                        <div class="col-md-3 text-center py-4">
                            <i class="fas fa-user-circle fa-7x text-primary mb-3"></i>
                            <h3>Nome do Instrutor</h3>
                            <p class="badge bg-info">Médico do Trabalho</p>
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <h4 class="card-title border-bottom pb-2">Especialidades</h4>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <ul>
                                            <li>PCMSO</li>
                                            <li>Toxicologia Ocupacional</li>
                                            <li>Primeiros Socorros Avançados</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul>
                                            <li>Prevenção de Doenças Ocupacionais</li>
                                            <li>Saúde Mental no Trabalho</li>
                                            <li>Ergonomia Aplicada</li>
                                        </ul>
                                    </div>
                                </div>
                                <h4 class="card-title border-bottom pb-2">Formação e Experiência</h4>
                                <p class="card-text">
                                    Médico com especialização em Medicina do Trabalho e mestrado em Saúde Ocupacional. 
                                    Atua há 12 anos no desenvolvimento e implementação de programas de controle médico 
                                    e saúde ocupacional. Experiência em diversos setores, incluindo indústria, saúde e serviços.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Metodologia de Treinamento -->
    <section id="metodologia" class="mb-5">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <h2 class="text-center mb-4">Nossa Metodologia de Treinamento</h2>
                
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text-center mb-4">
                                    <i class="fas fa-chalkboard-teacher fa-4x text-primary mb-3"></i>
                                    <h4>Abordagem Teórico-Prática</h4>
                                    <p>
                                        Combinamos conteúdo teórico com atividades práticas para 
                                        garantir a efetiva assimilação do conhecimento. Utilizamos 
                                        estudos de caso, simulações e exercícios práticos.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text-center mb-4">
                                    <i class="fas fa-users fa-4x text-primary mb-3"></i>
                                    <h4>Treinamentos Personalizados</h4>
                                    <p>
                                        Adaptamos nossos programas de treinamento às necessidades 
                                        específicas de cada empresa, considerando seus riscos, 
                                        processos e cultura organizacional.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text-center mb-4">
                                    <i class="fas fa-tools fa-4x text-primary mb-3"></i>
                                    <h4>Recursos Didáticos Modernos</h4>
                                    <p>
                                        Utilizamos tecnologias educacionais avançadas, incluindo 
                                        recursos audiovisuais, realidade virtual e plataformas 
                                        interativas para enriquecer a experiência de aprendizado.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text-center mb-4">
                                    <i class="fas fa-chart-line fa-4x text-primary mb-3"></i>
                                    <h4>Avaliação e Acompanhamento</h4>
                                    <p>
                                        Realizamos avaliações contínuas para medir a eficácia dos 
                                        treinamentos e o nível de aprendizado dos participantes, 
                                        oferecendo feedback e reforço quando necessário.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Depoimentos de Clientes -->
    <section id="depoimentos" class="mb-5">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <h2 class="text-center mb-4">O que Nossos Clientes Dizem</h2>
                
                <div class="row">
                    <!-- Depoimento 1 -->
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow">
                            <div class="card-body">
                                <div class="text-warning mb-3">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class="card-text fst-italic">
                                    "Os treinamentos ministrados pelos instrutores da S2 Consultoria 
                                    transformaram a cultura de segurança da nossa empresa. Material 
                                    didático excelente e professores muito capacitados."
                                </p>
                            </div>
                            <div class="card-footer bg-primary text-white">
                                <strong>João Silva</strong> - Gerente de Segurança, Empresa ABC
                            </div>
                        </div>
                    </div>
                    
                    <!-- Depoimento 2 -->
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow">
                            <div class="card-body">
                                <div class="text-warning mb-3">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class="card-text fst-italic">
                                    "A metodologia prática utilizada nos treinamentos da S2 fez toda 
                                    a diferença para nossa equipe. Conseguimos aplicar imediatamente 
                                    o conhecimento adquirido no dia a dia da empresa."
                                </p>
                            </div>
                            <div class="card-footer bg-primary text-white">
                                <strong>Maria Oliveira</strong> - Coordenadora de RH, Empresa XYZ
                            </div>
                        </div>
                    </div>
                    
                    <!-- Depoimento 3 -->
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow">
                            <div class="card-body">
                                <div class="text-warning mb-3">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <p class="card-text fst-italic">
                                    "Profissionais extremamente qualificados, com vasto conhecimento 
                                    teórico e prático. Os treinamentos são dinâmicos e envolventes, 
                                    mantendo o interesse dos participantes do início ao fim."
                                </p>
                            </div>
                            <div class="card-footer bg-primary text-white">
                                <strong>Carlos Fernandes</strong> - Diretor, Empresa 123
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA para Contato -->
    <section class="text-center mb-5">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card bg-primary text-white shadow">
                    <div class="card-body p-5">
                        <h3 class="mb-3">Interessado em nossos treinamentos?</h3>
                        <p class="lead mb-4">Entre em contato para saber mais sobre nossa agenda de treinamentos ou para solicitar um treinamento personalizado para sua empresa.</p>
                        <a href="contato.php" class="btn btn-light btn-lg">Solicitar Treinamento</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
include_once 'includes/footer.php';
?>