<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\ganadoresrifa $model
 */

$this->title = 'Update Ganadoresrifa: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ganadoresrifas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ganadoresrifa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
