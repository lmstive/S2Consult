// Função para adicionar o botão do WhatsApp diretamente ao corpo da página
document.addEventListener('DOMContentLoaded', function() {
  // Criar o elemento div para o botão do WhatsApp
  var whatsappFloat = document.createElement('div');
  whatsappFloat.className = 'whatsapp-float';
  
  // Criar o link do WhatsApp
  var whatsappLink = document.createElement('a');
  whatsappLink.href = 'https://wa.me/5500000000000'; // Substitua pelo número correto
  whatsappLink.className = 'whatsapp-button';
  whatsappLink.title = 'Fale conosco pelo WhatsApp';
  whatsappLink.target = '_blank';
  
  // Criar o ícone do WhatsApp
  var whatsappIcon = document.createElement('i');
  whatsappIcon.className = 'fab fa-whatsapp';
  
  // Montar a estrutura
  whatsappLink.appendChild(whatsappIcon);
  whatsappFloat.appendChild(whatsappLink);
  
  // Adicionar ao corpo da página
  document.body.appendChild(whatsappFloat);
});