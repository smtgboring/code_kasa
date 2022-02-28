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

            'id_zadatak',
            'ime_zadatak',
            'opis_zadatak:ntext',
            'dodijeli_zadatak_id',
            'projekat_id',
            //'Firma',
            //'Kontakt',
            //'posrednik',
            //'datum',
            //'rok',
            //'datumDPO',
            //'status_id',
            //'prioritet_id',
            //'tura_id',
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
