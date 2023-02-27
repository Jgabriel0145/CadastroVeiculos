<?php

define('BASEDIR',dirname(__FILE__, 2));
define('VIEWS', BASEDIR . '/App/Views/');

$_ENV['db']['host'] = 'localhost:3307';
$_ENV['db']['user'] = 'admin';
$_ENV['db']['pass'] = 'admin';
$_ENV['db']['database'] = 'db_veiculos';