<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Estados */
/* @var $form ActiveForm */
?>
<div class="estados">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'Nome') ?>
        <?= $form->field($model, 'sigla') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- estados -->
