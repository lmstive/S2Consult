<?php
$pageTitle = "Contato | S2 Consultoria e Treinamento em Segurança do Trabalho";
$currentPage = "contato";
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Page Header -->
<section class="bg-primary text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="fw-bold">Entre em Contato</h1>
                <p class="lead">Estamos à disposição para ajudar sua empresa</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5">
                <h2 class="text-primary fw-bold">Como Podemos Ajudar?</h2>
                <p>Entre em contato conosco para solicitar um orçamento ou tirar dúvidas sobre nossos serviços.</p>
            </div>
        </div>

        <div class="row">
            <!-- Informações de Contato -->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="contact-info-box" data-aos="fade-up">
                    <div class="d-flex align-items-center mb-4">
                        <i class="bi bi-geo-alt-fill text-primary me-3 fs-3"></i>
                        <div>
                            <h4 class="h5 fw-bold text-primary">Endereço</h4>
                            <p class="mb-0">Endereço da empresa, Cidade - Estado, CEP</p>
                        </div>
                    </div>
                </div>

                <div class="contact-info-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="d-flex align-items-center mb-4">
                        <i class="bi bi-telephone-fill text-primary me-3 fs-3"></i>
                        <div>
                            <h4 class="h5 fw-bold text-primary">Telefone</h4>
                            <p class="mb-0">(00) 0000-0000</p>
                        </div>
                    </div>
                </div>

                <div class="contact-info-box" data-aos="fade-up" data-aos-delay="200">
                    <div class="d-flex align-items-center mb-4">
                        <i class="bi bi-whatsapp text-primary me-3 fs-3"></i>
                        <div>
                            <h4 class="h5 fw-bold text-primary">WhatsApp</h4>
                            <p class="mb-0">(00) 00000-0000</p>
                        </div>
                    </div>
                </div>

                <div class="contact-info-box" data-aos="fade-up" data-aos-delay="300">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-envelope-fill text-primary me-3 fs-3"></i>
                        <div>
                            <h4 class="h5 fw-bold text-primary">E-mail</h4>
                            <p class="mb-0">contato@s2consultoria.com.br</p>
                        </div>
                    </div>
                </div>
                
                <div class="mt-5">
                    <h4 class="h5 fw-bold text-primary mb-4">Redes Sociais</h4>
                    <div class="d-flex">
                        <a href="#" class="me-3 social-icon-alt" target="_blank"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="me-3 social-icon-alt" target="_blank"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="social-icon-alt" target="_blank"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Formulário de Contato -->
            <div class="col-lg-8" data-aos="fade-up">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4 p-lg-5">
                        <h3 class="card-title h4 fw-bold text-primary mb-4">Envie uma Mensagem</h3>
                        
                        <!-- Mensagem de sucesso -->
                        <div class="alert alert-success d-none" id="formSuccess">
                            <i class="bi bi-check-circle-fill me-2"></i> Sua mensagem foi enviada com sucesso! Entraremos em contato em breve.
                        </div>
                        
                        <form class="contact-form" id="contactForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nome Completo *</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                        <div class="invalid-feedback">
                                            Por favor, informe seu nome.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">E-mail *</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                        <div class="invalid-feedback">
                                            Por favor, informe um e-mail válido.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Telefone *</label>
                                        <input type="tel" class="form-control" id="phone" name="phone" required>
                                        <div class="invalid-feedback">
                                            Por favor, informe seu telefone.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="company" class="form-label">Empresa</label>
                                        <input type="text" class="form-control" id="company" name="company">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="subject" class="form-label">Assunto *</label>
                                <select class="form-select form-control" id="subject" name="subject" required>
                                    <option value="" selected disabled>Selecione o assunto</option>
                                    <option value="Treinamento NR 20">Treinamento NR 20</option>
                                    <option value="Treinamento NR 5">Treinamento NR 5</option>
                                    <option value="Treinamento NR 12">Treinamento NR 12</option>
                                    <option value="Treinamento NR 31">Treinamento NR 31</option>
                                    <option value="Treinamento NR 11">Treinamento NR 11</option>
                                    <option value="Consultoria">Consultoria</option>
                                    <option value="Outros">Outros</option>
                                </select>
                                <div class="invalid-feedback">
                                    Por favor, selecione um assunto.
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <label for="message" class="form-label">Mensagem *</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                                <div class="invalid-feedback">
                                    Por favor, escreva sua mensagem.
                                </div>
                            </div>
                            
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary btn-lg" id="submitBtn">
                                    Enviar Mensagem
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mapa -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-0">
                        <!-- Substitua pelo mapa real da empresa quando disponível -->
                        <div class="ratio ratio-21x9">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.356219550619!2d-43.17916548503453!3d-22.90575998501185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997f58a6a00a9d%3A0x3f251d85272f76f7!2sCentro%2C%20Rio%20de%20Janeiro%20-%20RJ!5e0!3m2!1spt-BR!2sbr!4v1616614971259!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WhatsApp Button -->
<a href="https://wa.me/5500000000000" class="whatsapp-btn" target="_blank">
    <i class="bi bi-whatsapp"></i>
</a>

<?php include 'includes/footer.php'; ?>