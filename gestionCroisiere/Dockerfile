FROM laravel/sail:8.0 as builder

# Copier les fichiers de l'application
COPY . /var/www/html

# Installation des dépendances
RUN composer install --optimize-autoloader --no-interaction --no-plugins --no-scripts --prefer-dist \
    && php artisan config:clear \
    && php artisan route:clear \
    && php artisan view:clear

# Création des fichiers de cache
RUN php artisan config:cache \
    && php artisan route:cache \
    && php artisan view:cache

FROM laravel/sail:8.0

# Copier les fichiers de l'application
COPY --from=builder /var/www/html /var/www/html

# Définir le répertoire de travail
WORKDIR /var/www/html

# Exposer le port HTTP
EXPOSE 80

# Exposer le port HTTPS
EXPOSE 443

# Lancer l'application
CMD ["php", "artisan", "sail:serve"]
