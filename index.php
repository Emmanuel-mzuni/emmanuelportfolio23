<?php 

require 'services/autoloader.php';

$file = $_GET['page'] ?? 'Home';

define('ROOTDIR', basename(__DIR__), FALSE);
define('HOST', trim(htmlspecialchars($_SERVER['HTTP_HOST'])), FALSE);
define('HEADER', trim(htmlspecialchars($file)), FALSE);


files_group();

$OBJ->RunApp();