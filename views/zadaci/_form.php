<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\zadaci */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="zadaci-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ime_zadatak')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'opis_zadatak')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'dodijeli_zadatak_id')->textInput() ?>

    <?= $form->field($model, 'projekat_id')->textInput() ?>

    <?= $form->field($model, 'Firma')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Kontakt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'posrednik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'datum')->textInput() ?>

    <?= $form->field($model, 'rok')->textInput() ?>

    <?= $form->field($model, 'datumDPO')->textInput() ?>

    <?= $form->field($model, 'status_id')->textInput() ?>

    <?= $form->field($model, 'prioritet_id')->dropDownList([$prioritetarray]); ?>

    <?= $form->field($model, 'tura_id')->dropDownList([$turaarray]); ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
