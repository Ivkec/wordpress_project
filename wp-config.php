<?php
/**
 * Основне поставке Вордпреса.
 *
 * Ова датотека се користи од стране скрипте за прављење wp-config.php током
 * инсталирања. Не морате да користите веб место, само умножите ову датотеку
 * у "wp-config.php" и попуните вредности.
 *
 * Ова датотека садржи следеће поставке:
 * * MySQL подешавања
 * * тајне кључеве
 * * префикс табеле
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL подешавања - Можете добити ове податке од свог домаћина ** //
/** Име базе података за Вордпрес */
define( 'DB_NAME', 'kmi_db' );

/** Корисничко име MySQL базе */
define( 'DB_USER', 'root' );

/** Лозинка MySQL базе */
define( 'DB_PASSWORD', '' );

/** MySQL домаћин */
define( 'DB_HOST', 'localhost' );

/** Скуп знакова за коришћење у прављењу табела базе. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Не мењајте ово ако сте у сумњи. */
define( 'DB_COLLATE', '' );

/**#@+
 * Јединствени кључеви за аутентификацију.
 *
 * Промените ово у различите јединствене изразе!
 * Можете направити ово користећи {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org услугу тајних кључева}
 * Ово можете променити у сваком тренутку да бисте поништили све постојеће колачиће.
 * Ово ће натерати кориснике да се поново пријаве.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '[b@jcl;h[(k[z$(^EJ!wh];|c*~u;/95gUEoR!X*la{W([l6}&55l;:#{+.XPRH8' );
define( 'SECURE_AUTH_KEY',  '(;QfGr)KcvrO.vWaVD>f9*Ib843nJ>Li7kH7TCTY!/!e~m1YxNY&>6T3i?Ucq0M3' );
define( 'LOGGED_IN_KEY',    'J~LYqTW-+}fOf33lbcD%^W_D(t8Vw&zb2[IoZ: 2AKeRUQ2#X|ha5&M^aRJTq{?%' );
define( 'NONCE_KEY',        'l^]+fReI,y!yK~^~{]>y*# ?m?|`nPdNS0g8T1)WvZUNjaC9GnD>#4Gf=,e+?9qU' );
define( 'AUTH_SALT',        '9Of/mAFPP-9onx4*zGow;4oH0h 5H,ep ^$uRF_ehMq/+b%iFdTapj^m>qxhq(Z&' );
define( 'SECURE_AUTH_SALT', '90u8Ko*b;~8h42J)XA$w KW7.m(Z&N|P_5B3CeaIu6F{,WzSI?MEV6MW{yclC&zz' );
define( 'LOGGED_IN_SALT',   '=y]9@6C(t:NbD/w[)=k$ZqhpLID%/FjK?( yJ(sEb`]|%xpSdq5VI0wXu;0]] Ye' );
define( 'NONCE_SALT',       'P<*~D<,EKS&z>&NujFcFWp3v#PHAPAtq5~JQ>h`>PKxvXECurgzDuI*$mr*|3zVr' );

/**#@-*/

/**
 * Префикс табеле Вордпресове базе података.
 *
 * Можете имати више инсталација Вордпреса у једној бази уколико
 * свакој дате јединствени префикс. Само бројеви, слова и доње цртице!
 */
$table_prefix = 'wp_';

/**
 * За градитеље: исправљање грешака у Вордпресу ("WordPress debugging mode").
 *
 * Промените ово у true да бисте омогућили приказ напомена током градње.
 * Веома се препоручује да градитељи тема и додатака користе WP_DEBUG
 * у својим градитељским окружењима.
 *
 * За више података о осталим константама које могу да се
 * користе током отклањања грешака, посетите Документацију.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* То је све, престаните са уређивањем! Срећно објављивање. */

/** Апсолутна путања ка Вордпресовом директоријуму. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Поставља Вордпресове променљиве и укључене датотеке. */
require_once( ABSPATH . 'wp-settings.php' );
