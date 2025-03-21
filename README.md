# S2 Consultoria e Treinamento em Segurança do Trabalho

Este é o repositório do site da S2 Consultoria e Treinamento em Segurança do Trabalho, especializada em serviços de assessoria e treinamentos regulamentados pelas principais Normas Regulamentadoras (NRs).

## Estrutura do Projeto

```
S2-CONSULTORIA-SEGURANCA-DO-TRABALHO/
├── assets/
│   ├── fonts/        # Fontes personalizadas
│   ├── images/       # Imagens do site
│   └── videos/       # Vídeos utilizados no site
├── css/              # Arquivos de estilo
│   └── style.css     # Estilos personalizados
├── forms/            # Processamento de formulários
│   └── contato-form.php  # Processamento do formulário de contato
├── includes/         # Componentes reutilizáveis
│   ├── footer.php    # Rodapé do site
│   ├── header.php    # Cabeçalho do site
│   └── navbar.php    # Barra de navegação
├── js/               # JavaScript
│   └── main.js       # Scripts personalizados
├── libs/             # Bibliotecas externas
├── .gitignore        # Arquivos ignorados pelo Git
├── .htaccess         # Configurações do Apache
├── contato.php       # Página de contato
├── index.php         # Página inicial
├── instrutores.php   # Página de instrutores
├── README.md         # Documentação do projeto
├── servicos.php      # Página de serviços
└── sobre.php         # Página "Sobre Nós"
```

## Tecnologias Utilizadas

- **PHP** - Linguagem de programação server-side
- **HTML5** - Estrutura das páginas
- **CSS3** - Estilização das páginas
- **Bootstrap 5** - Framework CSS para design responsivo
- **JavaScript** - Interatividade e animações
- **Bootstrap Icons** - Ícones utilizados no site
- **Animate.css** - Biblioteca para animações CSS
- **AOS (Animate On Scroll)** - Biblioteca para animações ao rolar a página

## Funcionalidades

- **Design Responsivo**: Site adaptável a diferentes dispositivos
- **Formulário de Contato**: Com validação de campos e envio de e-mail
- **Seção de Serviços**: Detalhamento dos treinamentos e consultorias oferecidas
- **Seção de Instrutores**: Apresentação dos profissionais da empresa
- **Botão de WhatsApp**: Fixo e animado para facilitar o contato
- **Animações**: Efeitos visuais para melhorar a experiência do usuário

## Instalação e Configuração

1. Clone este repositório para seu servidor web:
```
git clone https://github.com/seuusuario/S2-CONSULTORIA-SEGURANCA-DO-TRABALHO.git
```

2. Configure o servidor web (Apache, Nginx, etc.) para apontar para o diretório do projeto.

3. Certifique-se de que o PHP está instalado e configurado no servidor.

4. Atualize as informações de contato no arquivo `forms/contato-form.php` para o e-mail correto da empresa.

5. Substitua as imagens de exemplo na pasta `assets/images/` pelas imagens reais da empresa, incluindo a logo.

## Personalização

- **Cores**: As cores principais podem ser alteradas no arquivo `css/style.css` nas variáveis CSS (`:root`).
- **Conteúdo**: Edite os arquivos PHP para atualizar textos, imagens e informações específicas da empresa.
- **Logo**: Substitua os arquivos `logo.png` e `logo-white.png` na pasta `assets/images/` pela logo real da empresa.

## Requisitos do Servidor

- PHP 7.4 ou superior
- Servidor web (Apache, Nginx, etc.)
- Módulo PHP mail habilitado para o funcionamento do formulário de contato

## Contato

Para mais informações sobre este projeto, entre em contato com:

- **Email**: contato@s2consultoria.com.br
- **Telefone**: (00) 0000-0000
- **WhatsApp**: (00) 00000-0000

## Licença

Este projeto é propriedade da S2 Consultoria e Treinamento em Segurança do Trabalho. Todos os direitos reservados.