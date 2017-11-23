<?php
namespace app\models;
class UserscoreForm extends \yii\base\Model{

    public $userid;
    public $score;
    public $scoreorg;
    public $scorenumber;

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
        $this->scoreorg=$userscoreRecord->scoreorg;
        $this->scorenumber=$userscoreRecord->scorenumber;
        
    }

}