<?php
// Página de contato
include_once 'includes/header.php';
include_once 'includes/navbar.php';
?>

<main class="container my-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h1 class="text-center mb-4">Entre em Contato</h1>
            
            <div class="card shadow-sm mb-5">
                <div class="card-body">
                    <p class="text-center">Preencha o formulário abaixo para entrar em contato conosco. Teremos prazer em responder suas dúvidas e ajudar com suas necessidades de segurança do trabalho.</p>
                    
                    <?php
                    // Inclui o formulário de contato
                    include_once 'forms/contato-form.php';
                    ?>
                </div>
            </div>
            
            <div class="row mt-5">
                <!-- Informações de Contato -->
                <div class="col-md-6 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h3 class="card-title">Informações de Contato</h3>
                            <hr>
                            <p><i class="fas fa-map-marker-alt text-primary me-2"></i> Endereço: Rua Exemplo, 123 - Cidade, Estado</p>
                            <p><i class="fas fa-phone text-primary me-2"></i> Telefone: (00) 0000-0000</p>
                            <p><i class="fas fa-mobile-alt text-primary me-2"></i> Celular: (00) 00000-0000</p>
                            <p><i class="fas fa-envelope text-primary me-2"></i> Email: contato@s2consultoria.com.br</p>
                        </div>
                    </div>
                </div>
                
                <!-- Horário de Atendimento -->
                <div class="col-md-6 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h3 class="card-title">Horário de Atendimento</h3>
                            <hr>
                            <p><i class="far fa-clock text-primary me-2"></i> Segunda a Sexta: 8h às 18h</p>
                            <p><i class="far fa-clock text-primary me-2"></i> Sábado: 8h às 12h</p>
                            <p><i class="far fa-times-circle text-primary me-2"></i> Domingo: Fechado</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include_once 'includes/footer.php';
?>