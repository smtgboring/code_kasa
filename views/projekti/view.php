<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Projekti */


$this->title = 'Detalji'.' '. $model['Naziv_Projekta'];
$this->params['breadcrumbs'][] = ['label' => 'Projekti', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="projekti-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Da li ste sigurni da želite obrisati'.' '. $model['Naziv_Projekta'] ,
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'Naziv_Projekta',
            'Podnaziv',
            'Boja',
            'Slicica',
            ['label' => 'Odgovorna Osoba',
            'value' => $odgovornaOsoba],

            ['label' => 'Klasna Oznaka',
                'value' => strtoupper($klasnaOznaka)],

        ],
    ]) ?>

</div>
