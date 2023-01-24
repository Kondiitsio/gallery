<?php

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
// define('SITE_ROOT', DS . 'C:' . DS . 'xampp' . DS . 'htdocs' .DS. 'gallery');
// define('INCLUDES_PATH', SITE_ROOT.DS.'admin'.DS.'includes');

define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'] . DS . 'gallery' );
define('INCLUDES_PATH', $_SERVER['DOCUMENT_ROOT'] . DS . 'gallery' . DS . 'admin' . DS . 'includes' );

// C:\xampp\htdocs\gallery

require_once("functions.php");
require_once("new_config.php");
require_once("database.php");
require_once("db_object.php");
require_once("user.php");
require_once("photo.php");
require_once("session.php");
?>