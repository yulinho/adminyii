<?php

namespace app\controllers;

class AdminController extends \yii\web\Controller
{
    
    public $layout="admin";
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        return $this->render('login');
    }

    public function actionLogout()
    {
        return $this->render('logout');
    }

}
