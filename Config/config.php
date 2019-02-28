<?php

// incluimos las clases para trabajar con las BBDD, VISTAS y CONFIGURACION
include ('libs/spdo.php');
include ('libs/View.php');
include ('libs/config.php');

// arrancamos la sesión
session_start();

// creamos una instancia de la clase config para guardar la configuración
$config = Config::singleton();

// guardamos la configuración estática de nuestra App
$config->set('controllersFolder', 'controladores/');
$config->set('modelsFolder', 'modelos/');
$config->set('viewsFolder', 'vistas/');

// establecemos los parámetros de conexión a la BBDD
$config->set('dbhost', 'localhost');
$config->set('dbname', 'user_minishop');
$config->set('dbuser', 'user_minishop');
$config->set('dbpass', '123456');

// modo dev - manejo de errores
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);



 

?>