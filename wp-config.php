<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'bricotips' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Umo{5#5`5OAmB5@B2I:HSz{K,~4!A(4`X(XRx5/eFLcrKuqdcJ,#Zh|_<^Zc5Qy)' );
define( 'SECURE_AUTH_KEY',  'VHGRU&^:c(@e9t,U(Sj777J%TV^GjZN=mbOXw}G;7<`<r%hrtCi+$^brUd<Z/|1$' );
define( 'LOGGED_IN_KEY',    '3*|}F&GnisM!I3mf=^%vrJlbLuT{>J/Av1~5{,y_&3H}||juF|m]k.63O%QzQnv&' );
define( 'NONCE_KEY',        'vRESBTj[QN^?KIgU3wA(6%RHU>!l0$YIetd#fB^VN7f.[mzt$aG5;w=W^Vm(LJ~u' );
define( 'AUTH_SALT',        'iL?dlt<[ /sPJ$d}0aNS[W_FLVIlqC[KxXU}hQ~OU5TTYtgH)s<Q(]X`Ndx^fSl|' );
define( 'SECURE_AUTH_SALT', 'x7hF=Dh!_lk=FrF{(4u`xDAF>T/GU.E/r):g9I-)uoTP bXi7^QK_q1aUP2A7,J-' );
define( 'LOGGED_IN_SALT',   ':Uv&SFvwMWHjG sZ^UIMTi@6T&IHY[TGE=SRx+WBd%P;AIWy*[nbNi?.H+QfQm2B' );
define( 'NONCE_SALT',       '1DW(K0x9nX(ap9w2XaDo(I2L<w/Rqs0YkSPa2V&=Oi*bgPhAodojgxw[&w3E{6~N' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
