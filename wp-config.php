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
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'intim' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
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
define( 'AUTH_KEY',         '(]B<l@A 3*QXtbtYYpD.3$gsCO@&PcmKcpqVR5%-}s$b)Az!lFBnNq38+bF|g>&?' );
define( 'SECURE_AUTH_KEY',  '|q+YflB!^)o^{WMzdl.!hU45OlHC3*WSv$u1kbW.OAR`GT2*&Vq^:Z|<0L0[bz|9' );
define( 'LOGGED_IN_KEY',    'F{s+tpU#AnNZtD<ZmB;!s [1Y1o_Up-Y<|r$tAcjHsa!t?^_w(oR2$NbCbNKQE`^' );
define( 'NONCE_KEY',        '|[?O$8=xwWT}qCmR}a1h909`pYp?rU?yKdv+7o752z3s W!Q3/Tm{GI4=G> ^O1$' );
define( 'AUTH_SALT',        '3Z+AAlY2Y=qIc5C[yf.>&_njEZmXZuGSD8{32KZ0U!&]@3+#1#3B5< o@xd+[S7&' );
define( 'SECURE_AUTH_SALT', '}N/J- kY~_m9;Afb2Md9@s&<hFi2<?rUp_`yq*2gc4eSkbBw*gk32%]^:=E0,)Uc' );
define( 'LOGGED_IN_SALT',   'a2Deic;5uTZOX/X+_e%/+]K=WU`j*ur7uh1k=449~cII/*Xr7}:2d@dM61!.iZ}$' );
define( 'NONCE_SALT',       'WYHI2H-:=(Jz4@HG5=pKB$Tlb7KS$KcIyT>x#*TITo(gCu3d0bu4cBrTD{^NFD##' );

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
