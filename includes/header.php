<?php
// Definir o título padrão caso não seja definido
if (!isset($pageTitle)) {
    $pageTitle = "S2 Consultoria e Treinamento em Segurança do Trabalho";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <!-- Meta tags SEO -->
    <meta name="description" content="S2 Consultoria e Treinamento em Segurança do Trabalho - Especialistas em NR 5, NR 11, NR 12, NR 20 e NR 31">
    <meta name="keywords" content="segurança do trabalho, NR 5, NR 11, NR 12, NR 20, NR 31, consultoria, treinamento">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- AOS - Animate On Scroll Library -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <!-- Google Fonts - Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
    
    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
</head>
<body>
    <?php include_once 'includes/navbar.php'; ?>