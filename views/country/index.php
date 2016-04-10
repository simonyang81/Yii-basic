<?php
use yii\helpers\Html;
?>
    <h1>Countries</h1>
    <ul>
        <?php foreach ($countries as $country): ?>
            <li>
                <?= Html::encode("{$country->name} ({$country->code})") ?>
            </li>
        <?php endforeach; ?>
    </ul>
