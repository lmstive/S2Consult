<?php
// Inicializa variáveis para evitar erros
$mensagemEnviada = false;
$erro = false;
$mensagemErro = '';

// Verifica se o formulário foi enviado
if (isset($_POST['enviar'])) {
    // Processo de validação e envio do formulário
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
    $assunto = filter_input(INPUT_POST, 'assunto', FILTER_SANITIZE_STRING);
    $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);
    
    // Verifica se os campos obrigatórios estão preenchidos
    if (empty($nome) || empty($email) || empty($assunto) || empty($mensagem)) {
        $erro = true;
        $mensagemErro = "Por favor, preencha todos os campos obrigatórios.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erro = true;
        $mensagemErro = "Por favor, insira um e-mail válido.";
    } else {
        // Aqui você deve adicionar o código para enviar o e-mail
        // Este é um exemplo simplificado
        
        // Destinatário do e-mail
        $para = "contato@s2consultoria.com.br";
        
        // Assunto do e-mail
        $assuntoEmail = "Contato via Site: " . $assunto;
        
        // Corpo do e-mail
        $corpoemail = "Nome: " . $nome . "\n";
        $corpoemail .= "E-mail: " . $email . "\n";
        if (!empty($telefone)) {
            $corpoemail .= "Telefone: " . $telefone . "\n";
        }
        $corpoemail .= "Mensagem: " . $mensagem . "\n";
        
        // Cabeçalhos do e-mail
        $headers = "From: " . $email . "\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        
        // Descomente esta linha quando estiver em um servidor com capacidade de envio de e-mail
        // $enviado = mail($para, $assuntoEmail, $corpoemail, $headers);
        
        // Para fins de teste/demonstração, sempre considera que o e-mail foi enviado
        $enviado = true;
        
        if ($enviado) {
            $mensagemEnviada = true;
        } else {
            $erro = true;
            $mensagemErro = "Ocorreu um erro ao enviar sua mensagem. Por favor, tente novamente ou entre em contato por telefone.";
        }
    }
}
?>

<!-- Exibe mensagem de sucesso ou erro -->
<?php if ($mensagemEnviada): ?>
    <div class="alert alert-success" role="alert">
        <i class="fas fa-check-circle me-2"></i> Sua mensagem foi enviada com sucesso! Entraremos em contato o mais breve possível.
    </div>
<?php elseif ($erro): ?>
    <div class="alert alert-danger" role="alert">
        <i class="fas fa-exclamation-circle me-2"></i> <?php echo $mensagemErro; ?>
    </div>
<?php endif; ?>

<!-- Formulário de contato -->
<form method="post" action="" class="contact-form">
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="nome" class="form-label">Nome Completo <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        
        <div class="col-md-6 mb-3">
            <label for="email" class="form-label">E-mail <span class="text-danger">*</span></label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
    </div>
    
    <div class="mb-3">
        <label for="telefone" class="form-label">Telefone</label>
        <input type="tel" class="form-control" id="telefone" name="telefone">
    </div>
    
    <div class="mb-3">
        <label for="assunto" class="form-label">Assunto <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="assunto" name="assunto" required>
    </div>
    
    <div class="mb-3">
        <label for="mensagem" class="form-label">Mensagem <span class="text-danger">*</span></label>
        <textarea class="form-control" id="mensagem" name="mensagem" rows="5" required></textarea>
    </div>
    
    <div class="text-center">
        <button type="submit" name="enviar" class="btn btn-primary btn-lg">
            <i class="fas fa-paper-plane me-2"></i>Enviar Mensagem
        </button>
    </div>
</form>