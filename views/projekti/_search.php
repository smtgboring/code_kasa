<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\ProjektiQuerry */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="projekti-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Naziv_Projekta') ?>

    <?= $form->field($model, 'Podnaziv') ?>

    <?= $form->field($model, 'Boja') ?>

    <?= $form->field($model, 'Slicica') ?>

    <?php // echo $form->field($model, 'Odgovorna_Osoba_id') ?>

    <?php // echo $form->field($model, 'Klasna_Oznaka_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
