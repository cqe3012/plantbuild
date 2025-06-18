<?php
//include('home.php');
require 'vendor/autoload.php';

use Medoo\Medoo;

$mydb = new Medoo([
    'database_type' => 'mysql',
    'database_name' =>'plantdb',
    'server' => 'localhost',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
    'collation' => 'utf8_general_ci',
    'port' => 3306,
]);
?>