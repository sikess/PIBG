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
define('DB_NAME', 'pibg');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '*28321321');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', '~H?f%P}!#@xI6qQkYD2< ZXz)*s-D,4HF~gFwU?%|qi0|g|ed8%w!fqRRkv?Jebh'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', 'Tk)l_Xui-xOJ9Mtf~aCi%+]#rki;)~h@!]2__tb[A;1xxPE}s9paS=!]Bx>G6.2g'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', '[G2!pXr=C:c52K;zvg{NVJq,.*5IF`]u4F+jPDa*8KX?[doZ7%h 319d/#_9y^1E'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', 'd`hUFzA_MzJiz|)Qy AsuOHZ^(V4iEPOt2X^Kw1QR&D|#6ULRr,Fg$gW<sh!dYKP'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'X=wmu?B&e4_loky(@~^?SfrB+}?xQ`.ny>ky_FavnL=e97lQ5QX&vdPf7VBG-<vq'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'j U5J@!l_:RO8dWa0x[ h;Ec-w)stpwy?)I|9[{Es9Wj;9NWJrPV}XPQ]s7~P3z}'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', ':0,PP|i]3zepiKTVHw_IuW/2> 47gIp?r{k>:wvxP(y:,UK3EO-1GX;Sh2c=4z-1'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', 'j%IS/6FF+rkVnIP<89t7^Pzat;g219U_BF.^Ygz^ thv`$0~m![UHYxk%^JYy+)e'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

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

