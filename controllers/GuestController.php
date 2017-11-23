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
use app\models\UserscoreForm;
use app\models\UserscoreRecord;

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
    
    public function actionAddscore()
    {
        if(Yii::$app->request->isPost)
        {
             return $this->actionAddscorePost();
        }
        $score = new UserscoreForm();
        return $this->render('addscore',['score'=>$score]);
    }

    public function actionAddscorePost() {
        $score=new app\models\UserscoreForm();
         if($score->load(Yii::$app->request->post()))
          if($score->validate())
          {
              $scoreRecord=new scoreRecord();
              $scoreRecord->setUserJoinForm($score);
              $userRecord->save();
              return $this->redirect('/user/thanks');
          }
    }

}
