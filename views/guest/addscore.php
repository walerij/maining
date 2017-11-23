<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


$this->title = 'Add Score';
?>

<div class="panel panel-success">
    <div class="panel-heading">
        <i class="glyphicon glyphicon-bitcoin"></i> &nbsp;  Вывод 
    </div>
    <div class="panel-body">
        <h1><?= Html::encode($this->title) ?></h1>

        <?php $form = ActiveForm::begin(['id'=>'score']);
        //['id'=>'user-addscore-form']
        ?>

        <?= $form->field($score, 'scoreorg')->textInput(['autofocus' => true]) ?>
        <?= $form->field($score, 'scorenumber')->textInput() ?>
        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Вывести', ['class' => 'btn btn-success', 'name' => 'login-button']) ?>
            </div>
        </div>
         <?php ActiveForm::end();?>

    </div>
</div>