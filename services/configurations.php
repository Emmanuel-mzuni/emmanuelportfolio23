<?php 

// -------------------------DATABASE CONNECTION
/*
 **UNCOMENT TO USE DB CONNECTION
 */
$SERVER['driver']   = 'mysql';
$SERVER['host']     = '127.0.0.1';
$SERVER['db']       = 'myportfolio';
$SERVER['username'] = 'root';
$SERVER['password'] = '';

define('SERVER', $SERVER, FALSE);

#development or production
$SYSTEM['ENVIRONMENT'] = 'development';

define('ENV', $SYSTEM['ENVIRONMENT'], FALSE);