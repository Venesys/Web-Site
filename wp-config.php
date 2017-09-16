<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'venesys');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'SebastianAldana');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '1234');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '`kb=~R8M=[osS*;thBj<3zq%W:xlaU}7(4=8*Z(VT=TaePit!;}PowPh_|O6kAE.');
define('SECURE_AUTH_KEY', 'dnxaK`9~h`nmfGzQrIsp}9q9Ie=8l58Kf07xUkRI >~xU4aUp[>>BF(dWI]No%2R');
define('LOGGED_IN_KEY', 'Y6HH;{G:EEj~bd7%I.CU@0ADw[(i5byk)Vn$AP<;X`Y,3LL*:4Q{uTg-Ho.#h%4_');
define('NONCE_KEY', ')o;rjYI}/0`+%8V`;6=rMF[U/>4~Q+7VVbN5$TkA328/HC}R5?9uE96)^D#$-hHu');
define('AUTH_SALT', 'Z.+p<6_qB<4}kU)J!tQ^Z;X)BDoT^CFB(G}Sj|S3[psK;>9&fWgxbL~!<`bzdB?l');
define('SECURE_AUTH_SALT', '<7<%POVclR+J2[n,%[Isb%+E;l92S>54/1Lk;pZZU5k0uL<vN+ioTH7HAeEMb`k&');
define('LOGGED_IN_SALT', '1,iRMdasr%xa;wW&Rb6tMTB+J|s j$.7pQ~x%oHorsBh4a-3#~o`Fab1rfnItJDi');
define('NONCE_SALT', 'vHvht_Y (?T$<^>MH!?>~o.+Vr6$m[ {9.4z] xDGlTCmBbIU~4).9_jGDK7NX3=');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

