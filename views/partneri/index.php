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

            'id_partneri',
            'Ime',
            'Tel',
            'Fax',
            'Mob',
            //'Email:email',
            //'Vrsta',
            //'Napravio',
            //'CreatedAt',
            //'Web',
            //'Adresa',
            //'Adresa2',
            //'Grad',
            //'Drzava',
            //'pos_br',
            //'JIB',
            //'PDV',
            //'Datum_rodjenja',
            //'Broj_LK',
            //'Mjesto_izdavanja_lk',
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
