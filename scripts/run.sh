#!/bin/bash

echo "Stopping and removing the old container (if it exists)"
podman stop laravel-admin-lte-3 2>/dev/null || true
podman rm laravel-admin-lte-3 2>/dev/null || true

echo "Building the main Docker image (FrankenPHP)"
podman build -t laravel-admin-lte-3-image:latest -f docker/php/Dockerfile .

echo "Running a new container"
podman run -d \
  --name laravel-admin-lte-3 \
  --restart unless-stopped \
  --network host \
  --env-file .env \
  -v .:/app:Z \
  -v /app/vendor \
  -v ./storage:/app/storage:Z \
  -v ./docker/php/Caddyfile:/etc/caddy/Caddyfile:Z \
  -v ./docker/php/php.ini:/usr/local/etc/php/conf.d/99-custom.ini:Z \
  -v caddy_data_laravel-admin-lte-3:/data \
  -v caddy_config_laravel-admin-lte-3:/config \
  laravel-admin-lte-3-image:latest

echo "Finished!"
