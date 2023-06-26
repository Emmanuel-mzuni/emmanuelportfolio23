<?php 

function files_group() {

    require 'services/configurations.php';
    require 'services/helpers.php';
}

spl_autoload_register(function($class) {
    
    if (!file_exists($class.'.php')) {

        error('File not found');

    } else {

        include_once $class.'.php';

    }  
});

use Services\Route;
$OBJ = new Route();
