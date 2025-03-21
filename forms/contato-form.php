<?php
// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Inicializar variáveis de resposta
    $response = array(
        'success' => false,
        'message' => ''
    );
    
    // Validar campos obrigatórios
    if (empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['telefone']) || empty($_POST['mensagem']) || empty($_POST['assunto'])) {
        $response['message'] = 'Por favor, preencha todos os campos obrigatórios.';
    } 
    // Validar e-mail
    elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $response['message'] = 'Por favor, informe um e-mail válido.';
    }
    // Validar checkbox de termos (deve estar marcado)
    elseif (!isset($_POST['termos'])) {
        $response['message'] = 'Você precisa concordar com a política de privacidade.';
    }
    // Se tudo estiver válido, processar o formulário
    else {
        // Sanitizar dados
        $nome = htmlspecialchars($_POST['nome']);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $telefone = htmlspecialchars($_POST['telefone']);
        $empresa = isset($_POST['empresa']) ? htmlspecialchars($_POST['empresa']) : '';
        $assunto = htmlspecialchars($_POST['assunto']);
        $mensagem = htmlspecialchars($_POST['mensagem']);
        
        // Configurar destinatário
        $to = "contato@s2consultoria.com.br";
        
        // Assunto do e-mail
        $subject = "Formulário de Contato: " . $assunto;
        
        // Corpo do e-mail
        $message = "Nome: " . $nome . "\r\n";
        $message .= "E-mail: " . $email . "\r\n";
        $message .= "Telefone: " . $telefone . "\r\n";
        if (!empty($empresa)) {
            $message .= "Empresa: " . $empresa . "\r\n";
        }
        $message .= "Assunto: " . $assunto . "\r\n\r\n";
        $message .= "Mensagem:\r\n" . $mensagem;
        
        // Headers
        $headers = "From: site@s2consultoria.com.br\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();
        
        // Tentar enviar o e-mail
        if (mail($to, $subject, $message, $headers)) {
            $response['success'] = true;
            $response['message'] = 'Sua mensagem foi enviada com sucesso! Em breve entraremos em contato.';
            
            // Opcionalmente: Salvar mensagem no banco de dados
            // saveMessageToDatabase($nome, $email, $telefone, $empresa, $assunto, $mensagem);
            
            // Opcionalmente: Enviar cópia para o remetente
            // sendConfirmationEmail($nome, $email);
        } else {
            $response['message'] = 'Ocorreu um erro ao enviar sua mensagem. Por favor, tente novamente mais tarde ou entre em contato pelo telefone.';
        }
    }
    
    // Retornar resposta como JSON para requisições AJAX
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        header('Content-Type: application/json');
        echo json_encode($response);
        exit;
    }
    
    // Redirecionar com mensagem para requisições normais
    if ($response['success']) {
        header('Location: ../contato.php?status=success&message=' . urlencode($response['message']));
    } else {
        header('Location: ../contato.php?status=error&message=' . urlencode($response['message']));
    }
    exit;
}

/**
 * Função para salvar a mensagem no banco de dados
 * Descomente e configure conforme necessário
 */
/*
function saveMessageToDatabase($nome, $email, $telefone, $empresa, $assunto, $mensagem) {
    try {
        // Configurações do banco de dados
        $host = 'localhost';
        $dbname = 'database_name';
        $username = 'username';
        $password = 'password';

        // Conectar ao banco de dados
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Preparar e executar a consulta
        $stmt = $pdo->prepare("INSERT INTO contatos (nome, email, telefone, empresa, assunto, mensagem, data_envio) 
                              VALUES (:nome, :email, :telefone, :empresa, :assunto, :mensagem, NOW())");
        
        $stmt->execute([
            ':nome' => $nome,
            ':email' => $email,
            ':telefone' => $telefone,
            ':empresa' => $empresa,
            ':assunto' => $assunto,
            ':mensagem' => $mensagem
        ]);
        
        return true;
    } catch (PDOException $e) {
        // Registrar erro em log
        error_log('Erro ao salvar contato: ' . $e->getMessage());
        return false;
    }
}
*/

/**
 * Função para enviar e-mail de confirmação ao remetente
 * Descomente e configure conforme necessário
 */
/*
function sendConfirmationEmail($nome, $email) {
    $subject = "Recebemos sua mensagem - S2 Consultoria";
    
    $message = "Olá $nome,\r\n\r\n";
    $message .= "Recebemos sua mensagem e agradecemos pelo contato.\r\n";
    $message .= "Um de nossos consultores entrará em contato com você em breve.\r\n\r\n";
    $message .= "Atenciosamente,\r\n";
    $message .= "Equipe S2 Consultoria e Treinamento em Segurança do Trabalho\r\n";
    
    $headers = "From: contato@s2consultoria.com.br\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    
    mail($email, $subject, $message, $headers);
}
*/
?>