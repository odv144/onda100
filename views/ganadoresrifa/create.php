<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\ganadoresrifa $model
 */

$this->title = 'Create Ganadoresrifa';
$this->params['breadcrumbs'][] = ['label' => 'Ganadoresrifas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ganadoresrifa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
