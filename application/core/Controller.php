<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 10/9/2018
 * Time: 11:25 PM
 */

namespace application\core;

use application\core\View;

 abstract class Controller
{
    public $route;
    public $view;
    public  function  __construct($route){
       $this->route=$route;
       $this->view= new View($route);
       //debug($this->route);
 }
 }