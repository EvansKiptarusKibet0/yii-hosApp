<?php


use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form=>ActiveForm::begin(); ?>
//creating the input fields using the var form

<?= $form->field($model,'name')?>
<?= $form->field($model,'name')?>

//creating the button from html

<?= Html::submitButton('submit',['class'=>'btn_submit'])?>

