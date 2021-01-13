<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'psycho' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'N:,:qgY|Tak~BXBC~;wB:Leb9_U`AE&Z_PDDmyLCi@S9/^WC~].qU}t==DU[8UIX' );
define( 'SECURE_AUTH_KEY',  'h`w]uQbYuP/a4AC,!<LN_+1Qa;@<y59e2B~;O)EG-`9sZ<]JVzIVDgA*WiT)A$eW' );
define( 'LOGGED_IN_KEY',    '41?n!=y0~1xbKT[:D~xi~r()n4ON<lge/sKJ7>)M]3+n5IxKED]Yrgn}81i*wOV&' );
define( 'NONCE_KEY',        'V=zVer1>]n?wXdL@sVC!/1&ar3t!VsJPO`UBEe|n@+(g: pCANGLaB7Rpt!YDDaU' );
define( 'AUTH_SALT',        'bgw+s]$g8,}8hBaJ[Np:$+T$!K$>W`;.Ih<gK/(B.zv/urg#PXG*:trw@lA|iMjl' );
define( 'SECURE_AUTH_SALT', '%|xsg@PZo{J_8&}hW-,7PB2aODVx1G+mWeJ.AE DnkQc-=3JcABb7y+)Bd9PMM[]' );
define( 'LOGGED_IN_SALT',   'uWXO.?x4RxudFhM;zl-Q,htr/EZn/jH[GJ$1bU?^`t%T#FhXW<q`%MO}TE/Gv?XL' );
define( 'NONCE_SALT',       'bYoMl[^PGZ+dv[%UFpKn#uH]-cdJsYmeUI;wH7rA?`pky@@X?93a%nmIYEhqF2~ ' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
