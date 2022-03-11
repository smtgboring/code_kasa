<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\zadaciQuery */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Zadaci';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zadaci-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Zadaci', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            ['attribute'=>'ime_zadatak',
                'enableSorting' => false
            ],
            ['attribute'=>'opis_zadatak',
                'enableSorting' => false
            ],
            ['attribute'=>'dodijeli_zadatak_id',
                'enableSorting' => false
            ],
            ['attribute'=>'projekat_id',
                'enableSorting' => false
            ],
            /* ['attribute'=>'Firma',
                'enableSorting' => false
            ],
             ['attribute'=>'Kontakt',
                            'enableSorting' => false
                        ],
             ['attribute'=>'posrednik',
                            'enableSorting' => false
                        ],
             ['attribute'=>'datum',
                            'enableSorting' => false
                        ],
             ['attribute'=>'rok',
                            'enableSorting' => false
                        ],
             ['attribute'=>'datumDPO',
                            'enableSorting' => false
                        ],
             ['attribute'=>'status_id',
                            'enableSorting' => false
                        ],
             ['attribute'=>'prioritet_id',
                            'enableSorting' => false
                        ],
             ['attribute'=>'tura_id',
                            'enableSorting' => false
                        ],
            */

            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, \app\models\Zadaci $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_zadatak' => $model->id_zadatak]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
