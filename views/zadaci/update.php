<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\zadaci */

// $this->title = 'Uredi Zadatke: ' . $model->id_zadatak;
// $this->params['breadcrumbs'][] = ['label' => 'Zadaci', 'url' => ['index']];
// $this->params['breadcrumbs'][] = ['label' => $model->id_zadatak, 'url' => ['view', 'id_zadatak' => $model->id_zadatak]];
// $this->params['breadcrumbs'][] = 'Update';
?>
<div class="zadaci-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
