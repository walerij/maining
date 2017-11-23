<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\DatePicker;

$this->title = 'Score';
?>


<div class="panel panel-success">
    <div class="panel-heading">
        Счет
    </div>
    <div class="panel-body">

     <?php foreach ($userRecord as $user) ?>
        <p>Ник: <strong><?=$user->nickname; ?></strong></p>
        <p>Электропочта: <strong><?=$user->email; ?></strong></p>
        <table class="table table-bordered table-hover">
        <?php
       foreach($user->userScore as $score)
        {?>
            <tr>
                <td><?=$score->score?></td>
                <td><?=$score->scoreorg?></td>
                <td><?=$score->scorenumber?></td>
            </tr>

        <?}
      ?>
        </table>

    </div>
</div>


