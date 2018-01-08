<?php 
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$form = ActiveForm::begin();
echo $form->field($model,'nama');
echo $form->field($model,'ttl');
echo $form->field($model,'alamat')->textarea();
// echo $form->field($model,'status');
echo $form->field($model, 'status')->dropDownList(['kontrak' => 'Kontrak', 'magang' => 'Magang']);
echo Html::submitButton('simpan',['class'=>'btn btn-primary'
]);
ActiveForm::end();
?>