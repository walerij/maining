<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\User;
use app\models\ContactForm;

class GuestController extends Controller{
    
    
    public function actionIndex()
    {
        $model=new User();
        return $this->render('index', [
            'model' => $model,
        ]);
        //return $this->render('about');
    }
}
