<?php
// Definição do título da página
$pageTitle = "Serviços | S2 Consultoria e Treinamento";
// Inclusão do cabeçalho
include_once 'includes/header.php';
?>

<!-- Hero Section para Serviços -->
<section class="hero-section-small">
    <div class="container text-center">
        <h1 class="display-4 fw-bold mb-4">Nossos Serviços</h1>
        <p class="lead">Conheça os treinamentos e consultorias que oferecemos para garantir a segurança no seu ambiente de trabalho</p>
    </div>
</section>

<!-- Descrição dos Serviços -->
<section class="py-5" id="services-content">
    <div class="container py-4">
        <!-- Introdução -->
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-title">Treinamentos Especializados</h2>
                <p>Na S2 Consultoria, oferecemos treinamentos regulamentados pelas principais Normas Regulamentadoras (NRs) do Ministério do Trabalho. Todos os nossos cursos são ministrados por profissionais qualificados e certificados.</p>
            </div>
        </div>

        <!-- NR 20 -->
        <div class="row align-items-center mb-5 py-4" id="nr20" data-aos="fade-up">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="assets/images/nr20.jpg" alt="NR 20" class="img-fluid rounded-3 shadow">
            </div>
            <div class="col-lg-6">
                <div class="service-detail">
                    <h3 class="mb-3">NR 20 – Segurança e Saúde no Trabalho com Inflamáveis e Combustíveis</h3>
                    <p>Este treinamento visa capacitar os profissionais que trabalham com inflamáveis e combustíveis, garantindo conhecimentos sobre medidas de controle e sistemas preventivos.</p>
                    <div class="service-features mt-4">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="d-flex">
                                    <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                    <p class="mb-0">Identificação de riscos</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex">
                                    <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                    <p class="mb-0">Controle de emergências</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex">
                                    <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                    <p class="mb-0">Práticas operacionais</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex">
                                    <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                    <p class="mb-0">Procedimentos de segurança</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="contato.php" class="btn btn-primary">Solicitar Proposta</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- NR 5 -->
        <div class="row align-items-center mb-5 py-4 flex-lg-row-reverse" id="nr5" data-aos="fade-up">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="assets/images/nr5.jpg" alt="NR 5" class="img-fluid rounded-3 shadow">
            </div>
            <div class="col-lg-6">
                <div class="service-detail">
                    <h3 class="mb-3">NR 5 – Comissão Interna de Prevenção de Acidentes (CIPA)</h3>
                    <p>Treinamento destinado aos membros da CIPA, fornecendo conhecimentos sobre prevenção de acidentes e doenças decorrentes do trabalho, de modo a tornar compatível o trabalho com a preservação da vida e a promoção da saúde do trabalhador.</p>
                    <div class="service-features mt-4">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="d-flex">
                                    <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                    <p class="mb-0">Estudo do ambiente de trabalho</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex">
                                    <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                    <p class="mb-0">Análise de riscos</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex">
                                    <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                    <p class="mb-0">Elaboração de mapas de risco</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex">
                                    <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                    <p class="mb-0">Metodologia de investigação</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="contato.php" class="btn btn-primary">Solicitar Proposta</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- NR 12 -->
        <div class="row align-items-center mb-5 py-4" id="nr12" data-aos="fade-up">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="assets/images/nr12.jpg" alt="NR 12" class="img-fluid rounded-3 shadow">
            </div>
            <div class="col-lg-6">
                <div class="service-detail">
                    <h3 class="mb-3">NR 12 – Segurança no Trabalho em Máquinas e Equipamentos</h3>
                    <p>Este treinamento aborda os princípios fundamentais e medidas de proteção para garantir a saúde e integridade física dos trabalhadores que operam máquinas e equipamentos.</p>
                    <div class="service-features mt-4">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="d-flex">
                                    <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                    <p class="mb-0">Operação segura</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex">
                                    <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                    <p class="mb-0">Instalação e dispositivos</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex">
                                    <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                    <p class="mb-0">Manutenção e inspeção</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex">
                                    <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                    <p class="mb-0">Proteções coletivas e individuais</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="contato.php" class="btn btn-primary">Solicitar Proposta</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- NR 31 -->
        <div class="row align-items-center mb-5 py-4 flex-lg-row-reverse" id="nr31" data-aos="fade-up">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="assets/images/nr31.jpg" alt="NR 31" class="img-fluid rounded-3 shadow">
            </div>
            <div class="col-lg-6">
                <div class="service-detail">
                    <h3 class="mb-3">NR 31 – Segurança no Trabalho na Agricultura, Pecuária, Silvicultura, Exploração Florestal e Aquicultura</h3>
                    <p>Treinamento voltado para atividades rurais, com foco na segurança e saúde no trabalho rural, estabelecendo os preceitos a serem observados na organização e no ambiente de trabalho.</p>
                    <div class="service-features mt-4">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="d-flex">
                                    <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                    <p class="mb-0">Uso de agrotóxicos</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex">
                                    <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                    <p class="mb-0">Operação de máquinas agrícolas</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex">
                                    <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                    <p class="mb-0">Organização das atividades</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex">
                                    <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                    <p class="mb-0">Medidas de proteção pessoal</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="contato.php" class="btn btn-primary">Solicitar Proposta</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- NR 11 -->
        <div class="row align-items-center py-4" id="nr11" data-aos="fade-up">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="assets/images/nr11.jpg" alt="NR 11" class="img-fluid rounded-3 shadow">
            </div>
            <div class="col-lg-6">
                <div class="service-detail">
                    <h3 class="mb-3">NR 11 – Operação de Equipamentos</h3>
                    <p>Este treinamento capacita os operadores para o manuseio seguro de equipamentos de transporte de materiais, como empilhadeiras, transpaleteiras, pás carregadeiras e mini pás carregadeiras.</p>
                    <div class="service-features mt-4">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="d-flex">
                                    <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                    <p class="mb-0">Operação de empilhadeiras</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex">
                                    <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                    <p class="mb-0">Operação de transpaleteiras</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex">
                                    <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                    <p class="mb-0">Operação de pás carregadeiras</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex">
                                    <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                    <p class="mb-0">Verificações de segurança</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="contato.php" class="btn btn-primary">Solicitar Proposta</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Serviços Adicionais -->
