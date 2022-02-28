<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\zadaciQuery */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="zadaci-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_zadatak') ?>

    <?= $form->field($model, 'ime_zadatak') ?>

    <?= $form->field($model, 'opis_zadatak') ?>

    <?= $form->field($model, 'dodijeli_zadatak_id') ?>

    <?= $form->field($model, 'projekat_id') ?>

    <?php // echo $form->field($model, 'Firma') ?>

    <?php // echo $form->field($model, 'Kontakt') ?>

    <?php // echo $form->field($model, 'posrednik') ?>

    <?php // echo $form->field($model, 'datum') ?>

    <?php // echo $form->field($model, 'rok') ?>

    <?php // echo $form->field($model, 'datumDPO') ?>

    <?php // echo $form->field($model, 'status_id') ?>

    <?php // echo $form->field($model, 'prioritet_id') ?>

    <?php // echo $form->field($model, 'tura_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
