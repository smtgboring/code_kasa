<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Komentari */

$this->title = 'Create Komentari';
$this->params['breadcrumbs'][] = ['label' => 'Komentaris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="komentari-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
