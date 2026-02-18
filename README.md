# USUARIO ADMIN PARA ENTRAR EN EL PROYECTO

    -El email es admin@admin.com
    -La contraseña es admin123
    -Esto te va a redirigir al dashboard donde vas a poder navegar por los módulos del proyecto.

# USUARIO NO ADMIN PARA ENTRAR EN EL PROYECTO

    -Aquí vas a poder comprobar que en el CRUD un usuario no admin no va a poder eliminar 
    -El email es user@user.com
    -La contraseña es user123
    -También te va a redirigir al dashboard

# CAMBIOS PARA LA SEGUNDA ENTREGA

    -La función de DataTables, asi como la paginación y la inclusión de fotos ha sido añadida al CRUD de clientes.
    -La función para poder añadir un pdf descriptivo y una función para poder descargarlo se ha añadido al CRUD de productos.
    -He incluido la pantalla de login para que se ppuede elegir entre entrar con un usuario admin o no admin como se pedía en la entrega, depende de con cual entres la función de eliminar clientes o productos estará o no disponible.
    
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
        