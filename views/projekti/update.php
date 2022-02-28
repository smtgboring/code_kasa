<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Projekti */


$this->title = 'Update Projekti: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Projekti', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="projekti-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'klasnaOznakaArray' => $klasnaOznakaArray,
        'odgovornaOsoba' => $odgovornaOsoba,
    ]) ?>

</div>
