<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 10/8/2018
 * Time: 11:15 PM
 */
namespace application\lib;

use PDO;
class Db{
    protected $db;

    public function __construct()
    {
       $config=require 'application/config/db.php';
       //debug($config);
        $this->db = new PDO('mysql:host='.$config['host'].';dbname='.$config['dbname'].'',$config['user'],$config['password']);
    }

}