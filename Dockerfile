FROM php:7.4-fpm

# Argumentos definidos no arquivo docker-compose.yml
ARG uid
ARG user

# Instalar dependências de sistema
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip


# Limpar cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/

# Instalar extensões PHP
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Instalar última versão do Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/Composer

# Criar usuário de sistema para rodar comandos Composer e Artisan
RUN useradd -G www-data, root - $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

# Configurar diretório de trabalho
WORKDIR  /var/www

USER $user