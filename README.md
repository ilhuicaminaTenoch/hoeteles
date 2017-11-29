#Notas de referencia


#Contraseña MySQL 
Desarrollo2017*

#agregar a host
104.199.124.206 admin-hoteles.com

#Instalar curl git
sudo apt-get install curl php-cli git

#instalar composer
sudo curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer        
composer install
composer update

#Crear archivo .env
sudo cp .env.example .env
sudo chmod 777 .env

#Generar app key
php artisan key:generate

#Cargar migrations
En el archivo .env creado cambiar las siguientes lineas:

DB_DATABASE=admin_hoteles
DB_USERNAME=root
DB_PASSWORD=***

MAIL_DRIVER=log

php artisan migrate


### para que no se tome en cuenta el cambio de permisos en una carpeta o archivo en git, ejecutar el siguiente comando 
git config core.fileMode false 



#Instalacion adminlte

composer require jeroennoten/laravel-adminlte

#Agregar la siguiente linea al archivo:
'config/app.php' en la sección 'providers'
JeroenNoten\LaravelAdminLte\ServiceProvider::class,

#publicar
php artisan vendor:publish --provider="JeroenNoten\LaravelAdminLte\ServiceProvider" --tag=assets


##Para actualizar el tema
composer update jeroennoten/laravel-adminlte
php artisan vendor:publish --provider="JeroenNoten\LaravelAdminLte\ServiceProvider" --tag=assets --force


#Pagina de informacion de adminLTE
https://github.com/jeroennoten/Laravel-AdminLTE


###NOTAS IMPORTANTES
en el archivo
proyecto-hoteles/vendor/jeroennoten/laravel-adminlte/src/ServiceProvider.php

reemplazar la linea 

$menu = $config->get('adminlte.menu'); por $menu = $config->get('adminlte.menu'.Auth::user()->perfil_id);

para cargar el menu, segun el perfil del usuario



