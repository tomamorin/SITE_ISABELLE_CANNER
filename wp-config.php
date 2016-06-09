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
define('DB_NAME', 'isabelle_canner');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '0j#&vs|e{x[:gD`=z,>{ph&K`FATN?cayrTM0Q&$<-fH7yYKa-r+pGHx^2rq736M');
define('SECURE_AUTH_KEY',  '7&LYX?)6bvlHYN:ob!+t7YL9c;n@v{h!BotCXgFU5Kl[B]|z52cLPq55Jeyql4Me');
define('LOGGED_IN_KEY',    '7QR,)Ey I3:-=o;y q8#vV`S,|kTPq`W{ jb}_j@qENLQhl58bb.;lQkEN`XAx#a');
define('NONCE_KEY',        'mthQBZ!/apSq/n&c>-iL2LG $bEv55?dPu}Pixa}F6pipH5rb>PT*_/4?&@v#*N4');
define('AUTH_SALT',        'oq<Ed)rP_6~MKtaXz~r<m]?uRXu@fc/Akj@>CEbaUTol(+<1DG*Vr V6MS0: #$(');
define('SECURE_AUTH_SALT', '-CzdRa=P4fBg-(`G(KN10RqW!&pQ7EJY2*-c#0FH`$V7d/av:;&$|STZf9Gx%,I`');
define('LOGGED_IN_SALT',   'a[(5bxW.[lipo~>/3QpHXR<=Tw*8d6{>xO~1[H+N!{H3 qMTU&&[xC&)RSNHVr!w');
define('NONCE_SALT',       '+?|)OtsEd$2G&`ZT$ mE36Dt#e;3nD6`3@FxgM*#-6r%%p&BQaR&P?C_lXq!y[E?');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'ic_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');