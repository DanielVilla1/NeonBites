<a name="readme-top"></a>

<div align="center">
  <h1>NeonBites</h1>
  <p><em>A cyberpunk-themed restaurant landing site built on CodeIgniter 4.</em></p>
</div>

---

<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#overview">Overview</a>
      <ol>
        <li><a href="#pages--routes">Pages &amp; Routes</a></li>
        <li><a href="#data-model">Data Model</a></li>
        <li><a href="#technology">Technology</a></li>
      </ol>
    </li>
    <li><a href="#quick-start-docker">Quick Start (Docker)</a></li>
    <li><a href="#ports--database">Ports &amp; Database</a></li>
    <li><a href="#project-structure">Project Structure</a></li>
    <li><a href="#rules-practices-and-principles">Rules, Practices and Principles</a></li>
    <li><a href="#docs">Docs</a></li>
  </ol>
</details>

---

## Overview

NeonBites is a **CodeIgniter 4** landing/marketing site for a fictional neon/cyberpunk-styled restaurant. It ships as a Dockerized stack (PHP-FPM + Nginx + MySQL) with a static-content menu page, and a `products` table already migrated for future menu-management features.

* **Purpose**: showcase pages (home, features, menu, contact, get started) styled with a neon/cyberpunk theme.
* **Status**: front-end pages are wired up and render directly (no CI4 `view()`/layout system yet — controllers `include` view files manually); a `products` migration exists but there is no Model, controller CRUD, or auth layer yet.

### Pages & Routes

| Route          | Controller Method    | View                              |
| -------------- | --------------------- | ---------------------------------- |
| `/`            | `Home::index`          | `Views/landing/neonbites.php`      |
| `/features`    | `Home::features`       | `Views/landing/features.php`       |
| `/menu`        | `Home::menu`           | `Views/landing/menu.php` (hardcoded sample dishes) |
| `/contact`     | `Home::contact`        | `Views/landing/contact.php`        |
| `/get-started` | `Home::getStarted`     | `Views/landing/get_started.php`    |

Shared partials live in `Views/components/` (`head.php`, `features.php`, `gallery.php`).

### Data Model

| Table      | Purpose                          | Columns                                                              |
| ---------- | --------------------------------- | ---------------------------------------------------------------------- |
| `products` | Menu items (NeonBites dishes)     | `id`, `product_name`, `desc`, `price`, `img`, `+` timestamps/soft deletes |

Migration: `backend/app/Database/Migrations/2025-10-05-155510_CreateNeonTable.php`. No `Model` class exists for it yet (`app/Models/` is currently empty).

### Technology

#### Language

