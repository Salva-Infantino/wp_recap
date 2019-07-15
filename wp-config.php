<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', "wp_recap2" );


/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', "root" );


/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', "root" );


/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', "localhost" );


/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );


/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Bp,zeAld:o@v5}C~mD836UC5`eynX_n9MD+)}fg*fpl)p.LV;m6{C/:b}B@7X$j|' );

define( 'SECURE_AUTH_KEY',  '29:-=]c-U~!;@k]q<GR`>s-/ND+G&Ji&-@Fcy$YZN%tIr*Q`o;8{Sc+vg7AC^A/y' );

define( 'LOGGED_IN_KEY',    '02tU&WRpW/8bJl:7Hg+?N$#|xq}q/T|H^DJhy>/H?TqIQn+0V8eodoGDoI`D.%.&' );

define( 'NONCE_KEY',        '=%l.u4GqG,],@HY,CJ#ci?)!=1vE&.-NTT&1G;Ve-#^o:dZ,9s>Kna0pHT|{nTad' );

define( 'AUTH_SALT',        'CB:41eQ#ti Wt<J]Huc~]C(%X,69v$ORTO<5AJ,|UaG/lS2#uO<P):8E,jo_q[VF' );

define( 'SECURE_AUTH_SALT', '5g>?E5W]APzF|UiN]wEq8Y;%m11.Sz$d8pi$f1#?cN2=o[mq5d7V3lvM>lE5hCqf' );

define( 'LOGGED_IN_SALT',   'LP+Ghik?e-`zNxXTY!wH{K(t1vSA?Ze*tKw}6<DHNYLu3O@xT)0I>=*FwsH;g*`E' );

define( 'NONCE_SALT',       '51aBHWBE8p41$:]fbc0~KH)w/RRw.)?lQ3yI**XMO}Rkx>A1kv;S0jd)dX>&o%A#' );

/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'exo2_';


/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
