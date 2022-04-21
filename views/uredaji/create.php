<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Uredaji */

$this->title = 'Create Uredaji';
$this->params['breadcrumbs'][] = ['label' => 'Uredajis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uredaji-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
