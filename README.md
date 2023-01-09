# Test para BackendDeveloper en Blendio

## Pasos para ejecutar:

-   clonar el repositorio
-   Crear un archivo llamado **.env** y copiar el contenido de **.env.copy** en el mismo
-   Ejecutar **composer install**
-   Ejecutar **php artisan key:generate**
-   Ejecutar **php artisan config:cache**
-   Ejecutar **php artisan serve**
-   Para ejecutar los tests: **php artisan serve**
-   Para ejecutar el comando de operaciones: \*\*php artisan operations {número1} {número2} {operación}
    -   Las operaciones disponibles son las siguientes: add - substract - multiply - divide

## Puntos interesantes:

-   Inyección de dependencias en tests: Parece ser que Laravel no permite la inyección de dependencias en tests pero seguro alguna manera hay. Investigando un poco, encontré que Laravel permite "setear" métodos, objetos y demás mediante algunas funciones propias de phpUnit pero no fui capaz de hacerlo así que me gustaría verlo más adelante contigo a ver qué consejo me das
