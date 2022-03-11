<?php

use app\models\Projekti;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap4\Modal;
/* @var $this yii\web\View */
/* @var $searchModel app\ProjektiQuerry */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Projekti';
$this->params['breadcrumbs'][] = $this->title;

?>
<?= Html::activeHiddenInput($model, 'Naziv_Projekta') ?>
<?=
Html::button(

    'Napravi Novi Projekat',

    ['value' => $model->isNewRecord

        ?Url::to(['projekti/create'])  //Put here the url to the Create page

        :Url::to(['projekti/update','id'=>$model->id]), //and here to the update Page with the id attribute

        'id'=>'changeMyAttribute',

        'for'=>'#myModel1-myAttribute', //Put here the id of the field you want to update

        'class'=>'btn btn-success'

    ])

?>

<div class="projekti-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php Pjax::begin(['enablePushState' => false,'linkSelector' => 'pjax-btn']); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            ['attribute'=>'Naziv_Projekta',
                'enableSorting' => false
            ],
            ['attribute'=>'Podnaziv',
                'enableSorting' => false],
            ['attribute'=>'Boja',
                'enableSorting' => false],
            ['attribute'=>'Slicica',
                'enableSorting' => false],
            [
                'attribute'=>'Odgovorna_Osoba_id',
                'label' => 'Odgovorna Osoba',
                'enableSorting' => false,
                'value'=>function ($model, $key, $index, $column) {
                    return $model->odgovornaOsoba->Ime;
                },
            ],
            [
                'attribute'=>'Klasna_Oznaka_id',
                'label' =>'Klasna Oznaka',
                'enableSorting' => false,
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
    <?php

    Modal::begin(['id' => 'myModal']);



    echo "<div id='myModalContent'></div>";



    Modal::end();

    ?>

</div>
