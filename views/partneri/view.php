<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Partneri */

$this->title = 'Detalji'.' '. $model['id_partneri'];
$this->params['breadcrumbs'][] = ['label' => 'Partneri', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="partneri-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_partneri' => $model->id_partneri], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_partneri' => $model->id_partneri], [
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
            'id_partneri',
            'Ime',
            'Tel',
            'Fax',
            'Mob',
            'Email:email',
            'Vrsta',
            'Napravio',
            'CreatedAt',
            'Web',
            'Adresa',
            'Adresa2',
            'Grad',
            'Drzava',
            'pos_br',
            'JIB',
            'PDV',
            'Datum_rodjenja',
            'Broj_LK',
            'Mjesto_izdavanja_lk',
        ],
    ]) ?>

</div>
