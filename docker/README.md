# Laravel 12 — Docker Setup (Existing MySQL + Redis)

## Your server already has:
| Container      | Service |
|----------------|---------|
| `mysql`        | MySQL 8.0 |
| `vedant_redis` | Redis |

This setup connects to those directly — no new DB or Redis containers.

---

## Step 1 — Find the shared Docker network

```bash
docker inspect mysql | grep -A5 '"Networks"'
# Look for a key like "opt_default" or "bridge"

docker inspect vedant_redis | grep -A5 '"Networks"'
# Should be the same network name
```

---

## Step 2 — Configure .env

```bash
cp .env.example .env
nano .env
```

Set these values:
```
EXTERNAL_NETWORK=opt_default   # ← network name from Step 1
APP_PORT=8090                  # ← host port for Laravel
APP_KEY=base64:...             # ← from: php artisan key:generate --show
DB_DATABASE=your_db
DB_USERNAME=your_user
DB_PASSWORD=your_password
REDIS_PASSWORD=                # blank if no auth on vedant_redis
```

---

## Step 3 — Create the DB & user in existing MySQL

```bash
docker exec -it mysql mysql -u root -p

# Inside MySQL:
CREATE DATABASE your_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE USER 'your_user'@'%' IDENTIFIED BY 'your_password';
GRANT ALL PRIVILEGES ON your_db.* TO 'your_user'@'%';
FLUSH PRIVILEGES;
EXIT;
```

---

## Step 4 — Build and start

```bash
# Place all files in your Laravel 12 project root, then:
docker compose up -d --build
```

Check it started correctly:
```bash
docker compose logs -f app
```

---

## Step 5 — Verify connectivity

```bash
# Test DB connection
docker exec laravel_app php artisan db:show

# Test Redis
docker exec laravel_app php artisan tinker
# >>> Cache::put('test', 'ok', 10); Cache::get('test');
```

---

## Persistent Storage

| Named Volume     | Mounted at                        | Contains                     |
|------------------|-----------------------------------|------------------------------|
| `storage_data`   | `/var/www/html/storage`           | Uploads, logs, sessions, views |
| `bootstrap_cache`| `/var/www/html/bootstrap/cache`   | Config/route/view cache       |

Data survives `docker compose restart` and `docker compose up --build`.

---

## Common Commands

```bash
# Artisan
docker exec laravel_app php artisan migrate
docker exec laravel_app php artisan cache:clear
docker exec laravel_app php artisan tinker

# Logs
docker compose logs -f app
docker compose logs -f queue

# Rebuild after code change
docker compose up -d --build app

# Shell
docker exec -it laravel_app bash

# Backup storage
docker run --rm \
  -v laravel_storage_data:/data \
  -v $(pwd):/backup \
  alpine tar czf /backup/storage_$(date +%F).tar.gz /data
```

---

## File Structure

```
your-laravel-app/
├── Dockerfile
├── docker-compose.yml
├── .env                   ← created from .env.example
└── docker/
    ├── nginx.conf
    ├── supervisord.conf
    ├── php.ini
    └── entrypoint.sh
```
