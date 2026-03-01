# 🐳 Docker Setup Guide

## Quick Start

### 1. Prerequisites
- Docker Desktop (Windows/Mac) or Docker Engine (Linux)
- Docker Compose v2.0+
- Git

### 2. Initial Setup

```bash
# Clone repository
git clone https://github.com/JakubPatkowski/ProjektAngularLaravell
cd ProjektAngularLaravell

# Copy environment file
cp .env.docker.example .env

# Edit .env and set secure passwords
nano .env
```

### 3. Start Application

```bash
# Build and start all services
docker compose up -d --build

# Or using Makefile
make init
```

### 4. Access Application

| Service  | URL                        |
|----------|----------------------------|
| Frontend | http://localhost:4200      |
| Backend  | http://localhost:8000      |
| API Docs | http://localhost:8000/api  |

---

## 📋 Common Commands

### Using Docker Compose

```bash
# Start services
docker compose up -d

# Stop services
docker compose down

# View logs
docker compose logs -f

# Rebuild images
docker compose up -d --build

# Remove everything (including data)
docker compose down -v
```

### Using Makefile (recommended)

```bash
make help       # Show all commands
make up         # Start containers
make down       # Stop containers
make logs       # View all logs
make shell-b    # Backend shell access
make migrate    # Run migrations
make fresh      # Fresh migration + seed
make clean      # Remove containers & volumes
```

---

## 🔧 Configuration

### Environment Variables

| Variable        | Description              | Default         |
|-----------------|--------------------------|-----------------|
| `APP_ENV`       | Environment mode         | `production`    |
| `APP_DEBUG`     | Debug mode               | `false`         |
| `APP_KEY`       | Laravel encryption key   | *required*      |
| `DB_DATABASE`   | Database name            | `housing_prices`|
| `DB_USERNAME`   | Database user            | `laravel`       |
| `DB_PASSWORD`   | Database password        | *required*      |
| `BACKEND_PORT`  | Backend exposed port     | `8000`          |
| `FRONTEND_PORT` | Frontend exposed port    | `4200`          |

### Generate APP_KEY

```bash
# Method 1: Using Laravel
docker compose exec backend php artisan key:generate --show

# Method 2: Using OpenSSL
echo "base64:$(openssl rand -base64 32)"
```

---

## 🗄️ Database

### Automatic Seeding
The application automatically seeds data on first startup. **Data is only seeded if tables are empty** - restarts won't duplicate data.

### Manual Database Operations

```bash
# Run migrations
docker compose exec backend php artisan migrate

# Seed database
docker compose exec backend php artisan db:seed

# Fresh migration (WARNING: deletes all data!)
docker compose exec backend php artisan migrate:fresh --seed

# Access MySQL directly
docker compose exec mysql mysql -u root -p
```

---

## 🏗️ Architecture

```
┌─────────────────────────────────────────────────────────┐
│                    Docker Network                        │
│  ┌─────────────┐  ┌─────────────┐  ┌─────────────────┐  │
│  │  Frontend   │  │   Backend   │  │      MySQL      │  │
│  │   (nginx)   │──│   (PHP)     │──│    Database     │  │
│  │  Port 4200  │  │  Port 8000  │  │    Port 3306    │  │
│  └─────────────┘  └─────────────┘  └─────────────────┘  │
└─────────────────────────────────────────────────────────┘
```

---

## 🐛 Troubleshooting

### Container won't start
```bash
# Check logs
docker compose logs backend
docker compose logs mysql

# Restart with fresh build
docker compose down -v
docker compose up -d --build
```

### Database connection issues
```bash
# Verify MySQL is healthy
docker compose exec mysql mysqladmin ping -h localhost -u root -p

# Check backend can reach MySQL
docker compose exec backend php artisan db:monitor
```

### Permission issues (Linux)
```bash
# Fix storage permissions
sudo chown -R $USER:$USER server/storage server/bootstrap/cache
chmod -R 775 server/storage server/bootstrap/cache
```

### Port already in use
```bash
# Change ports in .env
BACKEND_PORT=8001
FRONTEND_PORT=4201
```

---

## 🚀 Production Deployment

For production, consider:

1. **Use managed database** (AWS RDS, CloudSQL, etc.)
2. **Set proper environment variables**
3. **Enable HTTPS** (SSL certificates)
4. **Configure proper CORS settings**
5. **Set up monitoring** (health checks, logging)

```bash
# Example production deployment
docker compose -f docker-compose.yml -f docker-compose.prod.yml up -d
```

---

## 📁 File Structure

```
project/
├── docker-compose.yml          # Main compose file
├── .env.docker.example         # Environment template
├── Makefile                    # Convenience commands
├── server/
│   ├── Dockerfile              # Backend image
│   ├── docker-entrypoint.sh    # Startup script
│   └── .dockerignore
├── client/
│   ├── Dockerfile              # Frontend image
│   ├── nginx.conf              # Nginx configuration
│   └── .dockerignore
└── .github/
    └── workflows/
        ├── ci.yml              # CI/CD pipeline
        └── docker-test.yml     # Docker integration tests
```
