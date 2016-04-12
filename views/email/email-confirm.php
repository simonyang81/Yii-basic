<?php
use yii\helpers\Html;
?>
<p>You have entered the following information:</p>

<?php
    $subject = Html::encode($model->subject);
    $feedback = $model->feedback; //Html::encode($model->feedback);
?>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
    <li><label>Subject</label>:
        <!-- strtoupper: 将字符串转换成大写 -->
        <?= strtoupper($subject) ?>
        &nbsp;&nbsp;
        <!-- strtolower: 将字符串转换成大写 -->
        <?= strtolower($subject) ?>
        &nbsp;&nbsp;
        <!-- ucfirst: 如果字符串第一个字符是字母, 就将该字符转换为大写 -->
        <?= ucfirst($subject) ?>
        &nbsp;&nbsp;
        <!-- ucwords: 将字符串每个单词的第一个字母换成为大写 -->
        <?= ucwords($subject) ?>
    </li>
    <li><label>Feedback</label>: <?= $feedback ?></li>
    <!-- addslashes: 会将字符串转义(特殊字符加反斜杠), 目的是为了存储MySQL方便 -->
    <!-- stripslashes: 会将转义字符的反斜杠去掉 -->
    <li><label>addslashes(Feedback)</label>: <?= $adds_feedback = addslashes($feedback) ?></li>
    <li><label>Html::encode(Feedback)</label>: <?= Html::encode($feedback) ?></li>
    <li><label>stripslashes(addslashes(Feedback))</label>: <?= stripslashes($adds_feedback) ?></li>
</ul>
