<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Projekti */

$this->title = 'Napravi Novi Projekat';
$this->params['breadcrumbs'][] = ['label' => 'Projekti', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="projekti-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?=
    $this->render('_form', [
        'model' => $model,
        'klasnaOznakaArray' => $klasnaOznakaArray,
        'odgovornaOsoba' => $odgovornaOsoba,
    ]) ?>

</div>