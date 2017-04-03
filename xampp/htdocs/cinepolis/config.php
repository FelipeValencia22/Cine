<?php

    $_PROTOCOL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') ? 'https://' : 'http://';
    define('ROOT',$_PROTOCOL.preg_replace('/[^a-zA-Z0-9]/i','',$_SERVER['HTTP_HOST']).'/'.str_replace('\\','/',substr(dirname(__FILE__),strlen($_SERVER['DOCUMENT_ROOT']))).'/');//Returns Project basedir
    define('REQUEST', $_PROTOCOL.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]);//Returns Request complete URL
    define('URL', ROOT);//If config file is shared then you'll need to add folder before ROOT
    define('LIBS','libs/');
    define('MODELS','./models/');
    define('BL','./bussinesLogic/');
    define('MODULE','./views/modules/');
    define('CONTROLLER','./controllers/');
    define('UI','./public/');

    define('_DB_TYPE', 'mysql');
    define('_DB_HOST' , 'localhost');
    define('_DB_USER' , 'root' );
    define('_DB_PASS' , '' );
    define('_DB_NAME' , 'cinepolis');

    define('HASH_ALGO' , 'sha512');
    define('HASH_KEY' , 'my_key');
    define('HASH_SECRET' , 'my_secret');
    define('SECRET_WORD' , 'so_secret');
