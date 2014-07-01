<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\Ganadores $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="ganadores-form">

    <?php $form = ActiveForm::begin(); ?>

<div class='col-lg-4'>
    <?= $form->field($model, 'id')->textInput() ?>

</div>
<div class='col-lg-4'>
    <?= $form->field($model, 'json')->textarea(['rows' => 6]) ?>

</div>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
