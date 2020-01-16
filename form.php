<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<?php
    if(Yii::$app->session->hasFlash('success')){
        echo Yii::$app->session->getFlash('success');
    }
?>
<?php $form=ActiveForm::begin(); ?>
<?=$form->field($model, 'fname'); ?>
<?=$form->field($model, 'lname'); ?>
<?= html::submitButton('Send',['class'=>'btn btn-success']); ?>
<?php $form=ActiveForm::end(); ?>