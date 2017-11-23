<?php
namespace app\models;
class UserscoreForm extends \yii\base\Model{

    public $userid;
    public $score;
    public $userscoreorg;
    public $userscorenumber;

    public function rules(){
        return [
            ['userid','required'],
            ['scorenumber','string','min'=>20,'max'=>20]
        ];
    }
    
    public function setScoreOutput($userscoreRecord)
    {
        $this->userid=$userscoreRecord->userid;
        $this->score=$userscoreRecord->score;
        $this->userscoreorg=$userscoreRecord->usscoreorg;
        $this->userscorenumber=$userscoreRecord->userscorenumber;
        
    }

}