<section class="py-5 bg-light" id="additional-services">
    <div class="container py-5">
        <h2 class="section-title text-center mb-5">Serviços Adicionais</h2>
        
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body p-4">
                        <div class="mb-4">
                            <i class="fas fa-clipboard-check text-primary" style="font-size: 2.5rem;"></i>
                        </div>
                        <h4 class="card-title mb-3">Assessoria em Segurança do Trabalho</h4>
                        <p class="card-text">Oferecemos assessoria completa para implementação e adequação às normas regulamentadoras, incluindo elaboração de documentos, análise de riscos e planos de ação.</p>
                        <a href="contato.php" class="btn btn-outline-primary mt-3">Saiba Mais</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body p-4">
                        <div class="mb-4">
                            <i class="fas fa-search text-primary" style="font-size: 2.5rem;"></i>
                        </div>
                        <h4 class="card-title mb-3">Laudos Técnicos</h4>
                        <p class="card-text">Elaboração de laudos técnicos como LTCAT, PPRA, PCMSO, AET, entre outros, para identificação e controle de riscos no ambiente de trabalho.</p>
                        <a href="contato.php" class="btn btn-outline-primary mt-3">Saiba Mais</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body p-4">
                        <div class="mb-4">
                            <i class="fas fa-users-cog text-primary" style="font-size: 2.5rem;"></i>
                        </div>
                        <h4 class="card-title mb-3">Treinamentos Personalizados</h4>
                        <p class="card-text">Desenvolvimento de treinamentos específicos, adaptados às necessidades da sua empresa, focados na realidade e nos desafios do seu ambiente de trabalho.</p>
                        <a href="contato.php" class="btn btn-outline-primary mt-3">Saiba Mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Seção de Depoimentos -->
<section class="py-5">
    <div class="container py-5">
        <h2 class="section-title text-center mb-5">O Que Nossos Clientes Dizem</h2>
        
        <div class="row">
            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow p-4">
                    <div class="d-flex mb-4">
                        <div class="flex-shrink-0">
                            <img src="assets/images/company-1.jpg" alt="Empresa" class="rounded-circle" width="80" height="80">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="mb-1">Indústria ABC</h5>
                            <p class="mb-0 text-muted">Setor Metalúrgico</p>
                            <div class="mt-1">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mb-0">"Os treinamentos da S2 Consultoria foram fundamentais para a implementação da nossa CIPA e para a adequação às normas de segurança em máquinas. A equipe é altamente qualificada e conseguiu transmitir o conteúdo de forma clara e objetiva para nossos colaboradores."</p>
                </div>
            </div>
            
            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow p-4">
                    <div class="d-flex mb-4">
                        <div class="flex-shrink-0">
                            <img src="assets/images/company-2.jpg" alt="Empresa" class="rounded-circle" width="80" height="80">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="mb-1">Cooperativa Agrícola XYZ</h5>
                            <p class="mb-0 text-muted">Setor Agrícola</p>
                            <div class="mt-1">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mb-0">"A assessoria da S2 Consultoria foi essencial para a adequação da nossa cooperativa à NR 31. A equipe demonstrou grande conhecimento e nos auxiliou em todo o processo, resultando em um ambiente de trabalho mais seguro e produtivo para nossos associados."</p>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-4">
            <a href="contato.php" class="btn btn-primary btn-lg">Solicite uma Proposta</a>
        </div>
    </div>
</section>

<?php
// Inclusão do rodapé
include_once 'includes/footer.php';
?>