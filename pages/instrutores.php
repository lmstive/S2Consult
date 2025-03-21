<?php
// Definição do título da página
$pageTitle = "Instrutores | S2 Consultoria e Treinamento";
// Inclusão do cabeçalho
include_once 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero-section-small">
    <div class="container text-center">
        <h1 class="display-4 fw-bold mb-4">Nossos Instrutores</h1>
        <p class="lead">Conheça a equipe de profissionais que conduzem nossos treinamentos com excelência</p>
    </div>
</section>

<!-- Instrutores Conteúdo -->
<section class="py-5" id="instructors-content">
    <div class="container py-5">
        <!-- Introdução -->
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-title">Equipe Especializada</h2>
                <p>Nossa equipe é formada por profissionais altamente qualificados, com vasta experiência prática e sólida formação acadêmica na área de segurança do trabalho. Todos os nossos instrutores possuem certificações e atualizações constantes nas normas regulamentadoras.</p>
            </div>
        </div>

        <!-- Instrutores Cards -->
        <div class="row">
            <!-- Instrutor 1 -->
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="instructor-card">
                    <img src="assets/images/instructor-1.jpg" alt="Paulo Silva">
                    <div class="p-4">
                        <h4 class="fw-bold">Paulo Silva</h4>
                        <p class="text-primary mb-2">Especialista em NR 20</p>
                        <p class="mb-3">Engenheiro de Segurança do Trabalho com mais de 15 anos de experiência em indústrias químicas e petroquímicas.</p>
                        
                        <div class="mt-3">
                            <h6 class="fw-bold">Especialidades:</h6>
                            <div class="d-flex flex-wrap mt-2">
                                <span class="badge bg-primary me-2 mb-2">NR 20</span>
                                <span class="badge bg-primary me-2 mb-2">NR 12</span>
                                <span class="badge bg-primary me-2 mb-2">Gestão de Riscos</span>
                            </div>
                        </div>
                        
                        <div class="mt-3">
                            <h6 class="fw-bold">Certificações:</h6>
                            <ul class="list-unstyled mt-2">
                                <li class="mb-1">• Engenheiro de Segurança do Trabalho</li>
                                <li class="mb-1">• Técnico em Segurança do Trabalho</li>
                                <li>• ISO 45001 Lead Auditor</li>
                            </ul>
                        </div>
                        
                        <div class="d-flex justify-content-center mt-4">
                            <a href="#" class="mx-2 text-secondary"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="mx-2 text-secondary"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Instrutor 2 -->
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="instructor-card">
                    <img src="assets/images/instructor-2.jpg" alt="Ana Oliveira">
                    <div class="p-4">
                        <h4 class="fw-bold">Ana Oliveira</h4>
                        <p class="text-primary mb-2">Especialista em NR 5 e NR 12</p>
                        <p class="mb-3">Técnica em Segurança do Trabalho com certificação internacional e ampla experiência em implementação de CIPA.</p>
                        
                        <div class="mt-3">
                            <h6 class="fw-bold">Especialidades:</h6>
                            <div class="d-flex flex-wrap mt-2">
                                <span class="badge bg-primary me-2 mb-2">NR 5</span>
                                <span class="badge bg-primary me-2 mb-2">NR 12</span>
                                <span class="badge bg-primary me-2 mb-2">Análise de Riscos</span>
                            </div>
                        </div>
                        
                        <div class="mt-3">
                            <h6 class="fw-bold">Certificações:</h6>
                            <ul class="list-unstyled mt-2">
                                <li class="mb-1">• Técnica em Segurança do Trabalho</li>
                                <li class="mb-1">• Especialista em Ergonomia</li>
                                <li>• NEBOSH International Certificate</li>
                            </ul>
                        </div>
                        
                        <div class="d-flex justify-content-center mt-4">
                            <a href="#" class="mx-2 text-secondary"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="mx-2 text-secondary"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Instrutor 3 -->
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="instructor-card">
                    <img src="assets/images/instructor-3.jpg" alt="Carlos Santos">
                    <div class="p-4">
                        <h4 class="fw-bold">Carlos Santos</h4>
                        <p class="text-primary mb-2">Especialista em NR 11 e NR 31</p>
                        <p class="mb-3">Engenheiro Mecânico com especialização em equipamentos industriais e agrícolas.</p>
                        
                        <div class="mt-3">
                            <h6 class="fw-bold">Especialidades:</h6>
                            <div class="d-flex flex-wrap mt-2">
                                <span class="badge bg-primary me-2 mb-2">NR 11</span>
                                <span class="badge bg-primary me-2 mb-2">NR 31</span>
                                <span class="badge bg-primary me-2 mb-2">Operação de Equipamentos</span>
                            </div>
                        </div>
                        
                        <div class="mt-3">
                            <h6 class="fw-bold">Certificações:</h6>
                            <ul class="list-unstyled mt-2">
                                <li class="mb-1">• Engenheiro Mecânico</li>
                                <li class="mb-1">• Instrutor de Operação de Máquinas</li>
                                <li>• Especialista em NR 31</li>
                            </ul>
                        </div>
                        
                        <div class="d-flex justify-content-center mt-4">
                            <a href="#" class="mx-2 text-secondary"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="mx-2 text-secondary"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Instrutor 4 -->
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="instructor-card">
                    <img src="assets/images/instructor-4.jpg" alt="Márcia Lima">
                    <div class="p-4">
                        <h4 class="fw-bold">Márcia Lima</h4>
                        <p class="text-primary mb-2">Especialista em Ergonomia</p>
                        <p class="mb-3">Fisioterapeuta do Trabalho com ampla experiência em análises ergonômicas e prevenção de doenças ocupacionais.</p>
                        
                        <div class="mt-3">
                            <h6 class="fw-bold">Especialidades:</h6>
                            <div class="d-flex flex-wrap mt-2">
                                <span class="badge bg-primary me-2 mb-2">NR 17</span>
                                <span class="badge bg-primary me-2 mb-2">Ergonomia</span>
                                <span class="badge bg-primary me-2 mb-2">Ginástica Laboral</span>
                            </div>
                        </div>
                        
                        <div class="mt-3">
                            <h6 class="fw-bold">Certificações:</h6>
                            <ul class="list-unstyled mt-2">
                                <li class="mb-1">• Fisioterapeuta</li>
                                <li class="mb-1">• Especialista em Ergonomia</li>
                                <li>• Mestre em Saúde do Trabalhador</li>
                            </ul>
                        </div>
                        
                        <div class="d-flex justify-content-center mt-4">
                            <a href="#" class="mx-2 text-secondary"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="mx-2 text-secondary"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Instrutor 5 -->
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                <div class="instructor-card">
                    <img src="assets/images/instructor-5.jpg" alt="Roberto Almeida">
                    <div class="p-4">
                        <h4 class="fw-bold">Roberto Almeida</h4>
                        <p class="text-primary mb-2">Especialista em NR 10</p>
                        <p class="mb-3">Engenheiro Eletricista com mais de 20 anos de experiência em segurança em instalações elétricas.</p>
                        
                        <div class="mt-3">
                            <h6 class="fw-bold">Especialidades:</h6>
                            <div class="d-flex flex-wrap mt-2">
                                <span class="badge bg-primary me-2 mb-2">NR 10</span>
                                <span class="badge bg-primary me-2 mb-2">SEP</span>
                                <span class="badge bg-primary me-2 mb-2">Laudos Elétricos</span>
                            </div>
                        </div>
                        
                        <div class="mt-3">
                            <h6 class="fw-bold">Certificações:</h6>
                            <ul class="list-unstyled mt-2">
                                <li class="mb-1">• Engenheiro Eletricista</li>
                                <li class="mb-1">• Especialista em NR 10</li>
                                <li>• Perito em Instalações Elétricas</li>
                            </ul>
                        </div>
                        
                        <div class="d-flex justify-content-center mt-4">
                            <a href="#" class="mx-2 text-secondary"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="mx-2 text-secondary"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Instrutor 6 -->
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                <div class="instructor-card">
                    <img src="assets/images/instructor-6.jpg" alt="Juliana Ferreira">
                    <div class="p-4">
                        <h4 class="fw-bold">Juliana Ferreira</h4>
                        <p class="text-primary mb-2">Especialista em Primeiros Socorros</p>
                        <p class="mb-3">Enfermeira do Trabalho com experiência em treinamentos de primeiros socorros e brigada de incêndio.</p>
                        
                        <div class="mt-3">
                            <h6 class="fw-bold">Especialidades:</h6>
                            <div class="d-flex flex-wrap mt-2">
                                <span class="badge bg-primary me-2 mb-2">Primeiros Socorros</span>
                                <span class="badge bg-primary me-2 mb-2">NR 23</span>
                                <span class="badge bg-primary me-2 mb-2">Brigada de Incêndio</span>
                            </div>
                        </div>
                        
                        <div class="mt-3">
                            <h6 class="fw-bold">Certificações:</h6>
                            <ul class="list-unstyled mt-2">
                                <li class="mb-1">• Enfermeira do Trabalho</li>
                                <li class="mb-1">• Instrutora de Primeiros Socorros</li>
                                <li>• Bombeira Civil</li>
                            </ul>
                        </div>
                        
                        <div class="d-flex justify-content-center mt-4">
                            <a href="#" class="mx-2 text-secondary"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="mx-2 text-secondary"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Depoimentos -->
