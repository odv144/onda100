<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\Sorteo $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="sorteo-form">

    <?php $form = ActiveForm::begin(); ?>

<div class='col-lg-4'>
    <?= $form->field($model, 'iniSorteo')->textInput() ?>

</div>
<div class='col-lg-4'>
    <?= $form->field($model, 'finSorteo')->textInput() ?>

</div>
<div class='col-lg-4'>
    <?= $form->field($model, 'realizado')->checkbox() ?>

</div>
<div class='col-lg-4'>
    <?= $form->field($model, 'canPremios')->textInput() ?>

</div>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
