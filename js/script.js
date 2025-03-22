/**
 * S2 Consultoria
 * Scripts personalizados
 */

// Contador de estatísticas
function initCounters() {
    const counters = document.querySelectorAll('.stat-number');
    const speed = 200; // Quanto menor, mais rápido

    counters.forEach(counter => {
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;
        const increment = target / speed;

        if (count < target) {
            counter.innerText = Math.ceil(count + increment);
            setTimeout(() => initCounters(), 1);
        } else {
            counter.innerText = target;
        }
    });
}

// Efeito de revelação durante o scroll
function revealOnScroll() {
    const reveals = document.querySelectorAll('.reveal');
    
    reveals.forEach(element => {
        const windowHeight = window.innerHeight;
        const elementTop = element.getBoundingClientRect().top;
        const elementVisible = 150;
        
        if (elementTop < windowHeight - elementVisible) {
            element.classList.add('active');
        } else {
            element.classList.remove('active');
        }
    });
}

// Inicializar quando o DOM estiver pronto
document.addEventListener('DOMContentLoaded', function() {
    // Inicializar tooltips do Bootstrap (com verificação de segurança)
    if (typeof bootstrap !== 'undefined') {
        const tooltips = document.querySelectorAll('[data-bs-toggle="tooltip"]');
        tooltips.forEach(tooltip => {
            new bootstrap.Tooltip(tooltip);
        });

        // Inicializar popovers do Bootstrap
        const popovers = document.querySelectorAll('[data-bs-toggle="popover"]');
        popovers.forEach(popover => {
            new bootstrap.Popover(popover);
        });
    }
    
    // Verificar se existem contadores na página e inicializá-los
    if (document.querySelector('.stat-number')) {
        initCounters();
    }
    
    // Animar elementos durante o scroll
    window.addEventListener('scroll', revealOnScroll);
    revealOnScroll();
    
    // Ocultar o botão de WhatsApp quando o usuário rolar para o rodapé
    const whatsappBtn = document.querySelector('.whatsapp-float');
    const footer = document.querySelector('footer');
    
    if (whatsappBtn && footer) {
        window.addEventListener('scroll', function() {
            const footerTop = footer.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            
            if (footerTop < windowHeight) {
                whatsappBtn.classList.add('whatsapp-hidden');
            } else {
                whatsappBtn.classList.remove('whatsapp-hidden');
            }
        });
    }
});

// Adicionar classe 'scrolled' ao navbar quando rolar a página
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});
