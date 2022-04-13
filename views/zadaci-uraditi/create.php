<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ZadaciUraditi */

$this->title = 'Create Zadaci Uraditi';
$this->params['breadcrumbs'][] = ['label' => 'Zadaci Uraditis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zadaci-uraditi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
