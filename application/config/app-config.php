<?php

defined('BASEPATH') or exit('No direct script access allowed');
/*
* --------------------------------------------------------------------------
* Base Site URL
* --------------------------------------------------------------------------
*
* URL to your CodeIgniter root. Typically this will be your base URL,
* WITH a trailing slash:
*
*   http://example.com/
*
* If this is not set then CodeIgniter will try guess the protocol, domain
* and path to your installation. However, you should always configure this
* explicitly and never rely on auto-guessing, especially in production
* environments.
*
*/
define('APP_BASE_URL', 'http://localhost/perfex_crm/');

/*
* --------------------------------------------------------------------------
* Chave de encriptação
* IMPORTANTE: Não mude isso nunca!
* -------------------------------------------------- -------------------------
*
* Se você usar a classe Encryption, deverá definir uma chave de criptografia.
* Consulte o guia do usuário para obter mais informações.
*
* http://codeigniter.com/user_guide/libraries/encryption.html
*
* Auto adicionado na instalação
*/
define('APP_ENC_KEY', 'icompsoft');

/**
 * Database Credentials
 * The hostname of your database server
 */
define('APP_DB_HOSTNAME', '127.0.0.1');
/**
 * The username used to connect to the database
 */
define('APP_DB_USERNAME', 'root');
/**
 * The password used to connect to the database
 */
define('APP_DB_PASSWORD', 'sa1234');
/**
 * The name of the database you want to connect to
 */
define('APP_DB_NAME', 'perfex_crm');

/**
 * @since  2.3.0
 * Database charset
 */
define('APP_DB_CHARSET', 'utf8');
/**
 * @since  2.3.0
 * Database collation
 */
define('APP_DB_COLLATION', 'utf8_general_ci');

/**
 *
 * Session handler driver
 * By default the database driver will be used.
 *
 * For files session use this config:
 * define('SESS_DRIVER', 'files');
 * define('SESS_SAVE_PATH', NULL);
 * In case you are having problem with the SESS_SAVE_PATH consult with your hosting provider to set "session.save_path" value to php.ini
 *
 */
define('SESS_DRIVER', 'database');
define('SESS_SAVE_PATH', 'sessions');

/**
 * Enables CSRF Protection
 */
define('APP_CSRF_PROTECTION', true);
