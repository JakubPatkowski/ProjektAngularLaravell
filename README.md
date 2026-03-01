<div align="center">

# 🏠 Polish Housing Price Comparator

### Comprehensive application for analyzing and visualizing real estate prices with NBP data

[![Angular](https://img.shields.io/badge/Angular-17.0.2-DD0031?style=for-the-badge&logo=angular&logoColor=white)](https://angular.io/)
[![Laravel](https://img.shields.io/badge/Laravel-10.48.11-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com/)
[![PHP](https://img.shields.io/badge/PHP-8.2-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net/)
[![TypeScript](https://img.shields.io/badge/TypeScript-5.2-3178C6?style=for-the-badge&logo=typescript&logoColor=white)](https://typescriptlang.org/)
[![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://mysql.com/)

[![License](https://img.shields.io/badge/License-MIT-green?style=for-the-badge)](LICENSE)
[![Docker](https://img.shields.io/badge/Docker-Ready-2496ED?style=for-the-badge&logo=docker&logoColor=white)](#-docker)
[![CI](https://img.shields.io/github/actions/workflow/status/JakubPatkowski/ProjektAngularLaravell/ci.yml?branch=main&style=for-the-badge&label=CI)](https://github.com/JakubPatkowski/ProjektAngularLaravell/actions)

[Features](#-main-features) •
[Demo](#-screenshots) •
[Installation](#-installation) •
[API](#-api-reference) •
[Architecture](#-architecture)

</div>

---

## 📋 Table of Contents

- [About the Project](#-about-the-project)
- [Main Features](#-main-features)
- [Screenshots](#-screenshots)
- [Tech Stack](#-tech-stack)
- [Architecture](#-architecture)
- [Installation](#-installation)
  - [Docker (recommended)](#docker-recommended)
  - [Local Installation](#local-installation)
- [Configuration](#-configuration)
- [API Reference](#-api-reference)
- [Project Structure](#-project-structure)
- [Database](#-database)
- [Available Cities](#-available-cities)
- [Data Sources](#-data-sources)
- [Roadmap](#-roadmap)
- [Contributing](#-contributing)
- [License](#-license)
- [Author](#-author)

---

## 📖 About the Project

**Polish Housing Price Comparator** is a SPA (Single Page Application) web application designed for comprehensive analysis and visualization of residential real estate prices in Poland. The application uses official data from the National Bank of Poland (NBP), covering the period from Q3 2006 to Q4 2023.

The project was created as a solution to the problem of scattered and hard-to-access housing price data across different Polish cities. Thanks to an intuitive user interface and interactive charts, analyzing price trends becomes simple and clear.

### Why this project?

- 📊 **Data centralization** - all price data from 17 cities in one place
- 📈 **Trend visualization** - interactive charts showing price changes over time
- 🔄 **Comparison** - ability to compare two cities side by side
- 💹 **Macroeconomic context** - housing prices against NBP interest rates
- 📥 **Data export** - download datasets in JSON and XML formats

---

## ✨ Main Features

### 📊 Data Visualization
- Interactive line charts using the ApexCharts library
- Dynamic real-time chart updates
- Tooltips with detailed data point information
- Zoom and navigation capabilities on charts

### 🏙️ City Analysis
- Data for **17 largest Polish cities**
- Aggregates for city groups (7, 9, 10 cities, 6 cities excluding Warsaw)
- Comparison of two selected cities on one chart
- Time range filtering (from Q3 2006 to Q4 2023)

### 📈 Market Segmentation
- **Primary market** - new apartments from developers
- **Secondary market** - pre-owned apartments
- **Asking prices** - prices listed by sellers
- **Transaction prices** - actual sale prices

### 💹 Interest Rates
- Housing prices compared with NBP reference rates
- Analysis of monetary policy impact on the real estate market
- Historical interest rate data

### 📥 Data Export
- Download data in **JSON** format
- Download data in **XML** format
- Filter exported data by time range

### 🔐 User System
- New user registration
- Login with JWT token (Laravel Sanctum)
- Authorization for data access
- Secure password storage (bcrypt)

---

## 📸 Screenshots

### Home Page
<!-- TODO: Add home page screenshot -->
<div align="center">
  <img src="docs/screenshots/home.png" alt="Home page" width="800">
  <p><em>Home page with navigation and application description</em></p>
</div>

### Search Panel
<!-- TODO: Add search panel screenshot -->
<div align="center">
  <img src="docs/screenshots/search-panel.png" alt="Search panel" width="800">
  <p><em>Analysis parameter selection form: city, market type, date range</em></p>
</div>

### Comparison Chart
<!-- TODO: Add chart screenshot -->
<div align="center">
  <img src="docs/screenshots/chart.png" alt="Comparison chart" width="800">
  <p><em>Interactive ApexCharts chart with housing prices and interest rates</em></p>
</div>

### Two City Comparison
<!-- TODO: Add comparison screenshot -->
<div align="center">
  <img src="docs/screenshots/comparison.png" alt="City comparison" width="800">
  <p><em>Housing price comparison for two selected cities</em></p>
</div>

### Data Table
<!-- TODO: Add table screenshot -->
<div align="center">
  <img src="docs/screenshots/data-table.png" alt="Data table" width="800">
  <p><em>Detailed price data table for all cities</em></p>
</div>

### Login Panel
<!-- TODO: Add login screenshot -->
<div align="center">
  <img src="docs/screenshots/login.png" alt="Login panel" width="400">
  <p><em>User login form</em></p>
</div>

### Responsiveness
<!-- TODO: Add mobile version screenshot -->
<div align="center">
  <img src="docs/screenshots/mobile.png" alt="Mobile version" width="300">
  <p><em>Application in mobile version</em></p>
</div>

---

## 🛠️ Tech Stack

### Frontend

| Technology | Version | Purpose |
|------------|---------|---------|
| **Angular** | 17.0.2 | SPA framework, components, routing |
| **TypeScript** | 5.2.2 | Static typing, interfaces |
| **RxJS** | 7.8.0 | Reactive programming, Observables |
| **ApexCharts** | 3.49.1 | Data visualization, charts |
| **ng-apexcharts** | 1.10.0 | Angular wrapper for ApexCharts |
| **Bootstrap** | 5.3.3 | CSS framework, responsiveness |
| **Angular CLI** | 17.0.2 | Build, development server |

### Backend

| Technology | Version | Purpose |
|------------|---------|---------|
| **Laravel** | 10.48.11 | PHP framework, REST API |
| **PHP** | 8.2.12 | Server runtime |
| **Laravel Sanctum** | - | Token authentication |
| **league/csv** | 9.16 | CSV file parsing |
| **Eloquent ORM** | - | Object-relational mapping |

### Database

| Technology | Version | Purpose |
|------------|---------|---------|
| **MySQL** | 8.0 | Relational database |
| **Migrations** | - | Schema versioning |
| **Seeders** | - | Data initialization |

### DevOps & Tooling

| Technology | Purpose |
|------------|---------|
| **Docker** | Application containerization |
| **Docker Compose** | Container orchestration |
| **GitHub Actions** | CI/CD pipeline |
| **nginx** | HTTP server, reverse proxy |
| **Composer** | PHP package manager |
| **npm** | Node.js package manager |

---

## 🏗️ Architecture

### Architecture Diagram

```
┌────────────────────────────────────────────────────────────────────────────┐
│                              CLIENT (Browser)                              │
└─────────────────────────────────────┬──────────────────────────────────────┘
                                      │
                                      │ HTTP/HTTPS
                                      ▼
┌────────────────────────────────────────────────────────────────────────────┐
│                           FRONTEND (Angular 17)                            │
│  ┌─────────────┐  ┌─────────────┐  ┌─────────────┐  ┌─────────────┐       │
│  │    Home     │  │   Login     │  │  Register   │  │    Nav      │       │
│  │  Component  │  │  Component  │  │  Component  │  │  Component  │       │
│  └─────────────┘  └─────────────┘  └─────────────┘  └─────────────┘       │
│  ┌─────────────┐  ┌─────────────┐  ┌─────────────┐                        │
│  │ Draw Chart  │  │ Data Table  │  │   Search    │                        │
│  │  Component  │  │  Component  │  │   Options   │                        │
│  └──────┬──────┘  └──────┬──────┘  └──────┬──────┘                        │
│         │                │                │                               │
│         └────────────────┼────────────────┘                               │
│                          ▼                                                │
│  ┌───────────────────────────────────────────────────────────────────┐   │
│  │                         SERVICES                                   │   │
│  │  ┌─────────────────┐  ┌─────────────────┐  ┌─────────────────┐    │   │
│  │  │  AuthService    │  │ BackendService  │  │  AuthGuard      │    │   │
│  │  │  (JWT tokens)   │  │  (HTTP calls)   │  │  (Route guard)  │    │   │
│  │  └─────────────────┘  └─────────────────┘  └─────────────────┘    │   │
│  └───────────────────────────────────────────────────────────────────┘   │
│                          │                                                │
│                          │ Port 4200                                      │
└──────────────────────────┼────────────────────────────────────────────────┘
                           │
                           │ REST API (JSON)
                           │ Authorization: Bearer <token>
                           ▼
┌────────────────────────────────────────────────────────────────────────────┐
│                          BACKEND (Laravel 10)                              │
│                              Port 8000                                     │
│  ┌───────────────────────────────────────────────────────────────────┐    │
│  │                           ROUTES                                   │    │
│  │   /api/register  /api/login  /api/logout  /api/get_data  ...      │    │
│  └───────────────────────────────────────────────────────────────────┘    │
│                          │                                                 │
│                          ▼                                                 │
│  ┌───────────────────────────────────────────────────────────────────┐    │
│  │                        MIDDLEWARE                                  │    │
│  │   CORS │ Sanctum Auth │ Throttle │ VerifyCSRF                     │    │
│  └───────────────────────────────────────────────────────────────────┘    │
│                          │                                                 │
│                          ▼                                                 │
│  ┌───────────────────────────────────────────────────────────────────┐    │
│  │                       CONTROLLERS                                  │    │
│  │  ┌─────────────────┐  ┌─────────────────┐  ┌─────────────────┐    │    │
│  │  │ AuthController  │  │ PriceTable      │  │  ApiController  │    │    │
│  │  │ register/login  │  │ Controller      │  │ interest rates  │    │    │
│  │  └─────────────────┘  │ getData/export  │  └─────────────────┘    │    │
│  │                       └─────────────────┘                          │    │
│  └───────────────────────────────────────────────────────────────────┘    │
│                          │                                                 │
│                          ▼                                                 │
│  ┌───────────────────────────────────────────────────────────────────┐    │
│  │                         MODELS                                     │    │
│  │  ┌─────────────────┐  ┌─────────────────┐                         │    │
│  │  │      User       │  │   PriceTable    │                         │    │
│  │  │  (Sanctum)      │  │  (Dynamic table)│                         │    │
│  │  └─────────────────┘  └─────────────────┘                         │    │
│  └───────────────────────────────────────────────────────────────────┘    │
│                          │                                                 │
└──────────────────────────┼─────────────────────────────────────────────────┘
                           │
                           │ Eloquent ORM
                           ▼
┌────────────────────────────────────────────────────────────────────────────┐
│                            MYSQL DATABASE                                  │
│                              Port 3306                                     │
│  ┌─────────────────────────────────────────────────────────────────────┐  │
│  │  ┌───────────────┐  ┌───────────────────────────────────────────┐   │  │
│  │  │    users      │  │           PRICE TABLES                    │   │  │
│  │  ├───────────────┤  │  ┌─────────────────────────────────────┐  │   │  │
│  │  │ id            │  │  │ rynek_pierwotny_ceny_ofertowe       │  │   │  │
│  │  │ name          │  │  ├─────────────────────────────────────┤  │   │  │
│  │  │ email         │  │  │ rynek_pierwotny_ceny_transakcyjne   │  │   │  │
│  │  │ password      │  │  ├─────────────────────────────────────┤  │   │  │
│  │  │ created_at    │  │  │ rynek_wtorny_ceny_ofertowe          │  │   │  │
│  │  │ updated_at    │  │  ├─────────────────────────────────────┤  │   │  │
│  │  └───────────────┘  │  │ rynek_wtorny_ceny_transakcyjne      │  │   │  │
│  │                     │  └─────────────────────────────────────┘  │   │  │
│  │  ┌───────────────┐  └───────────────────────────────────────────┘   │  │
│  │  │ personal_     │                                                  │  │
│  │  │ access_tokens │  Each price table contains:                      │  │
│  │  │ (Sanctum)     │  - Kwartal (PK)                                  │  │
│  │  └───────────────┘  - 17 city columns                               │  │
│  │                     - 4 aggregates (7/9/10/6 cities)                │  │
│  └─────────────────────────────────────────────────────────────────────┘  │
└────────────────────────────────────────────────────────────────────────────┘
```

### Data Flow

```
┌─────────────┐     ┌─────────────┐     ┌─────────────┐     ┌─────────────┐
│    User     │────▶│   Angular   │────▶│   Laravel   │────▶│    MySQL    │
│  (Browser)  │     │  Frontend   │     │   Backend   │     │  Database   │
└─────────────┘     └─────────────┘     └─────────────┘     └─────────────┘
      │                   │                   │                   │
      │ 1. Select filters │                   │                   │
      │──────────────────▶│                   │                   │
      │                   │ 2. HTTP GET       │                   │
      │                   │   + Bearer token  │                   │
      │                   │──────────────────▶│                   │
      │                   │                   │ 3. SQL Query      │
      │                   │                   │──────────────────▶│
      │                   │                   │                   │
      │                   │                   │ 4. Result Set     │
      │                   │                   │◀──────────────────│
      │                   │ 5. JSON Response  │                   │
      │                   │◀──────────────────│                   │
      │ 6. Chart/Table    │                   │                   │
      │◀──────────────────│                   │                   │
```

---

## 🚀 Installation

### System Requirements

| Requirement | Minimum Version |
|-------------|-----------------|
| Docker | 20.10+ |
| Docker Compose | 2.0+ |
| Git | 2.0+ |

**Alternatively (local installation):**

| Requirement | Version |
|-------------|---------|
| Node.js | 20.x LTS |
| npm | 10.x |
| PHP | 8.2+ |
| Composer | 2.x |
| MySQL | 8.0+ |

---

### Docker (recommended)

The fastest way to run the application:

```bash
# 1. Clone the repository
git clone https://github.com/JakubPatkowski/ProjektAngularLaravell.git
cd ProjektAngularLaravell

# 2. Configure environment
cp server/.env.example server/.env

# 3. Start containers
docker-compose up -d

# 4. Initialize database (on first run)
docker-compose exec backend php artisan migrate --seed

# 5. Generate application key
docker-compose exec backend php artisan key:generate
```

**Application available at:**
- 🌐 Frontend: http://localhost:4200
- 🔌 Backend API: http://localhost:8000/api
- 🗄️ MySQL: localhost:3306

**Useful Docker commands:**

```bash
# Stop containers
docker-compose down

# View logs
docker-compose logs -f

# Restart containers
docker-compose restart

# Enter backend container
docker-compose exec backend bash

# Reset database
docker-compose exec backend php artisan migrate:fresh --seed
```

---

### Local Installation

<details>
<summary>📦 Click to expand local installation instructions</summary>

#### Step 1: Clone the repository

```bash
git clone https://github.com/JakubPatkowski/ProjektAngularLaravell.git
cd ProjektAngularLaravell
```

#### Step 2: Configure MySQL database

```sql
-- Create database
CREATE DATABASE housing_prices CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Create user
CREATE USER 'laravel'@'localhost' IDENTIFIED BY 'your_password';
GRANT ALL PRIVILEGES ON housing_prices.* TO 'laravel'@'localhost';
FLUSH PRIVILEGES;
```

#### Step 3: Backend (Laravel)

```bash
# Navigate to server directory
cd server

# Install PHP dependencies
composer install

# Copy configuration file
cp .env.example .env

# Generate application key
php artisan key:generate

# Configure database connection in .env
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=housing_prices
# DB_USERNAME=laravel
# DB_PASSWORD=your_password

# Run migrations
php artisan migrate

# Load initial data
php artisan db:seed

# Start development server
php artisan serve
```

#### Step 4: Frontend (Angular)

```bash
# Open new terminal and navigate to client directory
cd client

# Install Node.js dependencies
npm install

# Start development server
ng serve
# or
npm start
```

#### Step 5: Access the application

- Frontend: http://localhost:4200
- Backend API: http://localhost:8000/api

</details>

---

### Startup Scripts

The project includes ready-to-use startup scripts:

**Windows:**
```batch
:: Start backend
run_server.bat

:: Start frontend (in separate window)
run_client.bat
```

**Linux/macOS:**
```bash
# Start backend
./run_server.sh

# Start frontend (in separate terminal)
./run_client.sh
```

---

## ⚙️ Configuration

### Backend Environment Variables (.env)

```env
# Application
APP_NAME="Housing Price Comparator"
APP_ENV=local
APP_KEY=base64:your-generated-key
APP_DEBUG=true
APP_URL=http://localhost:8000

# Database
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=housing_prices
DB_USERNAME=laravel
DB_PASSWORD=secret

# Sanctum
SANCTUM_STATEFUL_DOMAINS=localhost:4200

# CORS
CORS_ALLOWED_ORIGINS=http://localhost:4200
```

### Frontend Configuration (environment.ts)

```typescript
// src/environments/environment.ts
export const environment = {
  production: false,
  apiUrl: 'http://127.0.0.1:8000/api'
};

// src/environments/environment.prod.ts
export const environment = {
  production: true,
  apiUrl: '/api'
};
```

---

## 📡 API Reference

### Authentication

All endpoints (except registration and login) require a token in the header:

```
Authorization: Bearer <token>
```

---

#### User Registration

```http
POST /api/register
```

**Request Body:**
```json
{
  "name": "John Smith",
  "email": "john@example.com",
  "password": "password123456",
  "password_confirmation": "password123456"
}
```

**Response (201 Created):**
```json
{
  "user": {
    "id": 1,
    "name": "John Smith",
    "email": "john@example.com",
    "created_at": "2024-01-15T10:30:00.000000Z"
  },
  "token": "1|abc123def456..."
}
```

**Validation:**
- `name`: required, string, max 255 characters
- `email`: required, email, unique
- `password`: required, min 12 characters, confirmed

---

#### Login

```http
POST /api/login
```

**Request Body:**
```json
{
  "email": "john@example.com",
  "password": "password123456"
}
```

**Response (200 OK):**
```json
{
  "user": {
    "id": 1,
    "name": "John Smith",
    "email": "john@example.com"
  },
  "token": "2|xyz789abc012..."
}
```

**Response (401 Unauthorized):**
```json
{
  "message": "Invalid credentials"
}
```

---

#### Logout

```http
POST /api/logout
Authorization: Bearer <token>
```

**Response (200 OK):**
```json
{
  "message": "Logged out successfully"
}
```

---

### Price Data

#### Get All Data

```http
GET /api/get_data?table_name={table_name}
Authorization: Bearer <token>
```

**Parameters:**

| Parameter | Type | Required | Description |
|-----------|------|----------|-------------|
| `table_name` | string | ✅ | Data table name |

**Available tables:**
- `rynek_pierwotny_ofertowe` (primary market asking prices)
- `rynek_pierwotny_transakcyjne` (primary market transaction prices)
- `rynek_wtorny_ofertowe` (secondary market asking prices)
- `rynek_wtorny_transakcyjne` (secondary market transaction prices)

**Response (200 OK):**
```json
[
  {
    "quarter": "III_2006",
    "prices": {
      "Bialystok": 2850,
      "Bydgoszcz": 2650,
      "Gdansk": 4200,
      "Warszawa": 6500,
      ...
    }
  },
  ...
]
```

---

#### Get Data in Time Range

```http
GET /api/get_data_in_range?table_name={table}&start_date={start}&end_date={end}
Authorization: Bearer <token>
```

**Parameters:**

| Parameter | Type | Required | Description |
|-----------|------|----------|-------------|
| `table_name` | string | ✅ | Table name |
| `start_date` | string | ✅ | Start date (format: `III_2006`) |
| `end_date` | string | ✅ | End date (format: `IV_2023`) |

**Date format:** `{quarter}_{year}` where quarter is: `I`, `II`, `III`, `IV`

---

#### Get City Data

```http
GET /api/get_data_city?table_name={table}&city={city}
Authorization: Bearer <token>
```

**Parameters:**

| Parameter | Type | Required | Description |
|-----------|------|----------|-------------|
| `table_name` | string | ✅ | Table name |
| `city` | string | ✅ | City name |

**Response (200 OK):**
```json
[
  { "quarter": "III_2006", "price": 6500 },
  { "quarter": "IV_2006", "price": 6750 },
  ...
]
```

---

#### Get City Data in Range

```http
GET /api/get_data_city_in_range?table_name={table}&city={city}&start_date={start}&end_date={end}
Authorization: Bearer <token>
```

**Parameters:**

| Parameter | Type | Required | Description |
|-----------|------|----------|-------------|
| `table_name` | string | ✅ | Table name |
| `city` | string | ✅ | City name |
| `start_date` | string | ✅ | Start date |
| `end_date` | string | ✅ | End date |

---

#### Get Interest Rates

```http
GET /api/get_intrest_rates
Authorization: Bearer <token>
```

**Response (200 OK):**
```json
[
  {
    "obowiazuje_od": "2006-01-01",
    "oprocentowanie": 4.50
  },
  {
    "obowiazuje_od": "2006-03-01",
    "oprocentowanie": 4.00
  },
  ...
]
```

---

### Error Codes

| Code | Description |
|------|-------------|
| 200 | Success |
| 201 | Created (registration) |
| 400 | Bad request (missing parameters, non-existent table) |
| 401 | Unauthorized |
| 422 | Validation error |
| 500 | Server error |

---

## 📂 Project Structure

```
ProjektAngularLaravell/
│
├── 📁 client/                          # Angular 17 Frontend
│   ├── 📁 src/
│   │   ├── 📁 app/
│   │   │   ├── 📁 home/                # Home page component
│   │   │   │   ├── home.component.ts
│   │   │   │   ├── home.component.html
│   │   │   │   └── home.component.scss
│   │   │   │
│   │   │   ├── 📁 login/               # Login component
│   │   │   │   ├── login.component.ts
│   │   │   │   ├── login.component.html
│   │   │   │   └── login.component.scss
│   │   │   │
│   │   │   ├── 📁 register/            # Registration component
│   │   │   │   ├── register.component.ts
│   │   │   │   ├── register.component.html
│   │   │   │   └── register.component.scss
│   │   │   │
│   │   │   ├── 📁 draw-chart/          # ApexCharts chart component
│   │   │   │   ├── draw-chart.component.ts
│   │   │   │   ├── draw-chart.component.html
│   │   │   │   └── draw-chart.component.scss
│   │   │   │
│   │   │   ├── 📁 data-table/          # Data table component
│   │   │   │   ├── data-table.component.ts
│   │   │   │   ├── data-table.component.html
│   │   │   │   └── data-table.component.scss
│   │   │   │
│   │   │   ├── 📁 search-options/      # Search filters component
│   │   │   │   ├── search-options.component.ts
│   │   │   │   ├── search-options.component.html
│   │   │   │   └── search-options.component.scss
│   │   │   │
│   │   │   ├── 📁 nav/                 # Navigation component
│   │   │   │   ├── nav.component.ts
│   │   │   │   ├── nav.component.html
│   │   │   │   └── nav.component.scss
│   │   │   │
│   │   │   ├── 📁 models/              # TypeScript models
│   │   │   │   ├── house-values.model.ts
│   │   │   │   ├── all-house-values.model.ts
│   │   │   │   └── interest-rates.model.ts
│   │   │   │
│   │   │   ├── 📁 services/            # Angular services
│   │   │   │   ├── auth.service.ts       # Authentication management
│   │   │   │   ├── auth-guard.service.ts # Route protection guard
│   │   │   │   └── backend.service.ts    # API communication
│   │   │   │
│   │   │   ├── app.component.ts
│   │   │   ├── app.config.ts
│   │   │   └── app.routes.ts
│   │   │
│   │   ├── 📁 environments/            # Environment configuration
│   │   │   ├── environment.ts
│   │   │   └── environment.prod.ts
│   │   │
│   │   ├── index.html
│   │   ├── main.ts
│   │   └── styles.scss
│   │
│   ├── angular.json                    # Angular CLI configuration
│   ├── package.json
│   ├── tsconfig.json
│   ├── Dockerfile
│   └── nginx.conf
│
├── 📁 server/                          # Laravel 10 Backend
│   ├── 📁 app/
│   │   ├── 📁 Console/
│   │   │   └── Kernel.php
│   │   │
│   │   ├── 📁 Exceptions/
│   │   │   └── Handler.php
│   │   │
│   │   ├── 📁 Http/
│   │   │   ├── 📁 Controllers/
│   │   │   │   ├── Controller.php
│   │   │   │   ├── AuthController.php      # Sanctum authentication
│   │   │   │   ├── PriceTableController.php # Price data API
│   │   │   │   └── ApiController.php       # Interest rates API
│   │   │   │
│   │   │   └── 📁 Middleware/
│   │   │       ├── Authenticate.php
│   │   │       ├── EncryptCookies.php
│   │   │       └── ...
│   │   │
│   │   ├── 📁 Models/
│   │   │   ├── User.php                 # User model
│   │   │   └── PriceTable.php           # Dynamic price table model
│   │   │
│   │   └── 📁 Providers/
│   │       └── ...
│   │
│   ├── 📁 bootstrap/
│   │   └── app.php
│   │
│   ├── 📁 config/
│   │   ├── app.php
│   │   ├── auth.php
│   │   ├── cors.php                     # CORS configuration
│   │   ├── database.php
│   │   ├── sanctum.php                  # Sanctum configuration
│   │   └── ...
│   │
│   ├── 📁 database/
│   │   ├── 📁 factories/
│   │   │   └── UserFactory.php
│   │   │
│   │   ├── 📁 migrations/
│   │   │   ├── 2014_10_12_000000_create_users_table.php
│   │   │   ├── 2019_12_14_000001_create_personal_access_tokens_table.php
│   │   │   ├── 2024_06_11_085131_rynek_pierwotny_ceny_ofertowe.php
│   │   │   ├── 2024_06_11_085131_rynek_pierwotny_ceny_transakcyjne.php
│   │   │   ├── 2024_06_11_085131_rynek_wtorny_ceny_ofertowe.php
│   │   │   └── 2024_06_11_085131_rynek_wtorny_ceny_transakcyjne.php
│   │   │
│   │   └── 📁 seeders/
│   │       ├── DatabaseSeeder.php
│   │       └── DataSeeder.php           # CSV data import
│   │
│   ├── 📁 public/
│   │   └── index.php
│   │
│   ├── 📁 routes/
│   │   ├── api.php                      # API route definitions
│   │   ├── web.php
│   │   └── ...
│   │
│   ├── 📁 storage/
│   │   └── 📁 app/
│   │       └── stopy_procentowe.xml     # NBP interest rate data
│   │
│   ├── 📁 docker/
│   │   ├── nginx.conf
│   │   ├── supervisord.conf
│   │   └── init.sh
│   │
│   ├── .env.example
│   ├── artisan
│   ├── composer.json
│   ├── Dockerfile
│   └── phpunit.xml
│
├── 📁 .github/
│   └── 📁 workflows/
│       ├── ci.yml                       # CI pipeline
│       ├── docker.yml                   # Docker build
│       └── codeql.yml                   # Security scan
│
├── 📁 docs/
│   └── 📁 screenshots/                  # Application screenshots
│       ├── home.png
│       ├── chart.png
│       ├── data-table.png
│       └── ...
│
├── 📁 data/                             # Raw CSV data
│   ├── RynekPierwotnyCenyOfertowe.csv
│   ├── RynekPierwotnyCenyTransakcyjne.csv
│   ├── RynekWtornyCenyOfertowe.csv
│   └── RynekWtornyCenyTransakcyjne.csv
│
├── docker-compose.yml
├── .gitignore
├── LICENSE
├── README.md
├── run_client.sh
├── run_client.bat
├── run_server.sh
└── run_server.bat
```

---

## 🗄️ Database

### Database Schema

```
┌─────────────────────────────────────────────────────────────────────────┐
│                              DATABASE SCHEMA                             │
├─────────────────────────────────────────────────────────────────────────┤
│                                                                          │
│  ┌─────────────────────┐          ┌─────────────────────────────────┐   │
│  │       users         │          │   personal_access_tokens        │   │
│  ├─────────────────────┤          ├─────────────────────────────────┤   │
│  │ id (PK)             │◀────────▶│ tokenable_id (FK)               │   │
│  │ name                │          │ tokenable_type                  │   │
│  │ email (UNIQUE)      │          │ name                            │   │
│  │ email_verified_at   │          │ token                           │   │
│  │ password            │          │ abilities                       │   │
│  │ remember_token      │          │ last_used_at                    │   │
│  │ created_at          │          │ expires_at                      │   │
│  │ updated_at          │          │ created_at                      │   │
│  └─────────────────────┘          │ updated_at                      │   │
│                                   └─────────────────────────────────┘   │
│                                                                          │
│  ┌─────────────────────────────────────────────────────────────────┐    │
│  │                     PRICE TABLES (x4)                           │    │
│  │   • rynek_pierwotny_ceny_ofertowe                               │    │
│  │   • rynek_pierwotny_ceny_transakcyjne                           │    │
│  │   • rynek_wtorny_ceny_ofertowe                                  │    │
│  │   • rynek_wtorny_ceny_transakcyjne                              │    │
│  ├─────────────────────────────────────────────────────────────────┤    │
│  │ Kwartal (PK)        │ VARCHAR - e.g. "III_2006"                 │    │
│  ├─────────────────────┼───────────────────────────────────────────┤    │
│  │ Bialystok           │ INTEGER - price PLN/m²                    │    │
│  │ Bydgoszcz           │ INTEGER                                   │    │
│  │ Gdansk              │ INTEGER                                   │    │
│  │ Gdynia              │ INTEGER                                   │    │
│  │ Katowice            │ INTEGER                                   │    │
│  │ Kielce              │ INTEGER                                   │    │
│  │ Krakow              │ INTEGER                                   │    │
│  │ Lublin              │ INTEGER                                   │    │
│  │ Lodz                │ INTEGER                                   │    │
│  │ Olsztyn             │ INTEGER                                   │    │
│  │ Opole               │ INTEGER                                   │    │
│  │ Poznan              │ INTEGER                                   │    │
│  │ Rzeszow             │ INTEGER                                   │    │
│  │ Szczecin            │ INTEGER                                   │    │
│  │ Warszawa            │ INTEGER                                   │    │
│  │ Wroclaw             │ INTEGER                                   │    │
│  │ Zielona Gora        │ INTEGER                                   │    │
│  │ 7 miast             │ INTEGER - average of 7 largest cities     │    │
│  │ 10 miast            │ INTEGER - average of 10 largest cities    │    │
│  │ 6 miast bez Warszawy│ INTEGER - average without capital         │    │
│  │ 9 miast             │ INTEGER - average of 9 cities             │    │
│  └─────────────────────┴───────────────────────────────────────────┘    │
│                                                                          │
└─────────────────────────────────────────────────────────────────────────┘
```

### Data Range

| Parameter | Value |
|-----------|-------|
| **Period** | Q3 2006 - Q4 2023 |
| **Number of quarters** | 70 |
| **Number of cities** | 17 |
| **Number of aggregates** | 4 |
| **Total number of tables** | 4 |
| **Records per table** | 70 |

---

## 🗺️ Available Cities

### Aggregates

| Aggregate | Description |
|-----------|-------------|
| **7 miast** | Average of 7 largest cities |
| **9 miast** | Average of 9 largest cities |
| **10 miast** | Average of 10 largest cities |
| **6 miast bez Warszawy** | Average of 6 largest cities (excluding capital) |

---

## 📊 Data Sources

### Housing Prices

Data comes from official publications of the **National Bank of Poland (NBP)**:

📎 **Quarterly Information - Real Estate Market**
- URL: https://nbp.pl/publikacje/cykliczne-materialy-analityczne-nbp/rynek-nieruchomosci/informacja-kwartalna/
- Frequency: quarterly
- Unit: PLN/m²

### Interest Rates

📎 **NBP Base Interest Rates - Archive**
- URL: https://nbp.pl/podstawowe-stopy-procentowe-archiwum/
- Type: Reference rate
- Unit: % (percent)

---

## 🗺️ Roadmap

### ✅ Version 1.0 (Current)
- [x] Basic data visualization
- [x] Two city comparison
- [x] Authentication system
- [x] JSON/XML export
- [x] Responsive interface

### 🔄 Version 1.1 (Planned)
- [ ] Application dockerization
- [ ] GitHub Actions CI/CD
- [ ] Unit tests (PHPUnit + Jasmine)
- [ ] Environment variables

### 🚀 Version 2.0 (Future)
- [ ] Data update (2024+)
- [ ] Price prediction (ML)
- [ ] Interactive map
- [ ] Price change notifications
- [ ] Inflation comparison
- [ ] Dark mode
- [ ] PWA (Progressive Web App)
- [ ] API rate limiting
- [ ] Swagger/OpenAPI documentation

---

## 🤝 Contributing

Contributions to the project are welcome! Here's how you can help:

### Reporting Bugs

1. Check if the bug hasn't already been reported in [Issues](https://github.com/JakubPatkowski/ProjektAngularLaravell/issues)
2. Create a new Issue with a detailed bug description
3. Include steps to reproduce
4. Provide browser and operating system version

### Pull Requests

1. Fork the repository
2. Create a branch for your feature (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

### Code Style

- **PHP**: PSR-12 (Laravel Pint)
- **TypeScript**: Angular style guide
- **Commits**: Conventional Commits

---

## 📄 License

This project is licensed under the **MIT License** - see the [LICENSE](LICENSE) file for details.

```
MIT License

Copyright (c) 2024 Jakub Patkowski

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
```

---

## 👤 Author

<div align="center">

**Jakub Patkowski**

[![GitHub](https://img.shields.io/badge/GitHub-JakubPatkowski-181717?style=for-the-badge&logo=github)](https://github.com/JakubPatkowski)

</div>

---

<div align="center">

### ⭐ If you like this project, leave a star!

[![Star](https://img.shields.io/github/stars/JakubPatkowski/ProjektAngularLaravell?style=social)](https://github.com/JakubPatkowski/ProjektAngularLaravell/stargazers)

</div>
