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
define('DB_NAME', 'shurre');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY', 'YS?v;NV:$r|yPyqirRi.-iR6ie&~=2&V4Y]}[B]?}T8/^3 lm=1!*jUc7$LdV& k');
define('SECURE_AUTH_KEY', 'T?ST@7vjIU[aSc1x*j@AlXVY,),L;{Z%R/5|H6Wn6#N{6T)}<[WKT~%lJsRG1:kH');
define('LOGGED_IN_KEY', 'Fy~=aK_V/f,E4& T{7-a+ZeV!`&4vZHy.^ifGja LQglw@wvQt(p^n)&pT~pl)K^');
define('NONCE_KEY', 'aX[QaDUGc1EV5]u/*|HuBi=tS;=QNy#(gok~ayMECrX;b(njw+Ht?;tp8tN3#%__');
define('AUTH_SALT', 'TckGS7>Hm@8iiJu*6TyUScH*?]p6|t5QrOvC-}LTC1.Ac1(SW6)*sFQ;8_|({y2n');
define('SECURE_AUTH_SALT', 'mhdOOHKj<PH}@_2bfi0LG_?:eK%DSCv;(H(r*Yn%wA`!r,!n$Nr>J=g v%5D 7MW');
define('LOGGED_IN_SALT', 'ti7t+mdJAvm~}iP^frAMs<tD*$O-#Vgl44OoIU9Gn2Fe=WG[xGC(Vy]9F}}},+k6');
define('NONCE_SALT', '%L[7]JyMK^)Zd<suW<Qg|2*H{;n3Y@)gq{74D#Ni<iY_NPjj%{hE$GqwyG9|N5zd');

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

