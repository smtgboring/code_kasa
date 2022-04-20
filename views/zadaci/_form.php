<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\zadaci */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="zadaci-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ime_zadatak')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'opis_zadatak')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'dodijeli_zadatak_id')->dropDownList([$odgovornaOsobaarray]); ?>

    <?= $form->field($model, 'projekat_id')->dropDownList([$projektarray]); ?>

    <?= $form->field($model, 'Firma')->dropDownList([$partnerarray]); ?>

    <?= $form->field($model, 'Kontakt')->dropDownList([$partnerarray]); ?>

    <?= $form->field($model, 'posrednik')->dropDownList([$partnerarray]); ?>

    <?= $form->field($model,'datum')->widget(DatePicker::classname(), [
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
            'todayHighlight' => true
        ]
    ]);

    ?>

    <?= $form->field($model,'rok')->widget(DatePicker::classname(), [
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
            'todayHighlight' => true
        ]
    ]);

    ?>

    <?= $form->field($model,'datumDPO')->widget(DatePicker::classname(), [
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
            'todayHighlight' => true
        ]
    ]);

    ?>


    <?= $form->field($model, 'status_id')->dropDownList([$statusarray]); ?>

    <?= $form->field($model, 'prioritet_id')->dropDownList([$prioritetarray]); ?>

    <?= $form->field($model, 'tura_id')->dropDownList([$turaarray]); ?>
    
    <?= $form->field($model, 'zadaci_uraditi_id')->dropDownList([$zadaciuraditiarray]); ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success','id' => 'radnici_js_button']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
