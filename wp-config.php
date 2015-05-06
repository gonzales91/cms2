<?php
/**
 * Podstawowa konfiguracja WordPressa.
 *
 * Ten plik zawiera konfiguracje: ustawień MySQL-a, prefiksu tabel
 * w bazie danych, tajnych kluczy i ABSPATH. Więcej informacji
 * znajduje się na stronie
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Kodeksu. Ustawienia MySQL-a możesz zdobyć
 * od administratora Twojego serwera.
 *
 * Ten plik jest używany przez skrypt automatycznie tworzący plik
 * wp-config.php podczas instalacji. Nie musisz korzystać z tego
 * skryptu, możesz po prostu skopiować ten plik, nazwać go
 * "wp-config.php" i wprowadzić do niego odpowiednie wartości.
 *
 * @package WordPress
 */

// ** Ustawienia MySQL-a - możesz uzyskać je od administratora Twojego serwera ** //
/** Nazwa bazy danych, której używać ma WordPress */
define('DB_NAME', 'wordpress');

/** Nazwa użytkownika bazy danych MySQL */
define('DB_USER', 'krzysiu');

/** Hasło użytkownika bazy danych MySQL */
define('DB_PASSWORD', 'rpg');

/** Nazwa hosta serwera MySQL */
define('DB_HOST', 'localhost');

/** Kodowanie bazy danych używane do stworzenia tabel w bazie danych. */
define('DB_CHARSET', 'utf8');

/** Typ porównań w bazie danych. Nie zmieniaj tego ustawienia, jeśli masz jakieś wątpliwości. */
define('DB_COLLATE', '');

/**#@+
 * Unikatowe klucze uwierzytelniania i sole.
 *
 * Zmień każdy klucz tak, aby był inną, unikatową frazą!
 * Możesz wygenerować klucze przy pomocy {@link https://api.wordpress.org/secret-key/1.1/salt/ serwisu generującego tajne klucze witryny WordPress.org}
 * Klucze te mogą zostać zmienione w dowolnej chwili, aby uczynić nieważnymi wszelkie istniejące ciasteczka. Uczynienie tego zmusi wszystkich użytkowników do ponownego zalogowania się.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Fm7aAYxyi[>7nZ:D3j-X%I5m/jN~O(?,j5LSl6|fY|`Tn;;L)<C^[e-.i=1.KoJ+');
define('SECURE_AUTH_KEY',  'pf/M0bDW1]p{v?uH--;a|h.+P[++-KI;F6|OPvL+UN%TfmF}QUP([NM*UWn/KG:#');
define('LOGGED_IN_KEY',    'YQir.d!nuQMo;nfN!!Rs&#$D+.IT5kr2+r{p4fM1_n4fxO2}$yfzlItOX+]}A$jY');
define('NONCE_KEY',        'OR!z>W/%uC#tKwx&)6!!;9u+w51b2U.Ork w}W>ch!E4i)W2PjgMZ@Osu|[x1MoU');
define('AUTH_SALT',        '(?jt2]%QkslOHS$$uZg02y+,l^mf,.-{@bD2&PO_Q-Rx Xq:QnV}m_z9ab3=t#<P');
define('SECURE_AUTH_SALT', '1uo`oz+fSk[Jk3 /TVmDn7b=|82N;$O[[*7]i{pQO)+0>q YYLX=!5*Q`cUd,(Xg');
define('LOGGED_IN_SALT',   '_Z` ^}!6w,~b)+U**MeYMC.IT_+lA><cEf,^o P9g)X,;1;8F.KMq/y-<#iS~sS+');
define('NONCE_SALT',       ',|C3bxs)h|%U-qbEZNPIu:!G/RfO1EtpeW~dU{}D=;D38/O3xbCjX`}D!`5bTZ!*');

/**#@-*/

/**
 * Prefiks tabel WordPressa w bazie danych.
 *
 * Możesz posiadać kilka instalacji WordPressa w jednej bazie danych,
 * jeżeli nadasz każdej z nich unikalny prefiks.
 * Tylko cyfry, litery i znaki podkreślenia, proszę!
 */
$table_prefix  = 'wp_';

/**
 * Dla programistów: tryb debugowania WordPressa.
 *
 * Zmień wartość tej stałej na true, aby włączyć wyświetlanie ostrzeżeń
 * podczas modyfikowania kodu WordPressa.
 * Wielce zalecane jest, aby twórcy wtyczek oraz motywów używali
 * WP_DEBUG w miejscach pracy nad nimi.
 */
define('WP_DEBUG', false);

/* To wszystko, zakończ edycję w tym miejscu! Miłego blogowania! */

/** Absolutna ścieżka do katalogu WordPressa. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Ustawia zmienne WordPressa i dołączane pliki. */
require_once(ABSPATH . 'wp-settings.php');
