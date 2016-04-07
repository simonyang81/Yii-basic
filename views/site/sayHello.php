<?php
use yii\helpers\Html;

$this->title = 'Say Hello';
$this->params['breadcrumbs'][] = $this->title;
?>

<?= Html::encode($msg); ?>

