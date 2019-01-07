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
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'tH,,jpeXtKQ:(2s?5!qZi!JJ/XuA`p;ku^m}|}~hx:Duv#pc$x#ogq&/!sjV3!(^');
define('SECURE_AUTH_KEY',  '+C$=897_2-nr6oF0V#in8l$l&|F3h-2YX]kFq#IFryGtY)q8;=j#x5hoQG@*KfnO');
define('LOGGED_IN_KEY',    'GuH$/IydA&!Db+2Y*6T%42re>NZ 8 pvu|i3P=G!N*MsuB4q%dO~;5@3@TfrH5w;');
define('NONCE_KEY',        '>j~4D1_f1xSV l:9@H[_hSyP7/Rz}R5.zOGKm.b*<$ApQ;Z>I|$A4]uvg.h|pS(B');
define('AUTH_SALT',        ']r+G3)9#M,>rv%id,-_(blf9*_PFXOX4XbQJ<aa|:fx%<gsu_A0^&0yse-Obj<j!');
define('SECURE_AUTH_SALT', 's[<dAKY~iDlb<jWL`{>KDRqq5|ht*OYpW!GRi97F}Q.@U:n?PMa~kXkShDe]9e|f');
define('LOGGED_IN_SALT',   'sV(%36M.9ji} DX<xqQK|S%3NEx_jdd-67L_S7r&EzthzUx-ix%akeUl5ceS[D90');
define('NONCE_SALT',       '[tl<SjMv/`a&#,-6h~Q|]=Vhr 7 ci&-Zp|?prGCymP&rfA52GEHD&/1$rTG)LJb');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
