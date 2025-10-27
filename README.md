# 📦 Sistema de Controle de Estoque

Sistema web para gerenciamento de estoque de produtos desenvolvido com Laravel.

## 🚀 Tecnologias

- **Laravel 11.x** - Framework PHP
- **MySQL** - Banco de dados
- **Bootstrap 3.4.1** - Framework CSS (via CDN)
- **Bootstrap Icons** - Ícones
- **Blade** - Template engine

## 📋 Pré-requisitos

- PHP 8.2+
- Composer
- MySQL 5.7+ ou MariaDB
- Servidor web (Apache/Nginx) ou `php artisan serve`

## 🔧 Instalação

1. **Clone o repositório**
   ```bash
   git clone https://github.com/BrunoViola/controle-de-estoque.git
   cd controle-de-estoque
   ```

2. **Instale as dependências**
   ```bash
   composer install
   ```

3. **Configure o ambiente**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Configure o banco de dados no `.env`**
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=seu_banco
   DB_USERNAME=seu_usuario
   DB_PASSWORD=sua_senha
   ```

5. **Execute as migrations**
   ```bash
   php artisan migrate
   ```

6. **Inicie o servidor**
   ```bash
   php artisan serve
   ```

7. **Acesse a aplicação**
   ```
   http://localhost:8000
   ```

## 📁 Estrutura do Projeto

```
app/
├── Http/Controllers/
│   └── ProdutoController.php    # Controlador de produtos
├── Models/
│   └── Produto.php               # Model do produto
resources/
├── views/
│   ├── layout/
│   │   └── principal.blade.php   # Layout principal
│   └── produto/
│       ├── listagem.blade.php    # Listagem de produtos
│       ├── formulario.blade.php  # Formulário de cadastro
│       └── detalhesProduto.blade.php  # Detalhes do produto
routes/
└── web.php                       # Rotas da aplicação
```

## 🛣️ Rotas

| Método | URI | Nome | Ação |
|--------|-----|------|------|
| GET | `/` | home | Redireciona para `/produtos` |
| GET | `/produtos` | produtos.index | Lista todos os produtos |
| GET | `/produtos/novo` | produtos.create | Exibe formulário de cadastro |
| POST | `/produtos/cadastrar` | produtos.store | Salva novo produto |
| GET | `/produtos/mostra/{id}` | produtos.show | Exibe detalhes do produto |

## 💾 Banco de Dados

### Tabela: `produtos`

| Campo | Tipo | Descrição |
|-------|------|-----------|
| id | INT (PK) | ID do produto |
| nome | VARCHAR(100) | Nome do produto |
| descricao | TEXT | Descrição do produto |
| valor | DECIMAL(10,2) | Preço do produto |
| quantidade | INT | Quantidade em estoque |
| created_at | TIMESTAMP | Data de criação |
| updated_at | TIMESTAMP | Data de atualização |

## 👨‍💻 Desenvolvedor

**Bruno Henrique Silva Viola**

## 📝 Licença

Este projeto é open source e está disponível sob a [Licença MIT](https://opensource.org/licenses/MIT).