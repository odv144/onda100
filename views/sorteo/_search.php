<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\SorteoSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="sorteo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'iniSorteo') ?>

    <?= $form->field($model, 'finSorteo') ?>

    <?= $form->field($model, 'realizado')->checkbox() ?>

    <?= $form->field($model, 'canPremios') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
