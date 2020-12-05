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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'childhood' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'child_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         'd&F1gj|zk]Wjh1_,7`7*#)4L4;!@.o{RvBKRXM<+TBO#L%.rq>B$4,uDa*II*}dr' );
define( 'SECURE_AUTH_KEY',  '9Qskkkv!3JEtS03jCoREZ[D0>xes./$X cuFWbZze60_Xf EM7Kf;*G/X#f2?C|h' );
define( 'LOGGED_IN_KEY',    'z,L&)Sr] vb_D nj]?D_#rm:r-:6:h^(v ^1!iIjdfoXk/Hn}D8J^ow13!oT:n^L' );
define( 'NONCE_KEY',        '%Aemg).>Qf%`#%MsMJ(P.|T<A*KMe__~MFMPF5t<u5,,Ap~-|WX93,**NA+*Vl+k' );
define( 'AUTH_SALT',        'Z^9D3j42Ceg?X?gDg[-1A&GOCBk(U3#i@Z-yIt?|M<sxWk5knK-*@@80bpB[uE0g' );
define( 'SECURE_AUTH_SALT', 'RqH=qy_ph~7guHeuRj:YwOv(I^/K+(%ZN1fgm5?TYevYJh>Mh*>.&rTfWtcvdw<^' );
define( 'LOGGED_IN_SALT',   'Fnj+s/KZgB]wPp- <Mki.gU&>NLd^{bq?Xj-hs({dN9BvVr 2zwThE-uAzK0q.Y>' );
define( 'NONCE_SALT',       'md6f$0uT$.bh1c>khPSH?Er]i9b%l#?^6v;oFXmZ@-NZ=,FMQ]lX_=~7u3W%!M#>' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
