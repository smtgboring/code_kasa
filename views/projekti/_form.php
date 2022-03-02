
<?php
use kartik\icons\FontAwesomeAsset;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $model app\models\Projekti */
/* @var $form yii\widgets\ActiveForm */

?>
<?php
$form = ActiveForm::begin([
    'id' => $model->formName()
]);
?>
<div class="projekti-form">

    <?php $form = yii\widgets\ActiveForm::begin(); ?>
    <?= $form->field($model, 'id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Naziv_Projekta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Podnaziv')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Boja')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Slicica')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Odgovorna_Osoba_id')->dropDownList([$odgovornaOsoba]); ?>

    <?=
    $form->field($model, 'Klasna_Oznaka_id')->dropDownList([$klasnaOznakaArray]); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    <?php

    //beforeSubmit

    $js = "

        $('form#".$model->formName()."').on('beforeSubmit', function(e){

            var \$form = $(this);

            submitMySecondForm(\$form);

        }).on('submit', function(e){
            console.log('complete');
            e.preventDefault();

        });";

    $this->registerJs($js);

    ?>

