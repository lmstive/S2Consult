<?php
// Definição do título da página
$pageTitle = "Contato | S2 Consultoria e Treinamento";
// Inclusão do cabeçalho
include_once 'includes/header.php';

// Processamento do formulário
$successMessage = "";
$errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se todos os campos obrigatórios foram preenchidos
    if (!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['telefone']) && !empty($_POST['mensagem'])) {
        
        // Sanitização dos dados
        $nome = htmlspecialchars($_POST['nome']);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $telefone = htmlspecialchars($_POST['telefone']);
        $empresa = htmlspecialchars($_POST['empresa']);
        $assunto = htmlspecialchars($_POST['assunto']);
        $mensagem = htmlspecialchars($_POST['mensagem']);
        
        // Validação do e-mail
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Destinatário
            $to = "contato@s2consultoria.com.br";
            
            // Assunto do e-mail
            $subject = "Formulário de Contato: " . $assunto;
            
            // Mensagem
            $message = "Nome: " . $nome . "\r\n";
            $message .= "E-mail: " . $email . "\r\n";
            $message .= "Telefone: " . $telefone . "\r\n";
            $message .= "Empresa: " . $empresa . "\r\n";
            $message .= "Assunto: " . $assunto . "\r\n\r\n";
            $message .= "Mensagem:\r\n" . $mensagem;
            
            // Headers
            $headers = "From: " . $email . "\r\n";
            $headers .= "Reply-To: " . $email . "\r\n";
            
            // Envio do e-mail
            if (mail($to, $subject, $message, $headers)) {
                $successMessage = "Mensagem enviada com sucesso! Em breve entraremos em contato.";
            } else {
                $errorMessage = "Erro ao enviar a mensagem. Por favor, tente novamente mais tarde.";
            }
        } else {
            $errorMessage = "Por favor, informe um e-mail válido.";
        }
    } else {
        $errorMessage = "Por favor, preencha todos os campos obrigatórios.";
    }
}
?>

<!-- Hero Section -->
<section class="hero-section-small">
    <div class="container text-center">
        <h1 class="display-4 fw-bold mb-4">Entre em Contato</h1>
        <p class="lead">Estamos prontos para atender às suas necessidades</p>
    </div>
</section>

<!-- Contato Conteúdo -->
<section class="py-5" id="contact-content">
    <div class="container py-5">
        <div class="row">
            <!-- Informações de Contato -->
            <div class="col-lg-5 mb-5 mb-lg-0" data-aos="fade-right">
                <h2 class="section-title text-start mb-4">Informações de Contato</h2>
                <p class="mb-5">Entre em contato conosco para solicitar uma proposta, tirar dúvidas ou agendar uma visita. Nossa equipe está pronta para atendê-lo.</p>
                
                <div class="d-flex mb-4">
                    <div class="me-3">
                        <div class="contact-icon bg-primary text-white rounded-circle p-3 d-inline-flex justify-content-center align-items-center" style="width: 60px; height: 60px;">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                    </div>
                    <div>
                        <h5 class="mb-2">Endereço</h5>
                        <p class="mb-0">Av. República, 1500, Centro</p>
                        <p>Cascavel, PR - CEP 85810-040</p>
                    </div>
                </div>
                
                <div class="d-flex mb-4">
                    <div class="me-3">
                        <div class="contact-icon bg-primary text-white rounded-circle p-3 d-inline-flex justify-content-center align-items-center" style="width: 60px; height: 60px;">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                    </div>
                    <div>
                        <h5 class="mb-2">Telefone</h5>
                        <p class="mb-0"><a href="tel:4532230000" class="text-decoration-none text-dark">(45) 3223-0000</a></p>
                        <p><a href="tel:45999999999" class="text-decoration-none text-dark">(45) 99999-9999</a></p>
                    </div>
                </div>
                
                <div class="d-flex mb-4">
                    <div class="me-3">
                        <div class="contact-icon bg-primary text-white rounded-circle p-3 d-inline-flex justify-content-center align-items-center" style="width: 60px; height: 60px;">
                            <i class="fas fa-envelope"></i>
                        </div>
                    </div>
                    <div>
                        <h5 class="mb-2">E-mail</h5>
                        <p class="mb-0"><a href="mailto:contato@s2consultoria.com.br" class="text-decoration-none text-dark">contato@s2consultoria.com.br</a></p>
                        <p><a href="mailto:comercial@s2consultoria.com.br" class="text-decoration-none text-dark">comercial@s2consultoria.com.br</a></p>
                    </div>
                </div>
                
                <div class="d-flex">
                    <div class="me-3">
                        <div class="contact-icon bg-primary text-white rounded-circle p-3 d-inline-flex justify-content-center align-items-center" style="width: 60px; height: 60px;">
                            <i class="fas fa-clock"></i>
                        </div>
                    </div>
                    <div>
                        <h5 class="mb-2">Horário de Atendimento</h5>
                        <p class="mb-0">Segunda - Sexta: 8:00 - 18:00</p>
                        <p>Sábado: 9:00 - 12:00</p>
                    </div>
                </div>
            </div>
            
            <!-- Formulário de Contato -->
            <div class="col-lg-7" data-aos="fade-left">
                <div class="contact-form">
                    <h2 class="section-title text-start mb-4">Envie uma Mensagem</h2>
                    
                    <?php if (!empty($successMessage)): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $successMessage; ?>
                        </div>
                    <?php endif; ?>
                    
                    <?php if (!empty($errorMessage)): ?>
                        <div class="alert alert-danger" role="alert" id="form-error">
                            <?php echo $errorMessage; ?>
                        </div>
                    <?php endif; ?>
                    
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="contact-form">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="nome" class="form-label">Nome Completo*</label>
                                <input type="text" class="form-control" id="nome" name="nome" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">E-mail*</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="telefone" class="form-label">Telefone*</label>
                                <input type="tel" class="form-control" id="telefone" name="telefone" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="empresa" class="form-label">Empresa</label>
                                <input type="text" class="form-control" id="empresa" name="empresa">
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="assunto" class="form-label">Assunto*</label>
                            <select class="form-select" id="assunto" name="assunto" required>
                                <option value="" selected disabled>Selecione um assunto</option>
                                <option value="Orçamento de Treinamento">Orçamento de Treinamento</option>
                                <option value="Consultoria">Consultoria</option>
                                <option value="Parceria">Parceria</option>
                                <option value="Dúvidas">Dúvidas</option>
                                <option value="Outros">Outros</option>
                            </select>
                        </div>
                        
                        <div class="mb-4">
                            <label for="mensagem" class="form-label">Mensagem*</label>
                            <textarea class="form-control" id="mensagem" name="mensagem" rows="5" required></textarea>
                        </div>
                        
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="termos" required>
                            <label class="form-check-label" for="termos">Concordo com a <a href="#">política de privacidade</a> e com o tratamento dos meus dados.*</label>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-lg">Enviar Mensagem</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mapa -->
