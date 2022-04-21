<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Komentari */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="komentari-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'komentar')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'odgovorna_osoba_komentar_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
