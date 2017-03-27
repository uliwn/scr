<?php
/**
 * Grundeinstellungen für WordPress
 *
 * Zu diesen Einstellungen gehören:
 *
 * * MySQL-Zugangsdaten,
 * * Tabellenpräfix,
 * * Sicherheitsschlüssel
 * * und ABSPATH.
 *
 * Mehr Informationen zur wp-config.php gibt es auf der
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Zugangsdaten für die MySQL-Datenbank
 * bekommst du von deinem Webhoster.
 *
 * Diese Datei wird zur Erstellung der wp-config.php verwendet.
 * Du musst aber dafür nicht das Installationsskript verwenden.
 * Stattdessen kannst du auch diese Datei als wp-config.php mit
 * deinen Zugangsdaten für die Datenbank abspeichern.
 *
 * @package WordPress
 */

// ** MySQL-Einstellungen ** //
/**   Diese Zugangsdaten bekommst du von deinem Webhoster. **/

/**
 * Ersetze datenbankname_hier_einfuegen
 * mit dem Namen der Datenbank, die du verwenden möchtest.
 */
define('DB_NAME', 'pauliwin_wp1');

/**
 * Ersetze benutzername_hier_einfuegen
 * mit deinem MySQL-Datenbank-Benutzernamen.
 */
define('DB_USER', 'pauliwin_wp1');

/**
 * Ersetze passwort_hier_einfuegen mit deinem MySQL-Passwort.
 */
define('DB_PASSWORD', 'xate6beca');

/**
 * Ersetze localhost mit der MySQL-Serveradresse.
 */
define('DB_HOST', 'pauliwin.mysql.db.internal');

/**
 * Der Datenbankzeichensatz, der beim Erstellen der
 * Datenbanktabellen verwendet werden soll
 */
define('DB_CHARSET', 'utf8mb4');

/**
 * Der Collate-Type sollte nicht geändert werden.
 */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden untenstehenden Platzhaltertext in eine beliebige,
 * möglichst einmalig genutzte Zeichenkette.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle Schlüssel generieren lassen.
 * Du kannst die Schlüssel jederzeit wieder ändern, alle angemeldeten
 * Benutzer müssen sich danach erneut anmelden.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9ZujdquKs%Xs&Z6Dg1~_?eQqIra_abg,Kir]UCB&JfXomnR5;DFKi!Rn:G7By<M}');
define('SECURE_AUTH_KEY',  ',KtF|ha@tk*~7|S>=gE^8ApH_TzU6yN`djt-Y8x$f(=&oi(LSoxW$X2u4g?N;ef6');
define('LOGGED_IN_KEY',    'I7:?L4^.b~s`e6/?9<PiF`GFYBC<.-c*iM4PR^>E2NlI@jd>$?vYpm0[m,$.<n<X');
define('NONCE_KEY',        'ZKh#gK34IXu1>m`:))y)XiMa(,.lcE)<%!vQz`-f@!h)7wvjibjT=qghC%cjzUa-');
define('AUTH_SALT',        '~!cT4)x*r`xaFF: k%,iZ/:9,0;+YxXg($^aP0iZ:F)Qkn?b($jFsqhKXSPDC)59');
define('SECURE_AUTH_SALT', '+[h6:w`OtnIVEI.#XqIvscC5rr{C](-%R*/)/vo5,8%/eZN5n2eO??[d{bC)~Nj7');
define('LOGGED_IN_SALT',   'W!(NL$(%lFnhbntaInx7;XY+^BIl#D%/[7*kc<vtPLGr;n6]gG8ESBdw_R)oZd@J');
define('NONCE_SALT',       'HcLS$KkL}Z16KHzf53&o+-a!*Yhvt#M7tD5h !-A8[J,%QHh|].^at#!E<hK@2Im');

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 * Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 * verschiedene WordPress-Installationen betreiben.
 * Bitte verwende nur Zahlen, Buchstaben und Unterstriche!
 */
$table_prefix  = 'wp_';

/**
 * Für Entwickler: Der WordPress-Debug-Modus.
 *
 * Setze den Wert auf „true“, um bei der Entwicklung Warnungen und Fehler-Meldungen angezeigt zu bekommen.
 * Plugin- und Theme-Entwicklern wird nachdrücklich empfohlen, WP_DEBUG
 * in ihrer Entwicklungsumgebung zu verwenden.
 *
 * Besuche den Codex, um mehr Informationen über andere Konstanten zu finden,
 * die zum Debuggen genutzt werden können.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Das war’s, Schluss mit dem Bearbeiten! Viel Spaß beim Bloggen. */
/* That's all, stop editing! Happy blogging. */

/** Der absolute Pfad zum WordPress-Verzeichnis. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Definiert WordPress-Variablen und fügt Dateien ein.  */
require_once(ABSPATH . 'wp-settings.php');
