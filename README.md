sudo apt-get install software-properties-common
sudo add-apt-repository ppa:ondrej/php

sudo add-apt-repository ppa:ondrej/nginx

sudo apt update
sudo apt install php7.2-fpm php7.2-common php7.2-mbstring php7.2-xmlrpc php7.2-soap php7.2-gd php7.2-xml php7.2-intl php7.2-mysql php7.2-cli php7.2-zip php7.2-curl

curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer

# Instalar coponentes laravel

composer install

# Realizar migracion a mysql 5.7

php artisan migrate:fresh --seed


# importar en postman

agregar el formato json de postman que se compartio.

# probnar funcionalidad una vez realizado la migracion





