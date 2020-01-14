<?php
use yii\grid\GridView;
use yii\helpers\StringHelper;

$this->title = 'Colors';
?>

<div class="site-index">
    <div class="body-content">
        <h1>Funções de Strings</h1>

        <?php
                var_dump(StringHelper::startsWith('Yii Academy', 'Yii'));
                echo "</br>";
                var_dump(StringHelper::endsWith('Yii Academy', 'Academy'));
                echo "</br>";
                var_dump(StringHelper::countWords('Yii Academy re'));
                echo "</br>";
                var_dump(StringHelper::truncate('Yii Academy re', 3));
        ?>

    </div>
</div>
