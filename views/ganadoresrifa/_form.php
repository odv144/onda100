<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\ganadoresrifa $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="ganadoresrifa-form">

    <?php $form = ActiveForm::begin(); ?>

<div class='col-lg-4'>
    <?= $form->field($model, 'id_rifa')->textInput() ?>

</div>
<div class='col-lg-4'>
    <?= $form->field($model, 'orden')->textInput() ?>

</div>
<div class='col-lg-4'>
    <?= $form->field($model, 'nroGan')->textInput() ?>

</div>
<div class='col-lg-4'>
    <?= $form->field($model, 'premio')->textInput(['maxlength' => 255]) ?>

</div>
<div class='col-lg-4'>
    <?= $form->field($model, 'nomGan')->textInput(['maxlength' => 255]) ?>

</div>
<div class='col-lg-4'>
    <?= $form->field($model, 'donante')->textInput(['maxlength' => 255]) ?>

</div>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
