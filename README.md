<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Laravel_todos_api

Para este proyecto necesitaremos crear una base de datos en tu gestor de base de daatos preferido con el nombre de todo_list.

## Clonando el Repositorio

Utiliza el siguinte comando para clonar el reposito

```sh
git clone https://github.com/eduardo1617/laravel_todos_api.git
```

## Instalar composer

Una vez clonado el repositorio abrir el proyecto en tu IDE de preferencia, recomendamos [PhpStrom](https://www.jetbrains.com/es-es/phpstorm/) tambien puedes usar [VSCode](https://code.visualstudio.com/) sin problemas.

En la terminal de proyecto ejecuta 
```sh
composer install
```

## Variables de entorno

Por defecto el archivo .env no esta en el proyecto procederemos a copiarlo de .env.example con el siguiente comando

```sh
cp .env.example .env
```

Para que nuestro proyecto funcione necesitamos generar una key, utilizando el siguiente comando

```sh
php artisan key:generate
```

Una ves hecho esto colocamos el nombre de nuestra base de datos en las variables de entorno en el archivo .env de la siguiente manera

```sh
DB_DATABASE=todo_list
```

- Nota: Si tu gestor de base de datos necesita una contraseña has de agregarla en la siguente variable de entorno

```sh
DB_PASSWORD=
```

Luego de esto ejecutamos las migraciones con el siguiente comando 

```sh
php artisan migrate
```

Ahora procedemos a inicar el servidor local con el comando

```sh
php artisan serv
```
