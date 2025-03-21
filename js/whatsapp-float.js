document.addEventListener('DOMContentLoaded', function() {
  // Configurações
  const floatButton = document.createElement('div');
  floatButton.className = 'whatsapp-float';
  
  const whatsappLink = document.createElement('a');
  whatsappLink.href = 'https://wa.me/5500000000000'; // ATUALIZE SEU NÚMERO
  whatsappLink.className = 'whatsapp-button';
  whatsappLink.title = 'Fale conosco pelo WhatsApp';
  whatsappLink.target = '_blank';
  
  const whatsappIcon = document.createElement('i');
  whatsappIcon.className = 'fab fa-whatsapp';
  
  // Montagem
  whatsappLink.appendChild(whatsappIcon);
  floatButton.appendChild(whatsappLink);
  document.body.appendChild(floatButton);

  // Controle de Scroll
  let lastScroll = window.pageYOffset;
  const sensitivity = 30; // Quanto maior, menos sensível

  window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;
    const scrollDiff = currentScroll - lastScroll;
    
    if (Math.abs(scrollDiff) > sensitivity) {
      if (scrollDiff > 0) { // Scroll para baixo
        floatButton.classList.add('scrolling-down');
      } else { // Scroll para cima
        floatButton.classList.remove('scrolling-down');
      }
      lastScroll = currentScroll;
    }
  });

  // Suavizar aparecimento inicial
  setTimeout(() => {
    floatButton.style.transition = 'all 0.5s cubic-bezier(0.4, 0, 0.2, 1)';
  }, 1000);
});