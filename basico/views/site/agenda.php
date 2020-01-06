<?php
    $this->title = 'My Yii Application';
?>

<div class="site-index">
    <div class="body-content">
        <h1>Agenda via REST API</h1>

        <?php foreach($data as $row) : ?>
            <p>ID: <?= $row['id'] ?></p>
            <p>Local: <?= $row['local'] ?></p>
            <p>Valor: <?= $row['valor'] ?></p>
        <?php endforeach; ?>

    </div>
</div>
