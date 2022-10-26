#remove pagina inicial do servidor 
rm index.php
#baixa o wordpresss
wp core download --locale=pt_BR
#baixa as configuracoes iniciais do servidor
curl -LG https://raw.githubusercontent.com/aaemnnosttv/wp-sqlite-db/master/src/db.php > ./wp-content/db.php

#cria as configuracoes iniciais do servidor
wp config create --skip-check --dbname=wp --dbuser=wp --dbpass=pass --extra-php <<PHP
\$_SERVER[ "HTTPS" ] = "on";
define( 'WP_HOME', 'https://$REPL_SLUG.$REPL_OWNER.repl.co' );
define( 'WP_SITEURL', 'https://$REPL_SLUG.$REPL_OWNER.repl.co' );
define ('FS_METHOD', 'direct');
define('FORCE_SSL_ADMIN', true);
PHP
read -p "Leitura do nome de usuario ADM: " user
read -p "Leitura da senha de usuario ADM: " psw
read -p "Leitura do email de acesso ao WORDPRESS : " email
read -p "Leitura do titulo do site: " titulo
wp core install --url=$REPL_URL --title=$titulo --admin_user=$user --admin_password=$psw --admin_email=$email

