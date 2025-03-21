# S2 Consultoria em Segurança do Trabalho - Site Institucional

Este é o repositório do site institucional da S2 Consultoria em Segurança do Trabalho, uma empresa especializada em consultoria, treinamentos e serviços em segurança do trabalho e saúde ocupacional.

## Estrutura do Projeto

```
S2-CONSULTORIA-SEGURANCA-DO-TRABALHO/
├── assets/
│   ├── fonts/          # Fontes utilizadas no site
│   ├── images/         # Imagens e elementos gráficos
│   └── videos/         # Vídeos institucionais (se houver)
├── css/
│   └── style.css       # Estilos personalizados
├── forms/
│   └── contato-form.php # Formulário de contato
├── includes/
│   ├── footer.php      # Rodapé do site
│   ├── header.php      # Cabeçalho do site
│   └── navbar.php      # Barra de navegação
├── js/
│   └── script.js       # JavaScript personalizado
├── libs/               # Bibliotecas de terceiros (se necessário)
├── contato.php         # Página de contato
├── index.php           # Página inicial
├── instrutores.php     # Página de instrutores/equipe
├── README.md           # Este arquivo
├── servicos.php        # Página de serviços
└── sobre.php           # Página sobre a empresa
```

## Requisitos

- Servidor web (Apache, Nginx, etc.)
- PHP 7.0 ou superior
- Navegador web moderno com suporte a HTML5, CSS3 e JavaScript

## Instalação

1. Clone ou faça o download deste repositório para o seu servidor web
2. Certifique-se de que o servidor web está configurado para executar PHP
3. Configure as permissões adequadas para os diretórios e arquivos
4. Acesse o site através do navegador web

## Funcionalidades Principais

- **Página Inicial**: Apresentação da empresa, serviços destacados e chamadas para ação
- **Sobre Nós**: História da empresa, missão, visão, valores e equipe
- **Serviços**: Detalhamento dos serviços oferecidos pela consultoria
- **Instrutores**: Apresentação dos profissionais e suas especialidades
- **Contato**: Formulário para contato e informações para comunicação direta

## Tecnologias Utilizadas

- HTML5
- CSS3
- JavaScript
- PHP
- Bootstrap 5
- Font Awesome
- Google Fonts

## Manutenção do Site

### Formulário de Contato

O formulário de contato está localizado em `forms/contato-form.php` e é incluído na página `contato.php`. Para que o formulário funcione corretamente, você precisa:

1. Verificar se o arquivo está sendo incluído corretamente (`include_once 'forms/contato-form.php'`)
2. Configurar o destinatário do e-mail no arquivo `forms/contato-form.php` (variável `$para`)
3. Verificar se a função `mail()` do PHP está configurada no servidor

### Páginas de Conteúdo

Para atualizar o conteúdo do site:

1. **Informações da Empresa**: Edite os arquivos `sobre.php`, `index.php` e `includes/footer.php`
2. **Serviços**: Atualize o arquivo `servicos.php`
3. **Equipe/Instrutores**: Modifique o arquivo `instrutores.php`
4. **Informações de Contato**: Atualize os dados em `contato.php` e `includes/footer.php`

### Estilo e Aparência

Para modificar o estilo e aparência do site:

1. **Cores e Tipografia**: Edite o arquivo `css/style.css`
2. **Layout**: Modifique as classes Bootstrap nos arquivos PHP
3. **Elementos Visuais**: Atualize imagens na pasta `assets/images/`

## Suporte e Contato

Para suporte técnico relacionado ao site, entre em contato com o desenvolvedor responsável pela manutenção.

---

© 2025 S2 Consultoria em Segurança do Trabalho. Todos os direitos reservados.