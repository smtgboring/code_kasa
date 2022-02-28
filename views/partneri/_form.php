<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Partneri */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="partneri-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_partneri')->textInput() ?>

    <?= $form->field($model, 'Ime')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tel')->textInput() ?>

    <?= $form->field($model, 'Fax')->textInput() ?>

    <?= $form->field($model, 'Mob')->textInput() ?>

    <?= $form->field($model, 'Email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Vrsta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Napravio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CreatedAt')->textInput() ?>

    <?= $form->field($model, 'Web')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Adresa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Adresa2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Grad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Drzava')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pos_br')->textInput() ?>

    <?= $form->field($model, 'JIB')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PDV')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Datum_rodjenja')->textInput() ?>

    <?= $form->field($model, 'Broj_LK')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Mjesto_izdavanja_lk')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
