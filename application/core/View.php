<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 10/9/2018
 * Time: 11:45 PM
 */

namespace application\core;


class View
{
    public  $path;
    public  $route;
    public  $layout='default';

    public  function __construct($route){
      $this->route=$route;
      $this->path = $route['controlller'].'/'.$route['action'];
      //debug($this->route);

}
public function  render($title,$vars=[]){

        if(file_exists('application/views/'. $this->path.'.php')) {
            ob_start();
            require 'application/views/' . $this->path . '.php';
            $content = ob_get_clean();
            require 'application/views/layouts/' . $this->layout . '.php';
        }else{
            echo 'View not Found'.$this->path;
        }
}
public  static function errorCode($code){
        http_response_code($code);
        if(file_exists('application/views/errors/'.$code.'.php')){
        require 'application/views/errors/'.$code.'.php';}
        exit;
}
public function redirect($url){
header('location: '.$url);
exit;
}
}
