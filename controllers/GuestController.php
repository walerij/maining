<?php

namespace app\controllers;

use app\models\UserForm;
use app\models\UserRecord;
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

        return $this->render('index');
        //return $this->render('about');
    }


    public function actionUserscore()
    {
        $userForm=new UserForm();

        $userRecord = UserRecord::find()->all();


        return $this->render('userscore',['userRecord'=>$userRecord]);
    }
}
