<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\zadaci */


$this->title = $model->ime_zadatak;
// $this->params['breadcrumbs'][] = ['label' => 'Zadaci', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="zadaci-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_zadatak' => $model->id_zadatak], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_zadatak' => $model->id_zadatak], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_zadatak',
            'ime_zadatak',
            'opis_zadatak:ntext',
            'dodijeli_zadatak_id',
            'projekat_id',
            'Firma',
            'Kontakt',
            'posrednik',
            'datum',
            'rok',
            'datumDPO',
            'status_id',
            'prioritet_id',
            'tura_id',
            'zadaci_uraditi_id',
        ],
    ]) ?>

</div>
