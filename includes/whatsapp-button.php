<?php
/**
 * Botão Flutuante do WhatsApp
 * 
 * Este arquivo cria um botão flutuante do WhatsApp que pode ser incluído em qualquer página.
 * Para usar, basta adicionar: include_once 'includes/whatsapp-button.php'; antes do fechamento do body.
 */

// Número do WhatsApp (formato internacional, sem espaços ou caracteres especiais)
$whatsappNumber = "5500000000000"; // Substitua pelo número real

// Texto padrão da mensagem (opcional, codificado para URL)
$defaultMessage = urlencode("Olá! Gostaria de mais informações sobre os serviços da S2 Consultoria.");

// Link completo do WhatsApp
$whatsappLink = "https://wa.me/{$whatsappNumber}?text={$defaultMessage}";

// Título da tooltip
$tooltipTitle = "Fale conosco pelo WhatsApp";
?>

<!-- Botão Flutuante do WhatsApp -->
<div class="whatsapp-float">
    <a href="<?php echo $whatsappLink; ?>" target="_blank" class="whatsapp-button" title="<?php echo $tooltipTitle; ?>">
        <i class="fab fa-whatsapp"></i>
    </a>
</div>