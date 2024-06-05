<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordprees' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'wordprees' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'qwe' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'g(~=_rCofJai6ehQ~/%MiH=jrb_Nn{tF .!4*4Du##n(L_)xiI]Sg*HtLFN&XcV<' );
define( 'SECURE_AUTH_KEY',  '=_40HEnm*?6*tHhKl39z77,+7B8^)IK{?11stkcF.XukD^yMT]J(/GE[3jW6J;Q^' );
define( 'LOGGED_IN_KEY',    'iRU>ZS|UwC/UcW)}#~B[]9Hu;6+k=(F5bLUh)0rSl*gnhnyzi|uJIF_ePr#Dp,?{' );
define( 'NONCE_KEY',        ')K?/4p@+D8*b$0UK-yTK=!?PotNrF6`|(A^yuh~K>T:l&w/.Q|+]o4HqM;qnEYOn' );
define( 'AUTH_SALT',        'Eo&`Dxv>K_.izj<iRTSAMT^`viAV$M2EO{#,to )[LBYCSctX&U9X-g+9XK|%Xc3' );
define( 'SECURE_AUTH_SALT', 'YlOI!{K}g7.8rTxXk=q|{k:EI?Qm5>tb9J=DUy|t=u}2$+>i5YrZT:T_q?~S3FId' );
define( 'LOGGED_IN_SALT',   '7,o+u]!<j6Jz<VEr00[+!1P%v<B^6{;aejv[l;VdZVx_UIAn_boOi& =ZT&bU4=W' );
define( 'NONCE_SALT',       '5;Rs4lxfYL^0qGGBd]hk[G)iwFsB. <A5j_WF.JLjVc1>/w5[DX&&(w~46X3BkJY' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
