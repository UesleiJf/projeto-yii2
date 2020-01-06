<?php

$this->title = 'My Yii Application';
?>

<div class="site-index">
    <div class="body-content">
        <h1>Feed de Notícias via REST API</h1>

        <?php foreach($data as $row) : ?>
            <p>ID: <?= $row['id'] ?></p>
            <p>Título: <?= $row['title'] ?></p>
            <p>Status: <?= $row['status'] ?></p>
        <?php endforeach; ?>

    </div>
</div>
