<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Radnici */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="radnici-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ime')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'projekti_id')->textInput() ?>

    <?= $form->field($model, 'zadaci_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
