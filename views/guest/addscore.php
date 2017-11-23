<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


$this->title = 'Add Score';
?>

<div class="panel panel-success">
    <div class="panel-heading">
        <i class="glyphicon glyphicon-bitcoin"></i> &nbsp;
       Вывод 
    </div>
    <div class="panel-body">
        <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>

    <?php $form = ActiveForm::begin([
        
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

        <?= $form->field($score, 'userscoreorg')->textInput(['autofocus' => true]) ?>

        <?= $form->field($score, 'userscorenumber')->textInput()  ?>

       

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Вывести', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

    </div>
</div>