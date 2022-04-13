<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ZadaciUraditi */

$this->title = 'Update Zadaci Uraditi: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Zadaci Uraditis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="zadaci-uraditi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
