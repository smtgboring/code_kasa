<?php

use app\models\Partneri;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Partneri';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="partneri-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
          <?=  Html::a('Create Partneri', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


             ['attribute'=>'Ime',
                 'enableSorting' => false
             ],
            ['attribute'=>'Tel',
                'enableSorting' => false
            ],
            ['attribute'=>'Fax',
                'enableSorting' => false
            ],
            ['attribute'=>'Mob',
                'enableSorting' => false
            ],

            ['attribute'=>'Email',
                'enableSorting' => false
            ],
            /*          ['attribute'=>'Vrsta',
                          'enableSorting' => false
                      ],
                      ['attribute'=>'Napravio',
                          'enableSorting' => false
                      ],
                      ['attribute'=>'CreatedAt',
                          'enableSorting' => false
                      ],
                      ['attribute'=>'Web',
                          'enableSorting' => false
                      ],
                      ['attribute'=>'Adresa',
                          'enableSorting' => false
                      ],
                      ['attribute'=>'Adresa2',
                          'enableSorting' => false
                      ],
                      ['attribute'=>'Grad',
                          'enableSorting' => false
                      ],
                      ['attribute'=>'Drzava',
                          'enableSorting' => false
                      ],
                      ['attribute'=>'pos_br',
                          'enableSorting' => false
                      ],
                      ['attribute'=>'JIB',
                          'enableSorting' => false
                      ],
                      ['attribute'=>'PDV',
                          'enableSorting' => false
                      ],
                      ['attribute'=>'Datum_rodjenja',
                          'enableSorting' => false
                      ],
                      ['attribute'=>'Broj_LK',
                          'enableSorting' => false
                      ],
                      ['attribute'=>'Mjesto_izdavanja_lk',
                          'enableSorting' => false
                      ],
                      */
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Partneri $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_partneri' => $model->id_partneri]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
