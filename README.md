# 📊 KPI Dashboard — Sup'Com Junior Enterprise

> A full-stack internal management platform built with PHP/Laravel and MySQL, designed to track Key Performance Indicators for Sup'Com Junior Enterprise. Features distinct dashboards for administrators and standard users with real-time interactive charts.

---

## 🚀 Features

### 👤 Multi-Role Authentication
- Separate login/register flows for Admins and Standard Users
- Role-based access control throughout the application
- Profile management for all users

### 🔐 Admin Dashboard
- Full access to KPI management — create, edit, delete KPI data
- Project and task management with live updates
- Interactive JavaScript charts for KPI visualization
- User management

### 📖 Standard User Dashboard
- Read-only access to KPI charts and performance indicators
- View recent projects and ongoing tasks
- Profile update functionality

### 📈 KPI Tracking
- Interactive charts built with JavaScript for real-time data visualization
- Monthly performance tracking with completion rate metrics
- Project progress monitoring across the organization

---

## 🛠 Tech Stack

| Layer | Technology |
|---|---|
| Backend | PHP, Laravel |
| Frontend | Blade Templates, HTML5, CSS3, SCSS, JavaScript |
| Database | MySQL |
| Authentication | Laravel Sanctum / Breeze |
| Build Tools | Vite, NPM, Bootstrap |
| Version Control | Git / GitHub (8 branches, 38+ commits) |

---

## ⚙️ Installation

```bash
git clone https://github.com/sanaanidhal/KPI-Dashboard.git
cd KPI-Dashboard
composer install
npm install
cp .env.example .env
php artisan key:generate
```

Configure your database in `.env`:
```env
DB_CONNECTION=mysql
DB_DATABASE=kpi_dashboard
DB_USERNAME=root
DB_PASSWORD=your_password
```

Then run:
```bash
php artisan migrate --seed
php artisan serve
npm run dev
```

---

## 🔑 Demo Credentials

| Role | Email | Password |
|---|---|---|
| Admin | admin@supcomje.tn | password |
| User | user@supcomje.tn | password |

---

## 🏗 Architecture

```
KPI-Dashboard/
├── app/
│   ├── Http/Controllers/
│   │   ├── UserController.php      # Dashboard logic + KPI charts
│   │   └── ProfileController.php
│   └── Models/
│       ├── Premier.php             # Monthly KPI data
│       ├── Project.php             # Project tracking
│       └── Second.php              # Secondary KPI metrics
├── resources/views/
│   ├── layouts/                    # Main layout
│   ├── dashboard/                  # Admin + User dashboards
│   └── auth/                       # Login + Register
├── routes/
│   └── web.php
└── database/
    └── migrations/
```

---

**Organisation:** Sup'Com Junior Entreprise — Mandat 2023/2024

---

## 👨‍💻 Author

**Sanaa Mohamed Nidhal**
MSc Computer Science — University of Passau, Germany

[![GitHub](https://img.shields.io/badge/GitHub-sanaanidhal-black?style=flat&logo=github)](https://github.com/sanaanidhal)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-sanaa--nidhal-blue?style=flat&logo=linkedin)](https://linkedin.com/in/sanaa-nidhal)
