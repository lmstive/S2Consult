<!-- Footer -->
<footer class="bg-dark text-white pt-5 pb-4">
    <div class="container">
        <div class="row">
            <!-- Logo e Informações -->
            <div class="col-md-4 mb-4 mb-md-0">
                <a href="index.php">
                    <img src="assets/images/logo.png" alt="S2 Consultoria" height="50" class="mb-3">
                </a>
                <p class="mt-3">Consultoria especializada em soluções de gestão empresarial e treinamentos corporativos.</p>
                <div class="social-icons mt-4">
                    <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            
            <!-- Links Rápidos -->
            <div class="col-md-4 mb-4 mb-md-0">
                <h5>Links Rápidos</h5>
                <ul class="list-unstyled">
                    <li><a href="index.php"><i class="bi bi-house-door me-2"></i>Início</a></li>
                    <li><a href="sobre.php"><i class="bi bi-info-circle me-2"></i>Sobre Nós</a></li>
                    <li><a href="servicos.php"><i class="bi bi-gear me-2"></i>Serviços</a></li>
                    <li><a href="instrutores.php"><i class="bi bi-people me-2"></i>Instrutores</a></li>
                    <li><a href="contato.php"><i class="bi bi-envelope me-2"></i>Contato</a></li>
                </ul>
            </div>
            
            <!-- Contato -->
            <div class="col-md-4">
                <h5>Contato</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="bi bi-geo-alt me-2"></i> Endereço da empresa</li>
                    <li class="mb-2"><i class="bi bi-telephone me-2"></i> (45) 9923-0947</li>
                    <li class="mb-2"><i class="bi bi-envelope me-2"></i> contato@s2consultoria.com</li>
                </ul>
                
                
            </div>
        </div>
        
        <!-- Copyright -->
        <div class="row mt-4">
            <div class="col-12 text-center">
                <hr>
                <p class="mb-0">&copy; <?php echo date('Y'); ?> S2 Consultoria. Todos os direitos reservados.</p>
            </div>
        </div>
    </div>
</footer>

<!-- Botão WhatsApp Flutuante -->
<a href="https://wa.me/550000000000?text=Olá,%20gostaria%20de%20obter%20mais%20informações" 
   class="whatsapp-float whatsapp-pulse" 
   target="_blank" 
   aria-label="Fale conosco pelo WhatsApp">
    <i class="bi bi-whatsapp"></i>
</a>

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- jQuery (se necessário) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Custom JS (se existir) -->
<script src="js/script.js"></script>

<!-- Script para destacar o link atual e animações -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Destacar link ativo
        const currentPath = window.location.pathname;
        const filename = currentPath.substring(currentPath.lastIndexOf('/') + 1);
        
        const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
        navLinks.forEach(link => {
            const href = link.getAttribute('href');
            if (href === filename || (filename === '' && href === 'index.php')) {
                link.classList.add('active');
            }
        });
        
        // Animações de scroll
        const animatedElements = document.querySelectorAll('.fade-up');
        
        function checkIfInView() {
            const windowHeight = window.innerHeight;
            const windowTopPosition = window.scrollY;
            const windowBottomPosition = windowTopPosition + windowHeight;

            animatedElements.forEach(function(element) {
                const elementHeight = element.offsetHeight;
                const elementTopPosition = element.offsetTop;
                const elementBottomPosition = elementTopPosition + elementHeight;

                if (
                    (elementBottomPosition >= windowTopPosition) &&
                    (elementTopPosition <= windowBottomPosition)
                ) {
                    element.classList.add('animated');
                }
            });
        }

        window.addEventListener('scroll', checkIfInView);
        checkIfInView();
    });
</script>

</body>
</html>