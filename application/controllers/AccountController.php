<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 10/9/2018
 * Time: 11:16 PM
 */
namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller {

    public  function  loginAction(){
        $this->view->redirect('https://google.com');
     $this->view->render('Entrance');
    }
    public  function  registerAction(){
        $this->view->render('Registration');
    }
}