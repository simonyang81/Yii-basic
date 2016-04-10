<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = '提交表单';
$this->params['breadcrumbs'][] = $this->title;

?>

<?php $form = ActiveForm::begin([
    'id' => 'entry-form',
    'options' => ['class' => 'form-horizontal'],
    'fieldConfig' => [
        'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
        'labelOptions' => ['class' => 'col-lg-1 control-label'],
    ],
    'action' => 'index.php?r=site/entryfrom',
]); ?>

<?= $form->field($model, 'name') ?>
<?= $form->field($model, 'email') ?>

<div class="form-group">
    <div class="col-lg-offset-1 col-lg-11">
        <?= Html::submitButton('提交', ['class' => 'btn btn-primary']) ?>
    </div>
</div>


<?php ActiveForm::end(); ?>
