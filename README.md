# Talk with Michael Scott

This project, built with Laravel, uses an API to simulate conversations with Michael Scott, the character from The Office, leveraging the Llama 3.1 language model to recreate his iconic lines and interactions.

Technologies Used:
- Laravel
- MySql
- Llama 3.1

> **Autor**: João Pedro Rodrigues Matias | <joaopedrord2001@gmail.com>

## Estrutura

```bash
├── app                       # Contém o código principal da aplicação, incluindo Models, Controllers e Services
│   ├── Http                  # Controladores, Middlewares e Requests HTTP
│   └── Models                # Modelos Eloquent
├── config                    # Configurações do aplicativo (banco de dados, mail, cache, etc.)
├── public                    # Diretório público, onde ficam os arquivos acessíveis externamente
├── resources                 # Recursos como views, assets e arquivos de tradução
│   ├── js                    # Arquivos JavaScript
│   └── views                 # Views Blade do Laravel
├── routes                    # Arquivos de rotas da aplicação
│   ├── api.php               # Rotas de API
│   └── web.php               # Rotas da web
├── vendor                    # Dependências do Composer
├── .env                      # Arquivo de configuração de ambiente
├── artisan                   # CLI do Laravel para comandos Artisan
├── composer.json             # Dependências PHP do projeto
├── package.json              # Dependências Node.js do projeto
└── webpack.mix.js            # Configuração do Laravel Mix para compilação de assets
```

## How the "Talk with Michael Scott" Project Works
![alt text](public/img/image.png)

This project is built with the Laravel framework and uses an API that communicates with the Llama 3.1 language model. It aims to simulate conversations with the character Michael Scott from The Office. When a request is made to the API, the system generates responses in the characteristic style and humor of the character, creating an engaging and entertaining interactive experience.

Below is a step-by-step guide on how to start and configure the Laravel project.

### Instructions for Starting the Laravel Project
Prerequisites
- PHP: Version 8.1 or higher
- Composer: For managing PHP dependencies
- MySQL: Relational database (or another database supported by Laravel)
- Node.js and NPM: For managing frontend dependencies and compiling assets

### Step-by-Step Guide
1. Clone the Project Repository

```bash
git clone https://github.com/JoaoPedroRMatias/talk_with_michael_scott.git
cd talk_with_michael_scott
```

2. Install Laravel Dependencies
```bash
composer install
```

3. Set Up the Database
```bash
php artisan migrate
```

4. Start the Development Server
```bash
php artisan serve
```

The project will be accessible at http://localhost:8000.




