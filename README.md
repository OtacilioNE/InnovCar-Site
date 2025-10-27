# 🚗 INNOV CAR — Sistema de Agendamento Online

Sistema completo de **agendamento online** desenvolvido para a **INNOV CAR Estética Automotiva**, utilizando **arquitetura de microsserviços** com **Docker Compose**.  
O projeto foi criado para oferecer uma experiência moderna e integrada, com autenticação social, interface responsiva e gerenciamento eficiente de agendamentos.

---

## 🧩 Tecnologias Utilizadas

**Backend**
- [Laravel 11 (PHP 8.2)](https://laravel.com/)
- [PostgreSQL](https://www.postgresql.org/)
- [Laravel Sanctum](https://laravel.com/docs/sanctum) e [Laravel Socialite](https://laravel.com/docs/socialite)

**Frontend**
- [React](https://react.dev/) + [Vite](https://vitejs.dev/) + [TypeScript](https://www.typescriptlang.org/)
- [Tailwind CSS](https://tailwindcss.com/) com **paleta de cores personalizada INNOV CAR**

**Infraestrutura**
- [Docker](https://www.docker.com/) + [Docker Compose](https://docs.docker.com/compose/)

---

## ⚙️ Pré-requisitos

Antes de iniciar o projeto, certifique-se de ter instalado:

1. 🐳 **Docker Desktop** (com Docker Compose habilitado)  
2. 🟢 **Node.js** e **npm**  
3. 🎼 **Composer** (para gerenciar dependências do Laravel)

---

## 🧭 Estrutura do Projeto

A estrutura principal do projeto se encontra dentro da pasta raiz `/lavajato`:

```
/lavajato
├── backend/        # API Laravel + PostgreSQL
├── frontend/       # Interface React + Tailwind
├── docker-compose.yml
└── .env
```

---

## 🚀 Guia de Inicialização em 4 Passos

Execute todos os comandos a partir da **pasta raiz** (`/lavajato`).

---

### 🧱 Passo 1 — Configuração Inicial

#### 1. Criar o arquivo de variáveis de ambiente do Docker
```bash
touch .env
```

#### 2. Instalar o Laravel (Backend)
```bash
cd backend
composer create-project laravel/laravel .
```

#### 3. Copiar o arquivo de ambiente e criar a migração inicial
```bash
cp .env.example .env
php artisan make:migration create_services_table
# Crie também as migrações: appointments, payment, etc.
```

#### 4. Voltar para a pasta raiz
```bash
cd ..
```

#### 5. Instalar e configurar o Frontend (React + Tailwind)
```bash
cd frontend
npm create vite@latest . -- --template react-ts
npm install
npm install -D tailwindcss postcss autoprefixer
npx tailwindcss init -p
```

💡 *Não esqueça de configurar o `tailwind.config.js` com as cores da marca INNOV CAR.*

---

### ⚙️ Passo 2 — Configuração do Backend

#### 1. Acessar o contêiner Laravel
```bash
docker exec -it laravel-app sh
```

#### 2. Gerar APP_KEY e corrigir permissões
```bash
chmod -R 775 storage bootstrap/cache
php artisan key:generate
```

#### 3. Instalar Socialite e limpar cache
```bash
composer require laravel/socialite
composer dump-autoload
php artisan optimize:clear
```

#### 4. Executar migrações e seeders
```bash
php artisan migrate:fresh --seed
```

*(Este comando limpa o banco, recria as tabelas e popula o catálogo inicial.)*

#### 5. Sair do contêiner
```bash
exit
```

---

## 🧠 Dicas de Desenvolvimento

- Após alterar variáveis do `.env`, reinicie os contêineres:
  ```bash
  docker-compose down && docker-compose up -d --build
  ```
- Use o **Hot Reload do Vite** para atualizar automaticamente o frontend.
- Teste consultas no Laravel usando:
  ```bash
  php artisan tinker
  ```

---

## 🧰 Possíveis Melhorias Futuras

- Integração com **gateway de pagamento** (ex: Mercado Pago, Stripe)  
- Dashboard administrativo com **gráficos de agendamentos**  
- Notificações automáticas via **WhatsApp ou e-mail**  
- Suporte multi-empresa (multi-tenant)  
- Histórico de agendamentos com relatórios detalhados  

---

## 👨‍💻 Autor

**Otacílio Neto**  
Desenvolvedor Full Stack • Estudante de ADS  

## 📄 Licença

Este projeto está licenciado sob a [MIT License](LICENSE).
