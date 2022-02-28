<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Partneri */

$this->title = 'Update Partneri: ' . $model->id_partneri;
$this->params['breadcrumbs'][] = ['label' => 'Partneris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_partneri, 'url' => ['view', 'id_partneri' => $model->id_partneri]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="partneri-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
