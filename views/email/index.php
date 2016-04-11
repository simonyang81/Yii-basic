<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = '邮件表单';
$this->params['breadcrumbs'][] = $this->title;

?>

<?php $form = ActiveForm::begin([
    'id' => 'email-form',
    'options' => ['class' => 'form-horizontal'],
    'fieldConfig' => [
        'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
        'labelOptions' => ['class' => 'col-lg-1 control-label'],
    ],
    'action' => 'index.php?r=email/send',
]); ?>

<?= $form->field($model, 'name') ?>
<?= $form->field($model, 'email') ?>
<?= $form->field($model, 'feedback')->textarea(['rows' => '10']) ?>


<div class="form-group">
    <div class="col-lg-offset-1 col-lg-11">
        <?= Html::submitButton('Send feedback', ['class' => 'btn btn-primary']) ?>
    </div>
</div>


<?php ActiveForm::end(); ?>
