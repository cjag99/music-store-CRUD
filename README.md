<h1 align="center">Music Store CRUD- Un CRUD con Laravel Breeze</h1>

## Descripcion
Este CRUD es una práctica de Laravel 12 para la asignatura de Desarrollo en entorno servidor de DAW. Simula un catálogo de instrumentos clasificados en distintas categorías. La autenticación y seguridad del acceso a la aplicación corre a cargo de ``Laravel Breeze``.

## Tecnologías utilizadas
<table align="center">
<tr>
<td align="center">
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/laravel/laravel-original.svg" width="160" height="160" />
  <br>
  <strong>Laravel 12</strong>
</td>
<td align="center">
 <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/alpinejs/alpinejs-original.svg" width="160" height="160"/>         
  <br>
  <strong>Alpinejs</strong>
</td>
<td align="center">
    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/tailwindcss/tailwindcss-original.svg" width="160" height="160"/>
    <br>
    <strong>Tailwindcss</strong>
</td>
    <td align="center">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/vitejs/vitejs-original.svg" width="160" height="160"/>
          <br>
        <strong>Vite</strong>
    </td>
</tr>
</table>

## Requisitos previos
1. Servidor Apache
2. Php versión ``8.3 o superior``
3. MySQL versión ``8.0``

## Instalación
1. Clone el repositorio:
   ```bash
   git clone https://github.com/cjag99/bestiaryAPI.git
   ```
2. Instale dependencias:
   ```bash
   composer install
   ```
3. Crea el fichero ``.env`` con el siguiente comando:
   ```bash
   cp .env.example .env
   ```
4. Cambie las variables de entorno de conexión a base de datos del fichero ``.env`` siguiendo los ejemplos de ``.env.example``:
   ```.env
   DB_CONNECTION=mysql
   DB_HOST=your_host
   DB_PORT=your_port
   DB_DATABASE=your_database
   DB_USERNAME=your_usernamme
   DB_PASSWORD=your_password
   ```
5. Generar la APP_KEY con el siguiente comando:
   ```bash
   php artisan key:generate
   ```
6. Realizar la migración de base de datos y el sembrado de datos de ejemplo para la api:
   ```bash
   php artisan migrate --seed
    ```
7. Como las vistas usan tanto Alpinejs como Tailwind, los cuales necesitan ser compilados por Vite mediante el siguiente comando:
   ```node
       npm run build
   ```
7. Con esto estaría todo listo. Solo quedaría iniciar la API con el comando:
   ```bash
   php artisan serve
   ```

