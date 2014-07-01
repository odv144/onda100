<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Rifa $model
 */

$this->title = 'Update Rifa: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Rifas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rifa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
