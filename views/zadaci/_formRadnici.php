<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Radnici */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="radnici-form" id="radnici_js">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($modelRadnici, 'ime')->textInput(['maxlength' => true]) ?>

    <?= $form->field($modelRadnici, 'projekti_id')->textInput() ?>

    <?= $form->field($modelRadnici, 'zadaci_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success','id' => 'radnici_js_button']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<!-- <a href="  yii\helpers\Url::to('/web/radnici/create') "> Dodaj Radnika </a> -->
