#!/bin/bash
set -e

echo "──────────────────────────────────────"
echo "  Laravel 12 — Docker Entrypoint"
echo "──────────────────────────────────────"

cd /var/www/html

# ── Ensure .env exists ────────────────────────────────────────
if [ ! -f .env ]; then
    if [ -f .env.example ]; then
        echo "Creating .env from .env.example..."
        cp .env.example .env
        php artisan key:generate --force
    else
        echo "WARNING: .env file missing and .env.example not found!"
    fi
fi

# ── Ensure storage directories exist ──────────────────────────
mkdir -p storage/app/public \
         storage/framework/cache/data \
         storage/framework/sessions \
         storage/framework/views \
         storage/logs \
         bootstrap/cache

# ── Fix permissions ───────────────────────────────────────────
chown -R www-data:www-data storage bootstrap/cache
chmod -R 775 storage bootstrap/cache

# ── Create storage symlink if missing ─────────────────────────
php artisan storage:link --force 2>/dev/null || true

# ── Wait for DB to be ready ───────────────────────────────────
echo "Waiting for database connection..."
MAX_TRIES=20
TRY_COUNT=0
# We use db:show to check if the connection is active
until php artisan db:show --json > /dev/null 2>&1 || [ $TRY_COUNT -eq $MAX_TRIES ]; do
  echo "  DB not ready yet — retrying in 3s ($((TRY_COUNT+1))/$MAX_TRIES)..."
  sleep 3
  TRY_COUNT=$((TRY_COUNT + 1))
done

if [ $TRY_COUNT -eq $MAX_TRIES ]; then
    echo "ERROR: Could not connect to database after $MAX_TRIES attempts."
    exit 1
fi
echo "Database connection established."

# ── Run migrations ────────────────────────────────────────────
echo "Running migrations..."
# Laravel 11+ automatically prompts to create the database if missing.
# In non-interactive mode with --force, it should still work or fail gracefully.
php artisan migrate --force

# ── Cache config, routes, views for performance ───────────────
echo "Caching config, routes & views..."
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan event:cache

echo "Starting services via Supervisor..."
exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf
