<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 10/7/2018
 * Time: 6:47 PM
 */
require 'application/lib/Dev.php';

use application\core\Router;

/*function that shows which class is not included before how to show error */
spl_autoload_register(function($class) {
   $path = str_replace('\\','/',$class.'.php');
   if(file_exists($path)){
       require $path;
   }
});
session_start();

$router=new Router();
$router->run();
