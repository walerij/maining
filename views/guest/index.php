<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


$this->title = 'Подписка';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="panel panel-success" id="mainhead-border">
    <div class="panel-heading" id="mainhead">
        <i class="glyphicon glyphicon-bitcoin"></i>
        &nbsp;&nbsp;
        Подпишись на наши hash-ки
    </div>
    <div class="panel-body">

       <?php $form = ActiveForm::begin(); ?>
           



           <?= $form->field( $model,'subject') ?>
        <?php       ActiveForm::end(); ?>
    </div>
</div>