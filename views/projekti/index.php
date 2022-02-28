<?php

use app\models\Projekti;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\ProjektiQuerry */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Projekti';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="projekti-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Projekti', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'Naziv_Projekta',
            'Podnaziv',
            'Boja',
            'Slicica',
            [
                'attribute'=>'Odgovorna_Osoba_id',
                'label' => 'Odgovorna Osoba',
                'value'=>function ($model, $key, $index, $column) {
                    return $model->odgovornaOsoba->Ime;
                },
            ],
            [
                'attribute'=>'Klasna_Oznaka_id',
                'label' =>'Klasna Oznaka',
                'value'=>function ($model, $key, $index, $column) {

                    return strtoupper($model['klasnaOznaka']->Klasna_Oznaka);
                },
            ],

            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Projekti $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],

        ],
    ]);
     ?>

    <?php Pjax::end(); ?>
    <?php // $this->registerJs('jQuery("#w0").on("keyup", "input", function(){

		// jQuery(this).change();

		// $.pjax.reload({container:\'#w0\'});

	// });',

	// yii\web\View::POS_READY); ?>

</div>