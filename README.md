# 🚀 INNOV CAR - Sistema de Agendamento Online

Este projeto é um sistema de agendamento online completo para a **INNOV CAR Estética Automotiva**, utilizando uma arquitetura de microsserviços com Docker Compose.

- **Backend:** Laravel (PHP 8.2) + PostgreSQL + Laravel Sanctum/Socialite (Login Social).
- **Frontend:** React (Vite/TypeScript) + Tailwind CSS (com paleta de cores customizada).

## 🛠️ Pré-requisitos

Certifique-se de ter instalado em sua máquina:
1.  **Docker Desktop** (com Docker Compose).
2.  **Node.js** e **npm** (para o Frontend React).
3.  **Composer** (para instalação inicial do Laravel).

## 💡 Estrutura do Projeto

Acesse a pasta raiz do seu projeto (`/lavajato`).

## ⚙️ Guia de Inicialização em 4 Passos (Comandos)

Execute todos os comandos no terminal, a partir da **pasta raiz** do projeto (`/lavajato`).

### Passo 1: Configuração Inicial e Instalações

### 1. Criar o arquivo de variáveis de ambiente do Docker
touch .env

### 2. Navegar para a pasta do Backend e instalar o Laravel
cd backend
composer create-project laravel/laravel .

### 3. Copiar o arquivo .env de exemplo e criar a migração dos serviços
cp .env.example .env
php artisan make:migration create_services_table
# Crie as migrações restantes (appointments, payment, etc.)

### 4. Voltar para a pasta raiz
cd ..

### 5. Instalar o projeto Frontend (React/Vite) e configurar o Tailwind
cd frontend
npm create vite@latest . -- --template react-ts
npm install
npm install -D tailwindcss postcss autoprefixer
npx tailwindcss init -p
### (Neste ponto, configure o tailwind.config.js com as cores da Innov Car)
cd ..

## Configuração do Back-End

### 1. Acessar o Contêiner Laravel (backend)
docker exec -it laravel-app sh

### 2. **DENTRO DO CONTÊINER (sh):** Gerar APP_KEY e corrigir permissões
chmod -R 775 storage bootstrap/cache
php artisan key:generate

### 3. **DENTRO DO CONTÊINER (sh):** Instalar Laravel Socialite e limpar cache
composer require laravel/socialite
composer dump-autoload
php artisan optimize:clear

### 4. **DENTRO DO CONTÊINER (sh):** Rodar Migrações e Seeder
# O comando abaixo limpa o DB, cria as tabelas (services, appointments, etc.) e popula o catálogo.
php artisan migrate:fresh --seed

### 5. Sair do Contêiner
exit
