# Backend

#  Setup & Installation

This guide explains how to set up and run the project locally using **Docker and Docker Compose**.


## Prerequisites

Before starting, make sure you have installed:

- [Docker Engine](https://docs.docker.com/engine/install/)
- [Docker Compose](https://docs.docker.com/compose/install/)
- Git

Verify your installation:

```bash
docker --version
docker compose version
git --version
```

## Project Services

The Docker environment consists of the following services:

| Service | Description |
|---|---|
| Laravel Application | Runs the Laravel 13 backend |
| MySQL | Relational database |
| Docker Compose | Manages and connects all services |

## Installation & Setup

### 1. Clone the Repository

```bash
git clone https://github.com/graduation-project-26-27/Backend.git
cd Backend
```

### 2. Configure Environment Variables

Copy the example environment file:

```bash
cp .env.example .env
```

Configure the database settings in your `.env` file:

```env
APP_NAME="Graduation Project"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=secret
```

**Important:** The database host must be `mysql`, which is the MySQL service name defined in `docker-compose.yml`.

### 3. Build Docker Images

Build the application image:

```bash
docker compose build
```

### 4. Start Docker Containers

Start all services in detached mode:

```bash
docker compose up -d
```

### 5. Verify Running Containers

Check the status of all containers:

```bash
docker compose ps
```

View application logs:

```bash
docker compose logs -f app
```

### 6. Install Dependencies

If Composer dependencies are not already installed:

```bash
docker compose exec app composer install
```

### 7. Generate Application Key

```bash
docker compose exec app php artisan key:generate
```

### 8. Run Database Migrations

Create the required database tables:

```bash
docker compose exec app php artisan migrate
```

### 9. Clear Application Cache

```bash
docker compose exec app php artisan optimize:clear
```

## Access the Application

Once all services are running, access the Laravel application through:

**Application URL:** http://localhost:8000
