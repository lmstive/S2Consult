<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Coleta os dados do formulário
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $company = filter_input(INPUT_POST, 'company', FILTER_SANITIZE_STRING);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    
    // Validação básica
    $errors = [];
    
    if (empty($name)) {
        $errors[] = "O nome é obrigatório.";
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "E-mail inválido ou não informado.";
    }
    
    if (empty($phone)) {
        $errors[] = "O telefone é obrigatório.";
    }
    
    if (empty($subject)) {
        $errors[] = "Por favor, selecione um assunto.";
    }
    
    if (empty($message)) {
        $errors[] = "Por favor, escreva sua mensagem.";
    }
    
    // Se não houver erros, envia o e-mail
    if (empty($errors)) {
        
        // Destinatário
        $to = "contato@s2consultoria.com.br";
        
        // Assunto do e-mail
        $email_subject = "Contato via site: " . $subject;
        
        // Corpo do e-mail
        $email_body = "Você recebeu uma nova mensagem do formulário de contato do site.\n\n";
        $email_body .= "Nome: " . $name . "\n";
        $email_body .= "E-mail: " . $email . "\n";
        $email_body .= "Telefone: " . $phone . "\n";
        $email_body .= "Empresa: " . $company . "\n";
        $email_body .= "Assunto: " . $subject . "\n";
        $email_body .= "Mensagem:\n" . $message . "\n";
        
        // Cabeçalhos do e-mail
        $headers = "From: " . $email . "\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();
        
        // Tenta enviar o e-mail
        if (mail($to, $email_subject, $email_body, $headers)) {
            // E-mail enviado com sucesso
            $response = [
                'status' => 'success',
                'message' => 'Sua mensagem foi enviada com sucesso! Entraremos em contato em breve.'
            ];
        } else {
            // Falha no envio do e-mail
            $response = [
                'status' => 'error',
                'message' => 'Ocorreu um erro ao enviar sua mensagem. Por favor, tente novamente mais tarde.'
            ];
        }
        
    } else {
        // Há erros no formulário
        $response = [
            'status' => 'error',
            'message' => 'Por favor, corrija os seguintes erros:',
            'errors' => $errors
        ];
    }
    
    // Retorna a resposta como JSON
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}
?>