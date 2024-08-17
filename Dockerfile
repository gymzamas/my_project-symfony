FROM php:8.2-fpm

# Installer l'extension pdo_mysql pour PHP, nécessaire pour Doctrine
RUN docker-php-ext-install pdo_mysql

# Définir le répertoire de travail dans le conteneur à l'intérieur du sous-dossier Symfony
WORKDIR /var/www/html/my_project

# Copier les fichiers du sous-dossier Symfony dans le répertoire de travail dans le conteneur
COPY ./my_project /var/www/html/my_project

# Changer la propriété des fichiers pour l'utilisateur www-data (utilisé par le serveur web)
RUN chown -R www-data:www-data /var/www/html/my_project
