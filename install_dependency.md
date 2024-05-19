Documentacion de Laravel:

>[!NOTE]
>
>Este som nomas algunos comandos que se, si en el proceso van agregando hay lo colocan en la documentación

## Inicializar

Deben de tener ya instalado los requerimiento, para inicial con el proyecto

### Gía de intalación en distro debian 

[gía de intalcion de php](https://morioh.com/a/e411bf50ae0e/como-instalar-php-82-en-ubuntu-2204)

#### Comandos
Acualizar paquetes

```bash
sudo apt-get update
```

Agregar el repositorio APP


```bash
sudo add-apt-repository ppa:ondrej/php
```

Modulos requeridos para PHP

```bash
sudo apt-get install -y php8.2-cli php8.2-common php8.2-fpm php8.2-mysql php8.2-zip php8.2-gd php8.2-mbstring php8.2-curl php8.2-xml php8.2-bcmath
```

[gía de instalación de compose](https://www.digitalocean.com/community/tutorials/how-to-install-and-use-composer-on-ubuntu-20-04-es)

#### Comandos

recordar que debe de estar en la raiz para instalr composer

``` bash
cd ~
```

agregamos el CURL 

```bash
curl -sS https://getcomposer.org/installer -o composer-setup.php
```

Verificación que el instalador este descargado en el has SHA-384

```bash
HASH=`curl -sS https://composer.github.io/installer.sig`
```

visualizacion del valor optenido:
```bash
echo $HASH

#Output
#e0012edf3e80b6978849f5eff0d4b4e4c79ff1609dd1e613307e16318854d24ae64f26d17af3ef0bf7cfb710ca74755a
```

Verficación que la secuencia de comandos de instlacion se pueda ejecutar de forma segura

```bash
php -r "if (hash_file('SHA384', 'composer-setup.php') === '$HASH') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"

#Installer verified
```

Instalación de composer de manera global

```bash
sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer

#All settings correct for using Composer
#Downloading...
#
#Composer (version 1.10.5) successfully installed to: /usr/local/bin/composer
#Use it: php /usr/local/bin/composer
```

para comprobar si se intalo composer

``` bash
composer
```

---

### Clonar el repositorio

se clona el repositorio

```bash
git clone https://github.com/Raul-OXRI/Tienda_Marquensita.git ^^
cd Tienda_Marquensita
```

se debe de crear los archivos [ .env ]

``` .env
APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tineda_marquensita
DB_USERNAME=root
DB_PASSWORD=root

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DRIVER=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

```

depues de configurar el "env" se debe de colocar el siguiente comando

```bash
composer install
```