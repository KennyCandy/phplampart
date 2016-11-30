<?php
use Illuminate\Database\Capsule\Manager as Capsulate;

$capsule = new Capsulate();
$capsule->addConnection([
	'driver' => 'mysql',
	'host'   => '127.0.0.1',
	'port' => '3306',
	'database' => 'phplampart',
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8',
	'collation' => 'utf8_unicode_ci',
	'prefix' => '',
	'strict' => true,
	'engine' => null,
]);
$capsule->bootEloquent();