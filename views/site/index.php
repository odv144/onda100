
<?php
use yii\helpers\Url;
use app\models\Sorteo;
use app\models\Premios;
use  yii\grid\GridView ; 

use  yii\data\ActiveDataProvider ; 
/**
 * @var yii\web\View $this
 */
//Yii::setAlias('@web','../web');
$this->title = 'Sorteos Onda 100';
?>

<div class="site-index">
    <div class="row">
        <div class="col-xs-12 col-lg-12">
            <img class="img_responsive" src="<?= Url::to('@web'.'/img/loguito.jpg');?>" width="100%" >
        </div>
    </div> 
    <div class="row">
        <div class="col-xs-12 col-lg-3">
            <h3>Listado de Sorteos</h3>
            <!-- aca pongo el codigo para generar la lista de sorteo generales -->
            <ul class="nav nav-pills nav-stacked">
                      <li class="active">
                          <a href="#">Home</a>
                      </li>
                      <li>
                          <a href="#">Link</a>
                      </li>
            </ul>      
        </div>
        <div class="col-xs-12 col-lg-9">
            <p>presentacion de una tabla de ganadores del ultimo sorteo</p>
            <?php
            $model=$model::find()->all();
            // estoy armando la tabla de sorteo con el widget de bootstrap 3
            /*
            echo DetailView::widget([
            'model' => $model,
            'attributes' => [
                'title',             // title attribute (in plain text)
                'description:html',  // description attribute in HTML
                [                    // the owner name of the model
                    'label' => 'Owner',
                    'value' => $model->owner->name,
                ],
            ],
            ]);

*/
  
$dataProvider  =  new  ActiveDataProvider ([ 
    'query'  =>  Sorteo::find(), 
    'pagination'  =>  [ 
        'pageSize'  =>  20 , 
    ], 
]); 
echo  GridView :: widget ([ 
    'dataProvider'  =>  $dataProvider , 
    'columns'=>[
        'id',
        'iniSorteo',
        'finSorteo',
        [
            'class' => 'yii\grid\DataColumn', // can be omitted, default
            'header'=>'id Relacion',
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
       
    ],
]);

            /*
            foreach($model as $dato)
            {
                echo '<table><tr>';
                 echo '<td>'.$dato->id.'</td>';
                 echo '<td>'.$dato->iniSorteo.'</td>';
                 echo '<td>'.$dato->finSorteo.'</td>';
                echo  $dato->premios[0]->json; //esta es la forma de obtener datos de una relacion de sorteo->premios
                echo '</td></tr></table>';
               
                 
            }
            
            $sql='SELECT max(id)AS id FROM sorteo';     //clausula sql que permite obtener el maximo id
            $id= Sorteo::findBySql($sql)->all();        //realizo la consulta para obtener el registro correspondiente
            $id=$id[0]->id;                             //esto permite convertir el registro en una valor unico
            $pre=Sorteo::findOne(['id'=>$id]);
            echo '<pre>';
            print_r($pre->premios[0]->json);
            echo '</pre>';
            Yii::$app->end();
            // $sql='SELECT * FROM sorteo';
            $model = Sorteo::findBySql($sql)->all();
            foreach($model as $d)
                {
                    echo '<pre>';
                     print_r($d->getPremios());
                    echo '</pre>';   
                }
        */
            ?>
        </div>
    </div>
    
    <div class="body-content">
        <div class="row">
            <div class="col-xs-12 col-lg-12">
                <p>
                presentacion de informacion de paraque sirve la pagina y algunas explicaicones basicas.
                listado de ultimos comentarios realizados por los usuarios
                </p>
            </div>
        </div>
        
    </div>
</div>