<section class="py-5 bg-light">
    <div class="container py-4">
        <h2 class="section-title text-center mb-5">Nossa Localização</h2>
        <div class="ratio ratio-21x9 rounded shadow overflow-hidden">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14472.49691597401!2d-53.47030790000001!3d-24.94871905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f3d153b5d484d1%3A0x19e47bb386fbe3f0!2sCentro%2C%20Cascavel%20-%20PR!5e0!3m2!1spt-BR!2sbr!4v1711059338313!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

<!-- Perguntas Frequentes -->
<section class="py-5">
    <div class="container py-4">
        <h2 class="section-title text-center mb-5">Perguntas Frequentes</h2>
        
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="accordionFAQ">
                    <div class="accordion-item mb-3 border rounded-3 shadow-sm">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Quais são as NRs que vocês oferecem treinamento?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                Oferecemos treinamentos para diversas normas regulamentadoras, incluindo NR 5 (CIPA), NR 11 (Operação de Equipamentos), NR 12 (Segurança em Máquinas e Equipamentos), NR 20 (Inflamáveis e Combustíveis) e NR 31 (Segurança na Agricultura).
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item mb-3 border rounded-3 shadow-sm">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Os treinamentos podem ser realizados in company?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                Sim, todos os nossos treinamentos podem ser realizados nas instalações de sua empresa, adaptando-se à realidade e necessidades específicas do seu ambiente de trabalho.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item mb-3 border rounded-3 shadow-sm">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Qual é a duração média dos treinamentos?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                A duração dos treinamentos varia de acordo com a norma regulamentadora e o nível do curso (básico, intermediário ou avançado). Em geral, os cursos têm duração de 8 a 40 horas, conforme exigência de cada NR.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item mb-3 border rounded-3 shadow-sm">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Os certificados dos treinamentos são válidos em todo o território nacional?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                Sim, todos os nossos certificados são válidos em território nacional e atendem às exigências legais das normas regulamentadoras do Ministério do Trabalho.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border rounded-3 shadow-sm">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Qual o número mínimo e máximo de participantes por turma?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                O número mínimo de participantes por turma é de 5 pessoas, e o máximo varia de acordo com o tipo de treinamento. Para cursos teóricos, podemos atender até 30 pessoas por turma, enquanto para cursos práticos, limitamos a 15 participantes para garantir a qualidade do treinamento.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Inclusão do rodapé
include_once 'includes/footer.php';
?>