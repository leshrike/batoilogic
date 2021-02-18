# Backoffice de Batoilogic

### Creado por Pablo Arévalo y Leo Román
 
### ¿ Qué es el Backoffice ?

En esta aplicación podremos consultar y hacer diferentes acciones con los datos de la empresa.

Podremos ver todos los pedidos a realizar, añadir productos, editar o añadir pedidos y mucho más.

Podremos acceder a esta aplicación como repartidores, usuarios normales o administradores, cada tipo de usuario podrá realizar diferentes acciones. Para probar estas funcionalidades, podremos usar unos usuarios de prueba, cuyos credenciales se mostrarán más adelante.


## Versiones

Para poner en funcionamiento esta aplicación hemos necesitado las siguientes aplicaciones o librerías :




## Instalación local

Para poder hacer que esta aplicación se ejecute deberemos seguir los siguientes pasos:

### Obtener todos los ficheros

En primer lugar, deberemos descargar los ficheros de este repositorio. Haciendo click en el botón verde en el que pone CODE. 


### Modificar el fichero .env

En este fichero podremos hacer todos los cambios relativos al entorno de programación. Normalmente recibiremos un ejemplo de este fichero, el cual podremos copiar y rellenar con nuestra configuración personal. Este fichero de ejemplo suele llamarse .env.example

En su interior deberemos cambiar:

#### Ubicación del codigo de la aplicación
```
APP_CODE_PATH_HOST=../batoilogic/

Nota: si no se le especifica, será la ruta en la que se encuentra el fichero .env

```
#### Credenciales de la Base de Datos
```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=batoilogic
DB_USERNAME=root
DB_PASSWORD=root

```
Nota: Al realizar una instalación local, los credenciales de la base de datos no son tan importantes, aunque se pueden modificar a nuestro antojo en los campos USERNAME y PASSWORD

#### Modificar el nombre y URL de la aplicación

```
APP_NAME=Batoilogic
APP_URL=http://batoilogic

```
Nota: Esta configuración es opcional, pero nos hace más facil reconocer el proyecto en el que estamos trabajando.


### Configuración y puesta en marcha del entorno:

Nota: Este proceso es la forma de funcionar haciendo uso de la Laradock, en un Windows. Asumiremos para esta explicación que el usuario ya tiene "Laradock" instalado en su equipo.

#### Puesta en marcha de los containers

Para poner en marcha el sistema de laradock, deberemos abrir una terminal y dirigirnos a nuestra carpeta laradock:

```prolog

docker compose up -d nginx mysql

```

O podemos acceder a la aplicación de Docker en modo gráfico (Docker desktop) y hacerlo de forma manual.


#### Acceder al bash

Para el desarrollo de nuestra aplicación en Laravel deberemos hacer uso de comandos como por ejemplo: "php artisan make:controller orderController" los cuales nos ayudarán a 
realizar todo tipo de componentes de nuestra aplicación de forma ágil.

Estos comandos no podremos introducirlos en el cmd de nuestro Windows, por ello, deberemos acceder al bash que tenemos a nuestra disposición en Laradock con el siguiente comando:


```prolog

docker-compose exec workspace bash

```

#### Instalar dependencias y librerías

Para la aplicación hemos hecho uso de librerías y componentes que no se encuentran disponibles para su uso de forma inmediata. Para poder conseguir que no hayan errores de este tipo, deberemos introduir lo siguiente:

```prolog

composer install -- Dependencias PHP

npm install -- Dependencias de JavaScript

```

Una vez composer haya finalizado, no deberíamos tener problemas ejecutando la aplicación.


#### Generar la clave del proyecto/aplicación

Para realizar funciones como la encriptación de cookies, laravel usa el valor APP_KEY localizado en el fichero .env, el cual tendremos que rellenar ejecutando lo siguiente:

```prolog

php artisan key:generate

```

#### Realizar las migraciones y creaciones de tablas

Para trabajar con los datos de la aplicación hacemos uso de bases de datos las cuales podemos crear gracias a las migraciones. Para ejecutar las migraciones y crear las bases de datos deberemos introducir el siguiente comando:

```prolog

php artisan migrate

```

#### Comprobaciones

Podremos comprobar que esta aplicación está en funcionamiento accediendo usando nuestro navegador a la ruta que hayamos establecido en el campo APP_URL o ejecutando la siguiente directiva:

```prolog
php artisan:serve 

```
Nota: al ejecutar la directiva superior, nuestra página web  se encontrará en http://localhost:8080

