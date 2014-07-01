<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Rifa $model
 */

$this->title = 'Create Rifa';
$this->params['breadcrumbs'][] = ['label' => 'Rifas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rifa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
