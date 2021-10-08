#!/bin/bash

# Create the .env file
cp -n .env.example .env

# Start the containers
docker-compose up -d

# Install dependencies
docker-compose exec rest-api-php composer install

# Create the database tables
docker-compose exec rest-api-php php artisan migrate

# Seed the database
docker-compose exec rest-api-php php artisan db:seed