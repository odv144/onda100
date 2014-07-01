<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Sorteo;
use app\models\Premios;
use  yii\data\ActiveDataProvider ;
use yii\helpers\Url; 
/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\models\SorteoSearch $searchModel
 */

$this->title = Yii::t('app', 'Sorteos');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sorteo-index">
<div class="row">
    <div class="col-lg-10">
     <h1><?= Html::encode($this->title) ?></h1>
    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Sorteo',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php
        $model=$model::find()->all();
                
        $dataProvider  =  new  ActiveDataProvider ([ 
            'query'  =>  Sorteo::find(), 
            'pagination'  =>  [ 
                'pageSize'  =>  20 , 
            ], 
        ]); 
        echo  GridView :: widget ([ 
            'dataProvider'  =>  $dataProvider , 
            //'filterModel'=> $searchModel,
            'columns'=>[
                [
                    'class' => 'yii\grid\SerialColumn', // can be omitted, default
                    'header'=>'Sorteo',
                ],
                [
                    //'class' => 'yii\grid\SerialColumn', // can be omitted, default
                    'label'=>'Inicio',
                    'value' => 'iniSorteo',
                ],
               
                'finSorteo',
                //acciones son los botones para actualizar, borrar, y editar y ver
                /*[
                   'class' => 'yii\grid\ActionColumn', // can be omitted, default
                    'header'=>'Acciones',
                   
                ],
                */

                [
                    'class' => 'yii\grid\DataColumn', // 2 forma para crear el link
                    'header'=>'Sortear',
                    'format'=> 'raw',
                    'value'=> function($data){
                        return Html::a("Premiar",Url::to(['/sortear/view/','id'=>1]));
                        },
                ],
                [
                    'class' => 'yii\grid\DataColumn', // primera forma para crear un link en el grid
                    'header'=>'Ganadores',
                    'format'=>'raw',
                    'value'=>function ($data) {
                        return Html::a(Html::encode("Ver"),Url::to(['ganadores/view','id'=>$data->id]));
                    },
                    
                ],
                [
                    'class' => 'yii\grid\DataColumn', // primera forma para crear un link en el grid
                    'header'=>'Participantes',
                    'format'=>'raw',
                    'value'=>function ($data) {
                        return Html::a(Html::encode("View"),'site/index');
                    },
                    
                ],
                                               
                
                /*
                [
                    'class' => 'yii\grid\DataColumn', // can be omitted, default
                    'header'=>'Ganadores',
                    'value' => function ($data) {
                        return $data->premios[0]->id; // de esta forma obtengo datos de la relacion entre sorteo y premios
                    },  
                ],
                [   

                    'class' => 'yii\grid\DataColumn', // can be omitted, default
                    'header'=>'relacion',
                    'value' => function ($data) {
                        return $data->premios[0]->json; // de esta forma obtengo datos de la relacion entre sorteo y premios que es hasMany
                    },
                ],
                [   

                    'class' => 'yii\grid\DataColumn', // can be omitted, default
                    'header'=>'Ganadores',
                    'value' => function ($data) {
                        return $data->ganadores->json; // de esta forma obtengo datos de la relacion entre sorteo y ganadores que es tipo oneMany
                    },
                ],
               
            */
           
               
            ],

        ]);
    ?>        
    </div>
    <div class="col-lg-2">
        <p>publicidades que luego pondremos</p>
        
    </div>
</div>