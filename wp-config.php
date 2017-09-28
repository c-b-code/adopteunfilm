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
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'NDpj{v^3(L!!;#r#e|ln$*1uA%=M)8;_WPa:lHXO =c/u2HAjud`}{J=aVR5((.H');
define('SECURE_AUTH_KEY',  'FDk&H!)gcQ+#r?vsscf*cLJa2KqCC$Nmd c9.IEJJJA3o>=%|L%j<Z3_/C-Z):f!');
define('LOGGED_IN_KEY',    'R3<$[$eK0gC?IvP*x;<ZLkX,4mE&r{02.X{yX(<.oJ[.(W+9,O34B{JU)FGfrz[i');
define('NONCE_KEY',        'QVqxAc8<:]b!W/4_zTZQ1SnKwtXDKg ncY6itKfVW]h3b8mTB|5Q;L.A5TLR(uu4');
define('AUTH_SALT',        '}DiceQ)$4;+rl>:}<O>1`s4XDW611q^0;B17XL7-3Cx$set+XN^zrJ?CVk^28udc');
define('SECURE_AUTH_SALT', '3=5HKr^b*IhSt_F<l4Sp!,>eqA_8g5i95oMA]+6XKp->Y!z}x(W9_Q~R3}%1)T${');
define('LOGGED_IN_SALT',   'VZlP+qlbZIV4_oXDY#X,av.p27sF;CI@jYGZC`fD#bw$R8X9BYKCOB1VG!c0kS?j');
define('NONCE_SALT',       '!ErC~7RpFIjtkb{W^B8=G!y>o+?725 yhgbv1xP`{&>7S5?uIj8HT0:kLtu~i>Bc');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
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
define('WP_DEBUG', true);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
