<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\Usuarios $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="usuarios-form">

    <?php $form = ActiveForm::begin(); ?>

   <div class="col-lg-4">
       <?= $form->field($model, 'nick')->textInput(['maxlength' => 10]) ?>
    </div>
 
   <div class="col-lg-4">
       <?= $form->field($model, 'password_2')->passwordInput(['rows' => 6]) ?>
   </div>
 
   <div class="col-lg-4">
        <?= $form->field($model, 'dni')->textInput(['maxlength' => 8]) ?>       
   </div>
 
   <div class="col-lg-4">
        <?= $form->field($model, 'nombre')->textInput(['maxlength' => 50]) ?>
   </div>

   <div class="col-lg-4">
        <?= $form->field($model, 'apellido')->textInput(['maxlength' => 50]) ?>
   </div>

   <div class="col-lg-4">
    <?= $form->field($model, 'direccion')->textInput(['maxlength' => 100]) ?>
   </div>
   
   <div class="col-lg-4">
    <?= $form->field($model, 'telefono')->textInput(['maxlength' => 15]) ?>
   </div>
   
   <div class="col-lg-4">
    <?= $form->field($model, 'email')->textInput(['maxlength' => 80]) ?>
   </div>
   
   <div class="col-lg-4">
    <?= $form->field($model, 'tip')->textInput() ?>
   </div>
   
  <!--  <div class="col-lg-4">
     <?= $form->field($model, 'session')->textarea(['rows' => 6]) ?>
   </div> -->
    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Nuevo Usuario' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