![HTML](https://img.shields.io/badge/HTML-E34F26?style=for-the-badge\&logo=html5\&logoColor=white)
![CSS](https://img.shields.io/badge/CSS-1572B6?style=for-the-badge\&logo=css3\&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge\&logo=php\&logoColor=white)

#### Framework/Library

![CodeIgniter](https://img.shields.io/badge/CodeIgniter-EF4223?style=for-the-badge\&logo=codeigniter\&logoColor=white)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-06B6D4?style=for-the-badge\&logo=tailwindcss\&logoColor=white)
![Font Awesome](https://img.shields.io/badge/Font_Awesome-528DD7?style=for-the-badge\&logo=fontawesome\&logoColor=white)

Tailwind (v4 browser build) and Font Awesome are loaded via CDN in `Views/components/head.php`, alongside Google Fonts (Orbitron + Share Tech Mono) for the neon look.

#### Database

![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge\&logo=mysql\&logoColor=white)

#### Infrastructure

![Docker](https://img.shields.io/badge/Docker-2496ED?style=for-the-badge\&logo=docker\&logoColor=white)
![Nginx](https://img.shields.io/badge/Nginx-009639?style=for-the-badge\&logo=nginx\&logoColor=white)

---

## Quick Start (Docker)

Run the development stack (rebuild if needed, sync files on change):

```cmd
docker compose up --watch
```

The site is served by Nginx at **http://localhost** (port 80).

Common utility commands (run from the project root):

- Run migrations:
```cmd
docker compose exec php composer migrate
```
- Run seeders:
```cmd
docker compose exec php composer seed
```
- Run tests:
```cmd
docker compose exec php composer test
```
- Start phpMyAdmin (opt-in via profile):
```cmd
docker compose --profile tools up -d phpmyadmin
```

- Create a migration (using CodeIgniter's spark tool):
```cmd
docker compose exec php php spark make:migration CreateUsersTable
```

- Create a model (using CodeIgniter's spark tool):
```cmd
docker compose exec php php spark make:model UserModel
```

- Create an entity (value object for a single record) (using CodeIgniter's spark tool):
```cmd
docker compose exec php php spark make:entity User
```

- Create a controller (add `--resource` to scaffold resourceful methods) (using CodeIgniter's spark tool):
```cmd
docker compose exec php php spark make:controller Users
```

- Create a seeder (for test/dev data) (using CodeIgniter's spark tool):
```cmd
docker compose exec php php spark make:seeder UsersSeeder
```

## Ports & Database

Defaults used in this project (from `compose.yaml`):

| Service     | Host port | Notes                              |
| ----------- | --------: | ----------------------------------- |
| nginx (app) | 80        | serves the CI4 app                  |
| MySQL       | 3380      | maps to container port 3306         |
| phpMyAdmin  | 8091      | only started with `--profile tools` |

Database credentials (local/dev only, set in `backend/.env` and `compose.yaml`):

- Host (from host machine): `localhost:3380` — inside Docker network: `mysql:3306`
- Database: `app`
- User: `app` / Password: `app`
- Root password: `root`

Be careful: seeding and truncating are destructive operations — run only on local/dev environments unless you know what you're doing.

## Project Structure

```
NeonBites/
├─ backend/                 # CodeIgniter 4 app
│  ├─ app/Controllers/      # Home.php (all landing routes)
│  ├─ app/Database/
│  │  ├─ Migrations/        # products table (NeonBites menu items)
│  │  └─ Seeds/
│  ├─ app/Models/           # empty — no Model wired up yet
│  ├─ app/Views/
│  │  ├─ components/        # head.php, features.php, gallery.php
│  │  └─ landing/           # neonbites.php, features.php, menu.php, contact.php, get_started.php
│  ├─ public/
│  ├─ writable/
│  ├─ Dockerfile            # php:8.3-fpm
│  ├─ nginx.conf
│  ├─ .env
│  └─ composer.json
├─ docs/                    # manuals, SOPs, checklists
├─ .github/workflows/       # CI (docker-image.yml)
├─ compose.yaml             # php + nginx + mysql + phpmyadmin
└─ readme.md
```

---

## Rules, Practices and Principles

1. Place files in their **respective CI4 folders** (`Controllers/`, `Models/`, `Views/`).
2. Naming conventions:

   | Type             | Case        | Example                   |
   | ---------------- | ----------- | ------------------------- |
   | Classes          | PascalCase  | `ProductModel.php`        |
   | Interfaces       | PascalCase  | `ProductRepositoryInterface` |
   | DB tables/fields | snake\_case | `products`, `created_at`  |
   | Docs             | kebab-case  | `dev-manual.md`           |

3. Git commit types: `feat`, `fix`, `docs`, `refactor` — see [docs/commit-manual.md](docs/commit-manual.md) for scopes and branch naming (`frontend/`, `backend/`, `databases/`, `documents/`).
4. Assets (CSS/JS/img) live under `backend/public/`.
5. Docker configs live at the repo root (`compose.yaml`) and in `backend/` (`Dockerfile`, `nginx.conf`).
6. Full engineering principles (SOLID, KISS, DRY, YAGNI, fail-fast) are documented in [docs/core-engineering-principles.md](docs/core-engineering-principles.md).

---

## Docs

Project manuals and reference material live in [`/docs`](docs/):

| File                                                         | Purpose                                    |
| -------------------------------------------------------------- | -------------------------------------------- |
| [commit-manual.md](docs/commit-manual.md)                     | Commit types, branch naming, examples       |
| [core-engineering-principles.md](docs/core-engineering-principles.md) | OOP/SOLID/KISS/DRY/YAGNI reference   |
| [sop-manual.md](docs/sop-manual.md)                            | Standard operating procedures               |
| [technical-manual.md](docs/technical-manual.md)                | Technical notes                             |
| [v1-dev-manual.md](docs/v1-dev-manual.md)                      | v1 development notes                        |
| [checklist/](docs/checklist/)                                  | Lecture notes and setup checklists          |

<p align="right">(<a href="#readme-top">back to top</a>)</p>
