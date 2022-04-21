<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Uredajis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uredaji-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Uredaji', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'ime',
            'tip_uredaja',
            'serijski_broj',
            'garancija',
            //'sifra_nasa',
            //'sifra_dobavljac',
            //'Slika',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Uredaji $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
