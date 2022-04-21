<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Radovi */

$this->title = 'Update Radovi: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Radovis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="radovi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
