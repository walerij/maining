<?php
namespace app\models;
class UserscoreForm extends Model{

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

}