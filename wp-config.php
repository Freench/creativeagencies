<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'creative_agencies' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'uZH-m>W>/?s@+)FL`7tG[o#F?M;;0wGu8*[rV3%Xdv3_[7u=[g!Ii.3vgzz_yEkR' );
define( 'SECURE_AUTH_KEY',  'yOs&D=PTw)Ttk;j3)qIw]^KKL}%(G6^=qfper[P8#E}@%aoM^?0=;Orm/Z_E{u]3' );
define( 'LOGGED_IN_KEY',    'E^F[f?qP1]h~!#a)>q53[[ZeE(z@H`T+gJnJY}=VbcI_xyQ#e,f|9%-8r7l7s+_}' );
define( 'NONCE_KEY',        '{_?QMi=S{spj!U5ukNg&^eyH$hG(5fQs,fSeZA9{]tma5Q|ZPDG]lT^>^vQts+9q' );
define( 'AUTH_SALT',        'AbR,4}*fCG^:)Klhkj`ngLbmVdy%qAMrl^#[N@20Gf|PZJ4[kRIk1yy~~tbqEN]I' );
define( 'SECURE_AUTH_SALT', 'w1 *n/<j+td/j:c:hftWeoOjgA)wJ@%|Z8[Jh?O(Zh?-PS(B+H2|/GqydGPmG^sU' );
define( 'LOGGED_IN_SALT',   '}Bzb3q`;%3D4Q m/v:y$P`W0`Xmu2jnduOZAW-b)7CBXw^?}@8z(9v}odU rm} 0' );
define( 'NONCE_SALT',       '!?Rw;niB_G*m#G8S.q%K)/ivZ{-j.#Q6P34WC$7%S$)XYr.+4kwES|,hx4>Q]R4(' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'cda_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
