<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Funcionario */
/* @var $form ActiveForm */
?>
<div class="funcionarios">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'nome') ?>
        <?= $form->field($model, 'cargo_id') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- funcionarios -->
