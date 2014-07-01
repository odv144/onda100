<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 */

$this->title = 'Ganadoresrifas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ganadoresrifa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    

    <p>
        <?= Html::a('Create Ganadoresrifa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_rifa',
            'orden',
            'nroGan',
            'premio',
            // 'nomGan',
            // 'donante',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
