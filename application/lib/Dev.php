<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 10/8/2018
 * Time: 10:53 PM
 */
ini_set('display_errors',1);
error_reporting(E_ALL);

function debug($str){
    echo '<pre>';
    var_dump($str);
    echo '<pre>';
    exit;
}