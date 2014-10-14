<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'projet01');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '1234');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données.
 * N'y touchez que si vous savez ce que vous faites.
 */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'T-n^&M/wqsO)vTmC}{.IP1`;||!M%+Y!VCM-*q-IeMR>!Fy~13[CpW|*W*iO@`HG');
define('SECURE_AUTH_KEY',  'AbshHj;Fl4m$m$:gt d^aIKHt:E?N_}d8 Y}dP1-q#7;y$>wjs,,#oZWw:lU-k`=');
define('LOGGED_IN_KEY',    '$V#)IK{X/&Yz6u1r-WJ`y@yl? pa_!!QQPKk]f8Pn)ilrCylBd6:M=+|(RMG1.PU');
define('NONCE_KEY',        'r, ,27Y EEg%8;BH|;,CY,;8{Ti|J^Uph@yODLPf)pVK1^s^DoR#W(m:#:Di{wM@');
define('AUTH_SALT',        'kcK^kAD8 ;++F9C53bPdUOp%jRdYRtQR{VXR%,5D-!N+kK)Y}T]+?PJxP>+oXD1L');
define('SECURE_AUTH_SALT', '8?g&Xh;TDy4k]99^5|3P-JvDzphX{/m3!/,!c9qn ;FxNkZ/u;=M{g<0:JdP5b/o');
define('LOGGED_IN_SALT',   'w?+0o{A94Uf22p4BvL8B3G{VCkd?KsO$&A`s=-Y%j.;>_CVLG6(D0jnr%X-Q;eBq');
define('NONCE_SALT',       '>NdE`v+ERK8HAYOjR0$#0YsV4~]TBRiYJ?jm|:1ib5-T|-;}%%L^V^+[xzuA0vom');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode deboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');