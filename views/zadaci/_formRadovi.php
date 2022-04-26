<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Radovi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="radovi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($modelRadovi, 'vrsta_rada_id')->textInput() ?>

    <?= $form->field($modelRadovi, 'pocetak_rada')->textInput() ?>

    <?= $form->field($modelRadovi, 'kraj_rada')->textInput() ?>

    <?= $form->field($modelRadovi, 'sati')->textInput() ?>

    <?= $form->field($modelRadovi, 'naplativo_sati')->textInput() ?>

    <?= $form->field($modelRadovi, 'iznos_km')->textInput() ?>

    <?= $form->field($modelRadovi, 'Opis')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
