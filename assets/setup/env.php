<?php

if (!defined('APP_NAME'))           define('APP_NAME' ,'SPAS');
if (!defined('APP_ORGANIZATION'))   define('APP_ORGANIZATION' ,'4MG');
if (!defined('APP_OWNER'))          define('APP_OWNER' ,'4 Man Group');
if (!defined('APP_DESCRIPTION'))    define('APP_DESCRIPTION' ,'SMK Sungai Pusu Attendance System');

if (!defined('ALLOWED_INACTIVITY_TIME'))        define('ALLOWED_INACTIVITY_TIME', time()+15*60);

if (!defined('DB_DATABASE'))        define('DB_DATABASE', 'spas_db');
if (!defined('DB_HOST'))            define('DB_HOST','localhost');
if (!defined('DB_USERNAME'))        define('DB_USERNAME','admin');
if (!defined('DB_PASSWORD'))        define('DB_PASSWORD' ,'admin');
if (!defined('DB_PORT'))            define('DB_PORT' ,'');
