<?php
require __DIR__ . '/vendor/autoload.php';
spl_autoload_register( function( $className ) {
    $className = str_replace( "\\", DIRECTORY_SEPARATOR, $className );
    include_once __DIR__. '/' . $className . '.php';
});

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$ctrl = new app\controllers\MainController();

if ( !empty( $_GET[ "search" ] ) ) {
    $action = "search";
} else {
    $action = $ctrl->getDefaultAction();
}

if ( method_exists( $ctrl, $action ) ) {
    $ctrl->$action();
} else {
    throw new \Exception( "Action not found." );
}