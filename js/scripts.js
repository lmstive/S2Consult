/**
 * S2 Consultoria e Treinamento em Segurança do Trabalho
 * JavaScript Principal
 */

// Preloader
window.addEventListener('load', function() {
  const preloader = document.getElementById('preloader');
  preloader.style.opacity = '0';
  setTimeout(function() {
      preloader.style.display = 'none';
  }, 500);
});

// Navbar Scroll Effect
document.addEventListener('DOMContentLoaded', function() {
  const navbar = document.querySelector('.navbar');
  
  window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
          navbar.classList.add('scrolled');
      } else {
          navbar.classList.remove('scrolled');
      }
  });
  
  // Inicializar AOS (Animate on Scroll)
  AOS.init({
      duration: 800,
      easing: 'ease-in-out',
      once: true
  });
  
  // Ativar tooltips do Bootstrap
  const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
  tooltipTriggerList.map(function(tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl);
  });
  
  // Manipulação do formulário de contato
  const contactForm = document.getElementById('contactForm');
  if (contactForm) {
      contactForm.addEventListener('submit', function(e) {
          e.preventDefault();
          
          // Validação básica
          let isValid = true;
          const requiredFields = ['name', 'email', 'phone', 'message'];
          
          requiredFields.forEach(field => {
              const input = document.getElementById(field);
              if (!input.value.trim()) {
                  isValid = false;
                  input.classList.add('is-invalid');
              } else {
                  input.classList.remove('is-invalid');
              }
          });
          
          // Validação do email
          const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          const emailInput = document.getElementById('email');
          if (!emailRegex.test(emailInput.value)) {
              isValid = false;
              emailInput.classList.add('is-invalid');
          }
          
          if (isValid) {
              // Preparar dados para envio
              const formData = new FormData(this);
              const submitBtn = document.getElementById('submitBtn');
              const originalText = submitBtn.innerHTML;
              
              submitBtn.disabled = true;
              submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span> Enviando...';
              
              // Enviar via AJAX
              fetch('contato-form.php', {
                  method: 'POST',
                  body: formData
              })
              .then(response => response.json())
              .then(data => {
                  submitBtn.disabled = false;
                  submitBtn.innerHTML = originalText;
                  
                  if (data.status === 'success') {
                      const successMessage = document.getElementById('formSuccess');
                      contactForm.reset();
                      
                      if (successMessage) {
                          successMessage.classList.remove('d-none');
                          setTimeout(() => {
                              successMessage.classList.add('d-none');
                          }, 5000);
                      }
                  } else {
                      // Mostrar mensagem de erro
                      alert('Erro ao enviar mensagem: ' + data.message);
                      
                      // Se houver erros específicos
                      if (data.errors) {
                          data.errors.forEach(error => {
                              alert(error);
                          });
                      }
                  }
              })
              .catch(error => {
                  submitBtn.disabled = false;
                  submitBtn.innerHTML = originalText;
                  alert('Erro ao enviar mensagem. Por favor, tente novamente mais tarde.');
                  console.error('Erro:', error);
              });
          }
      });
  }
  
  // Adicionar classes animadas aos elementos na rolagem
  const animateElements = document.querySelectorAll('.animate-on-scroll');
  animateElements.forEach(element => {
      const observer = new IntersectionObserver(entries => {
          entries.forEach(entry => {
              if (entry.isIntersecting) {
                  entry.target.classList.add('animate__animated', element.dataset.animation || 'animate__fadeIn');
                  observer.unobserve(entry.target);
              }
          });
      }, { threshold: 0.1 });
      
      observer.observe(element);
  });
  
  // Botão de voltar ao topo
  const backToTopBtn = document.getElementById('backToTop');
  if (backToTopBtn) {
      window.addEventListener('scroll', function() {
          if (window.scrollY > 300) {
              backToTopBtn.classList.add('show');
          } else {
              backToTopBtn.classList.remove('show');
          }
      });
      
      backToTopBtn.addEventListener('click', function(e) {
          e.preventDefault();
          window.scrollTo({ top: 0, behavior: 'smooth' });
      });
  }
  
  // Animação para o botão do WhatsApp
  const whatsappBtn = document.querySelector('.whatsapp-btn');
  if (whatsappBtn) {
      window.addEventListener('scroll', function() {
          if (window.scrollY > 300) {
              whatsappBtn.classList.add('animate__animated', 'animate__bounce');
              setTimeout(() => {
                  whatsappBtn.classList.remove('animate__animated', 'animate__bounce');
              }, 1000);
          }
      });
  }
});

// Contador para seção "Sobre Nós"
function startCounter() {
  const counters = document.querySelectorAll('.counter-number');
  
  counters.forEach(counter => {
      const target = parseInt(counter.getAttribute('data-target'));
      const duration = 2000; // duração em ms
      const startTime = performance.now();
      
      function updateCounter(currentTime) {
          const elapsed = currentTime - startTime;
          const progress = Math.min(elapsed / duration, 1);
          
          const currentValue = Math.floor(progress * target);
          counter.textContent = currentValue;
          
          if (progress < 1) {
              requestAnimationFrame(updateCounter);
          } else {
              counter.textContent = target;
          }
      }
      
      requestAnimationFrame(updateCounter);
  });
}

// Iniciar o contador quando os elementos estiverem visíveis
document.addEventListener('DOMContentLoaded', function() {
  const counterSection = document.querySelector('.counter-section');
  
  if (counterSection) {
      const observer = new IntersectionObserver(entries => {
          entries.forEach(entry => {
              if (entry.isIntersecting) {
                  startCounter();
                  observer.unobserve(entry.target);
              }
          });
      }, { threshold: 0.5 });
      
      observer.observe(counterSection);
  }
});