Laravel Skeleton (API Restfull)
========================================================
Este documento visa auxiliar na configuração e no uso do projeto

- PHP 8.1+
- Laravel 9.0+
- Docker
- Git Hooks

---

- Sail: Orquestrador de containers do laravel
- JWT: Json Web Token
- PHP Insights: Code check
- Laravel IDE Helper Generator: Gerador de DOC para melhor interpretação da IDE
- Telescope: Painel de monitoramento geral do sistema
- Horizon: Painel de visualização das filas
- Scribe: Documentação da API
- Laravel WebSockets & Pusher: Broadcast de dados
- Socialite: Login com redes sociais

Instalação e configuração da API
---

* Clonar projeto do GIT: `git clone git@github.com:PauloFelipeM/laravel-skeleton.git`
* Implantar Hooks do Git: `git config core.hooksPath ./git-hooks/`
* Criar arquivo ".env" com as configurações do arquivo ".env.example"
* Instalar dependências: `composer install`
* Criar ALIAS do sail: `alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'`
* Subir containers: `sail up -d `
* Verificar estado dos containers: `sail ps`
* Rodar migrations: `sail php artisan migrate`
* Rodar seeds: `sail php artisan db:seed`

Comandos do Sail
---

### Criando um ALIAS para o sail

`alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'`
`alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail`

### Executar os containers em segundo plano

`sail up -d `

### Verificar estado dos containers

`sail ps`

```
NAME                              COMMAND                  SERVICE             STATUS              PORTS
laravel-skeleton-laravel.test-1   "start-container"        laravel.test        running             0.0.0.0:80->80/tcp, :::80->80/tcp, 0.0.0.0:5173->5173/tcp, :::5173->5173/tcp, 8000/tcp
laravel-skeleton-mysql-1          "/entrypoint.sh mysq…"   mysql               running (healthy)   0.0.0.0:3306->3306/tcp, :::3306->3306/tcp, 33060-33061/tcp
laravel-skeleton-redis-1          "docker-entrypoint.s…"   redis               running (healthy)   0.0.0.0:6379->6379/tcp, :::6379->6379/tcp
```

Implantar Hooks do Git
---
`git config core.hooksPath ./git-hooks/`

Instalação dos pacotes via composer
---
`sail composer install`

Migrar as tabelas
---

### Rodar migrations

`sail php artisan migrate`

### Rodar seeds

`sail php artisan db:seed`

### Iniciar HORIZON (Gerenciador de filas usando REDIS)

`sail php artisan horizon`

Url: http://localhost:8005/horizon

Verificação de Código com PHPInsights
---
`sail php artisan insights`

Gerar documentação da API com Scribe
----
**Gerar a documentação**

`sail php artisan scribe:generate`

URL: http://localhost:8005/docs

Gerar documentação PHP para IDE laravel
----
**Comentar os relacionamentos que não estão feitos ainda para não gerar erros**

`php artisan ide-helper:models -W App\\Models\\<MODEL_NAME>`

Reconfigurar o cache
---

```
sail php artisan config:cache
sail php artisan cache:clear
sail php artisan cache:optimize
```

Comandos do Artisan
---

```
sail php artisan key:generate
sail php artisan route:cache
sail php artisan make:migration create_<plural_table_name>_table --create=<plural_table_name>
sail php artisan jwt:secret
```

URLs dos paineis de debug
---

### Telescope

http://localhost:8005/telescope

### Scribe

http://localhost:8005/docs

### Horizon

http://localhost:8005/horizon

### Laravel-Websockets

http://localhost:8005/laravel-websockets

