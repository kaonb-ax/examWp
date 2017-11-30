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
define('DB_NAME', 'wp');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'atax');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'kaonb');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '3!TZ2i:+fJ0nqIrv#EgIW2G9]&kxyuIT$>Y$~t+z1pB%wm#aoOK~ h?rNq2pgkhX');
define('SECURE_AUTH_KEY',  'Zt<ST&~U$}7ce_Y-m?5TtC%=XCGVQNx-a,^29(H<VzT!Zj{PcS1V^^bqD7fk=hQA');
define('LOGGED_IN_KEY',    '>lJ2Q0pX;XWf3]|87I|WRq,UTe56]7]/8m-4M]U=Z1y>3hU9:W7w.wg1{M)T zRK');
define('NONCE_KEY',        'Io= -3x0tNV08>|`7.VDPfK0xv_+_+)%L^2v$>`buMJR5uLqh]ISXXd4x~^#dqOl');
define('AUTH_SALT',        'G#R*=P/f5[3hP^y?;vy3Bx.hnTe%FrUg8{c*Gz0wkHr76uI+7o$kY O4~>x=2ktk');
define('SECURE_AUTH_SALT', 'ik}b%xtZO.HX|Y!{A@?4.).nJDaiR`ZfVF6Jn%zpF}HB8Br=*f%:%HrV-Av5B,k`');
define('LOGGED_IN_SALT',   'XC.T;;cgbk/7 +QpLIf?p h_@o{7+$-G^dNAy87@y]8#$-A|2?>,$ uNAR/9KlpR');
define('NONCE_SALT',       '}Y?s&A$$gUS0RC<!2TB},XUS%X3&sx!;%$w|%_CqsdTAPn<In5h&d)LG7}>:[OIj');

define('FS_METHOD', 'direct');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
