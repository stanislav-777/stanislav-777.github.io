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
define( 'DB_NAME', 'wordpressdatabase' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'adminWordPress' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         '8qg;@:nAn02jG,P1t|sVPAUE|)q*cA4,rr$YJ+`U5cY@#nIs&:_0DuxVC2v5, la' );
define( 'SECURE_AUTH_KEY',  ':cZ||9C0m{c |Yed-CD0}YQRqamSO*t+L1vIbp zB|Djw)&#P{vMUaMSN%;LC89^' );
define( 'LOGGED_IN_KEY',    'rD^<~hlSTk0K-]W$9);osWh!Lx,PR71[YGqeAzk{(Cz1pA.Vg_Yu};h.B^u&ru[}' );
define( 'NONCE_KEY',        'Jt,bkBA}[@4CrhHhvm+}`0l&yO-;rUp:~R<c2H)&v@,1hXT:X|08m)bBd.QJZK!p' );
define( 'AUTH_SALT',        'G3^$ws*0KNn-z$y#Rc2]7`aD,R9>cF+@lJky-b5T6T4&rU}57,9B_b`:; OpR{`L' );
define( 'SECURE_AUTH_SALT', 's7fV@:a/1f4bYczW%26GBa5lZ@I]UKo1AHiiE)yMEDYU_g<zc5Owgu4L@k!Qebbh' );
define( 'LOGGED_IN_SALT',   'V@I1.o6,g`yE?E5ma^0ED?:D86Ekd8K6Mz_N$;OkPu}Svvw@~883wnUQj:`5hOra' );
define( 'NONCE_SALT',       '(}6_%avuDmXk=.~8P)8fj=o@UpkhB@dvR3kTpjmlNq-IHx#~!(SSMRKkx#~WW&8R' );

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
