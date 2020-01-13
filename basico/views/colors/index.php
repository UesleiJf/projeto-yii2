<?php
use yii\grid\GridView;

$this->title = 'Colors';
?>

<div class="site-index">
    <div class="body-content">
        <h1>Cores!!!</h1>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                [
                    'attribute' => 'id',
                    'headerOptions' => [
                        'style' => 'text-align: right; width: 70px;'
                    ],
                    'contentOptions' => [
                        'style' => 'text-align: right;'
                    ]
                ],
                'created_at',
                [
                    'attribute' => 'name',
                    'content' => function(\app\models\Sizes $model, $key, $index, $column){
                        return $model->name . "({$model->abbreviation})";
                    }
                ]
            ]
        ]); ?>

    </div>
</div>
