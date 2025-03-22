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
<!-- Botão Flutuante de WhatsApp -->
<a href="https://api.whatsapp.com/send?phone=5500000000000&text=Olá! Gostaria de saber mais sobre os serviços da S2 Consultoria." class="whatsapp-float" target="_blank">
    <i class="fab fa-whatsapp"></i>
    </a>


<style>
.whatsapp-float {
    position: fixed;
    width: 60px;
    height: 60px;
    bottom: 30px;
    right: 30px;
    background-color: #25d366;
    color: #FFF;
    border-radius: 50%;
    text-align: center;
    font-size: 36px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    z-index: 100;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    transition: all 0.3s ease;
    animation: pulse 1.5s infinite;
}

.whatsapp-float:hover {
    background-color: #20b85a;
    color: #FFF;
    transform: translateY(-5px) scale(1.05);
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
    animation: none;
}

.whatsapp-float::before {
    content: '';
    position: absolute;
    border: 2px solid #25d366;
    left: -10px;
    right: -10px;
    top: -10px;
    bottom: -10px;
    border-radius: 50%;
    opacity: 0;
    animation: pulse-border 1.5s cubic-bezier(0.24, 0, 0.38, 1) infinite;
}

@keyframes pulse {
    0% {
        transform: scale(1);
    }
    70% {
        transform: scale(1.05);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4);
    }
    100% {
        transform: scale(1);
    }
}

@keyframes pulse-border {
    0% {
        transform: scale(1);
        opacity: 0;
    }
    50% {
        opacity: 0.5;
    }
    100% {
        transform: scale(1.5);
        opacity: 0;
    }
}

/* Adicione um tooltip ao botão */
.whatsapp-float .tooltip-text {
    visibility: hidden;
    width: 120px;
    background-color: rgba(0, 0, 0, 0.8);
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px;
    position: absolute;
    right: 80px;
    font-size: 14px;
    opacity: 0;
    transition: opacity 0.3s;
}

.whatsapp-float:hover .tooltip-text {
    visibility: visible;
    opacity: 1;
}

@media screen and (max-width: 767px) {
    .whatsapp-float {
        width: 50px;
        height: 50px;
        font-size: 30px;
        bottom: 20px;
        right: 20px;
    }
}
</style>
<?php
include_once 'includes/footer.php';
?>