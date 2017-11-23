<?php
namespace app\models;

use yii\base\Model;

class UserForm extends Model{

    public $nickname;
    public $email;
    public $passhash;


  public function rules()
  {
      return [
          ['email','required'],
          ['nickname','required'],
          ['passhash','required'],

      ];
  }
}