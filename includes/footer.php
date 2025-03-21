<!-- Footer -->
<footer class="bg-dark text-white pt-5 pb-3">
    <div class="container">
        <div class="row">
            <!-- Coluna 1: Sobre a Empresa -->
            <div class="col-md-4 mb-4">
                <h5 class="mb-3">S2 Consultoria</h5>
                <p>Especialistas em soluções de segurança do trabalho, oferecendo consultoria, treinamentos e assessoria para empresas de todos os portes.</p>
                <div class="mt-3">
                    <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            
            <!-- Coluna 2: Links Rápidos -->
            <div class="col-md-2 mb-4">
                <h5 class="mb-3">Links Rápidos</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="index.php" class="text-white text-decoration-none">Início</a></li>
                    <li class="mb-2"><a href="sobre.php" class="text-white text-decoration-none">Sobre Nós</a></li>
                    <li class="mb-2"><a href="servicos.php" class="text-white text-decoration-none">Serviços</a></li>
                    <li class="mb-2"><a href="instrutores.php" class="text-white text-decoration-none">Instrutores</a></li>
                    <li class="mb-2"><a href="contato.php" class="text-white text-decoration-none">Contato</a></li>
                </ul>
            </div>
            
            <!-- Coluna 3: Serviços -->
            <div class="col-md-3 mb-4">
                <h5 class="mb-3">Nossos Serviços</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="servicos.php#ppra" class="text-white text-decoration-none">PPRA</a></li>
                    <li class="mb-2"><a href="servicos.php#pcmso" class="text-white text-decoration-none">PCMSO</a></li>
                    <li class="mb-2"><a href="servicos.php#treinamentos" class="text-white text-decoration-none">Treinamentos</a></li>
                    <li class="mb-2"><a href="servicos.php#laudos" class="text-white text-decoration-none">Laudos Técnicos</a></li>
                    <li class="mb-2"><a href="servicos.php#consultoria" class="text-white text-decoration-none">Consultoria</a></li>
                </ul>
            </div>
            
            <!-- Coluna 4: Contato -->
            <div class="col-md-3 mb-4">
                <h5 class="mb-3">Contato</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i>Rua Exemplo, 123 - Cidade, Estado</li>
                    <li class="mb-2"><i class="fas fa-phone me-2"></i>(00) 0000-0000</li>
                    <li class="mb-2"><i class="fas fa-envelope me-2"></i>contato@s2consultoria.com.br</li>
                    <li class="mb-2"><i class="fas fa-clock me-2"></i>Seg-Sex: 8h às 18h</li>
                </ul>
            </div>
        </div>
        
        <hr class="my-4">
        
        <!-- Copyright -->
        <div class="row">
            <div class="col-md-6 text-center text-md-start">
                <p class="small mb-0">&copy; <?php echo date('Y'); ?> S2 Consultoria em Segurança do Trabalho. Todos os direitos reservados.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <p class="small mb-0">Desenvolvido por <a href="#" class="text-white">Seu Nome ou Empresa</a></p>
            </div>
        </div>
    </div>
</footer>
<!-- Botão Flutuante do WhatsApp -->
<div class="whatsapp-float">
    <a href="https://wa.me/5500000000000" target="_blank" class="whatsapp-button" title="Fale conosco pelo WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>
</div>

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- jQuery (se necessário) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Custom JS (se existir) -->
<script src="js/script.js"></script>

<!-- Script para destacar o link atual no menu de navegação -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const currentPath = window.location.pathname;
        const filename = currentPath.substring(currentPath.lastIndexOf('/') + 1);
        
        const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
        navLinks.forEach(link => {
            const href = link.getAttribute('href');
            if (href === filename || (filename === '' && href === 'index.php')) {
                link.classList.add('active');
            }
        });
    });
</script>

</body>
</html>