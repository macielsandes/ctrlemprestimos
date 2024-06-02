<h1>CTRL EMPRÉSTIMOS</h1>

Este projeto permite o gerenciamento de empréstimo de materiais.

# Requisitos do Projeto
* PHP 8.2 ou superior
* Composer 2.7 ou superior
* Mariadb 10.4 ou superior

## Como começar o projeto


Clonar o repositório
```
git clone https://github.com/macielsandes/ctrlemprestimos.git
```

1. Acessar a pasta do projeto 
2. Instalar as dependências do projeto
```
composer install 
```
3. Criar uma copia do .env.example para criar os arquivos de configuração
```
cp .env.exemplo .env
``` 
No arquivo .env configurar o base de dados para o nome desejado. Exemplo: DB_DATABASE=ctrlemprestimos

Gerar a chave de configuração
```
php artisan key:generate
```
## Modo desenvolvimento 
As opção a seguir são uteis para execução em modo desenvolvimento

Gerar as tabelas do banco de dados
```
php artisan migrate --seed
```
Executar o server local da aplicação 

```
php artisan serve
```

## Modo Produção
As opção a seguir são uteis para execução em modo produção
```
php artisan migrate
```

<h2> Tela inicial do projeto</h2>