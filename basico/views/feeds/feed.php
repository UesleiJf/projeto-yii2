<?php

use yii\grid\GridView;

$this->title = 'Feed de Notícias';
?>

<div class="site-index">
    <div class="body-content">
        <h3>Feed de Notícias via REST API (Inseridos no BD)</h3>

        <?= GridView::widget([
            'dataProvider' => $dataProvider
        ]);

        ?>

    </div>
</div>
