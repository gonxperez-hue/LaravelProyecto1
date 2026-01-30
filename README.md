# Descripción del Proyecto
    -El proyecto es un sistema de gestión que está desarrollado usando Laravel y AdminLTE, incluyendo varios módulos CRUD, esto permite gestionar:

        ·Clientes
        ·Empleados
        ·Proveedores
        ·Productos
        ·Facturas

    -El proyecto usa una base de datos MySQL y la he diseñado para que sea fácil de instalar y ejecutar en cualquier entorno.

# Requisitos para ejecutarlo

    -PHP 8.1 o superior
    -Composer
    -MySQL
    -Un servidor local (XAMPP)
    -Laravel 10+

# Pasos básico para instalarlo

    -Clonar el repositorio
        · git clone https://github.com/gonxperez-hue/LaravelProyecto1
    -Instalar las dependecias de PHP
        ·composer install
    -Crear el archivo .env
        · cp .env.example .env
    -Configurar la base de datos en el archivo .env
        ·DB_CONNECTION=mysql
        ·DB_HOST=127.0.0.1
        ·DB_PORT=3306
        ·DB_DATABASE=proyecto
        ·DB_USERNAME=root
        ·DB_PASSWORD=
    -Importar la base de datos
        ·Abrir phpMyAdmin
        ·Crear una base de datos que se llame proyecto
        ·Darle a importar
        ·Coger el archivo proyecto.sql que viene en la entrega
        ·Ejecutarlo
    -Genera la clave de la aplicación
        · php artisan key:generate
    -Iniciar el servidor para que funcionee
        · php artisan serve
    -URL del proyecto
        ·http://127.0.0.1:8000
        