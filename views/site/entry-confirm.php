<?php
use yii\helpers\Html;
?>
<p>You have entered the following information:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>

<?php

$username = Html::encode($model->name);
$email = Html::encode($model->email);

?>

<br>
<p>测试isset和empty:</p>
<ul>
    <?php
        echo '<li><label>isset($username):</label>'.isset($username).'</li>';
        echo '<li><label>isset($nothere):</label>'.isset($nothere).'</li>';
        echo '<li><label>empty($username):</label>'.empty($username).'</li>';
        echo '<li><label>empty($nothere):</label>'.empty($nothere).'</li>';
    ?>
</ul>