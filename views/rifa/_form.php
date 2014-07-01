<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\Rifa $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="rifa-form">

    <?php $form = ActiveForm::begin(); ?>

<div class='col-lg-4'>
	<?= $form->field($model, 'institucion')->textInput(['maxlength' => 255]) ?>
</div>

<div class='col-lg-4'>
	<?= $form->field($model, 'fecha_sorteo')->textInput() ?>
</div>    

<div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
