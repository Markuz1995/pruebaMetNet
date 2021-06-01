# Instalación
git clone https://github.com/Markuz1995/pruebaMetNet.git

Ingresa a la carpeta /pruebaMetNet
Luego ejecutar el comando
`composer install`
``
# Preparación
- Copia el archivo `.env.example`  a un archivo `.env` 
- Configura las credenciales de la base de datos local
- Ejecuta el comando `php artisan key:generate` para obtener la llave local
- Ejecuta las migraciones con el comando `php artisan migrate` para generar las tablas en la base de datos

# Inicializar el servicio
Para inicializar el servicio es necesario que corra el siguiente comando
`php artisan serve`