<section class="py-5 bg-light">
    <div class="container py-5">
        <h2 class="section-title text-center">O Que Dizem Sobre Nossos Instrutores</h2>
        <p class="text-center mb-5">Depoimentos de alunos e empresas que participaram de nossos treinamentos</p>
        
        <div class="row">
            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow p-4 h-100">
                    <div class="d-flex justify-content-center mb-3">
                        <i class="fas fa-quote-left text-primary fs-1"></i>
                    </div>
                    <p class="mb-4">Os instrutores da S2 Consultoria têm um conhecimento técnico impressionante e conseguem transmitir o conteúdo de forma clara e objetiva, facilitando muito o aprendizado.</p>
                    <div class="d-flex align-items-center mt-auto">
                        <div class="flex-shrink-0">
                            <img src="assets/images/testimonial-1.jpg" alt="Depoimento" class="rounded-circle" width="60" height="60">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="mb-0 fw-bold">Ricardo Gomes</h6>
                            <p class="mb-0 small">Gerente de Produção - Indústria ABC</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow p-4 h-100">
                    <div class="d-flex justify-content-center mb-3">
                        <i class="fas fa-quote-left text-primary fs-1"></i>
                    </div>
                    <p class="mb-4">A didática dos instrutores da S2 é excelente! Conseguem transformar assuntos complexos em algo fácil de entender e aplicar no dia a dia da empresa. Recomendo fortemente.</p>
                    <div class="d-flex align-items-center mt-auto">
                        <div class="flex-shrink-0">
                            <img src="assets/images/testimonial-2.jpg" alt="Depoimento" class="rounded-circle" width="60" height="60">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="mb-0 fw-bold">Amanda Souza</h6>
                            <p class="mb-0 small">Coordenadora de RH - Empresa XYZ</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card border-0 shadow p-4 h-100">
                    <div class="d-flex justify-content-center mb-3">
                        <i class="fas fa-quote-left text-primary fs-1"></i>
                    </div>
                    <p class="mb-4">O treinamento da NR 20 foi fundamental para nossa equipe. O instrutor Paulo demonstrou grande conhecimento prático e nos ajudou a implementar melhorias significativas em nossa planta.</p>
                    <div class="d-flex align-items-center mt-auto">
                        <div class="flex-shrink-0">
                            <img src="assets/images/testimonial-3.jpg" alt="Depoimento" class="rounded-circle" width="60" height="60">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="mb-0 fw-bold">Marcelo Vieira</h6>
                            <p class="mb-0 small">Supervisor de Segurança - Petroquímica LTDA</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5 bg-primary text-white">
    <div class="container py-4 text-center">
        <h2 class="mb-4">Quer conhecer melhor nossos treinamentos?</h2>
        <p class="lead mb-4">Entre em contato e solicite uma proposta personalizada para sua empresa.</p>
        <a href="contato.php" class="btn btn-light btn-lg px-4">Solicitar Proposta</a>
    </div>
</section>

<?php
// Inclusão do rodapé
include_once 'includes/footer.php';
?>