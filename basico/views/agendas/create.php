<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Agendas */

$this->title = 'Create Agendas';
$this->params['breadcrumbs'][] = ['label' => 'Agendas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="agendas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
