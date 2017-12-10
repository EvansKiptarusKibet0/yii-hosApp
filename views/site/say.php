<?php
use yii\helpers/Model;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form=ActiveForm::begin();?>

<?= $form->field($model,'name')?>
<?= $form->field($model,'email')?>

<div class="form-group">
<?= Html::submitButton('Submit',['class'=>'pry-button'])?>
</div>

<?php ActiveForm::end();?>