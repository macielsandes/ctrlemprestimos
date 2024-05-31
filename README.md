<h1>CTRL EMPRÉSTIMOS</h1>

<p>Este aplicativo foi desenvolvido com o objetivo de permitir o gerenciamento de emprestimo de materiais</p>

## Requisitos do Projeto
* PHP 8.2 ou superior
* Composer 2.7 ou superior

<h2>O projeto</h2>

## Como rodar o projeto

Clonar repositório
```
git clone https://github.com/macielsandes/ctrlemprestimos.git
```

Acessar a pasta do projeto projeto

Instalar dependências
```
composer install 
```

Na pasta do projeto, criar um copia do .env.example para .env
```
cp .env.exemplo .env
``` 

No arquivo .env configurar o base de dados para o nome desejado. Exemplo: DB_DATABASE=ctrlemprestimos

Gerar a chave 
```
php artisan key:generate
```

Gerar as tabelas do banco de dados
```
php artisan migrate
```

