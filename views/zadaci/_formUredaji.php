<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $model app\models\Uredaji */
/* @var $form yii\widgets\ActiveForm */
?>
<?php Pjax::begin(['enablePushState' => false,'id' => 'zadaci-uredaji']); ?>
<div class="uredaji-form">

       <?php 
$form = ActiveForm::begin([
    'action' => ['zadaci/ajax-uredaji'],
    'options' => [
        'data-pjax' => true,
        'class' => 'zadaciUredaji'
    ]
]); 
?>

    <?= $form->field($modelUredaji, 'ime')->textInput(['maxlength' => true]) ?>

    <?= $form->field($modelUredaji, 'tip_uredaja')->textInput(['maxlength' => true]) ?>

    <?= $form->field($modelUredaji, 'serijski_broj')->textInput() ?>

    <?= $form->field($modelUredaji, 'garancija')->textInput() ?>

    <?= $form->field($modelUredaji, 'sifra_nasa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($modelUredaji, 'sifra_dobavljac')->textInput(['maxlength' => true]) ?>

    <?= $form->field($modelUredaji, 'Slika')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success','id' => 'uredaj_js_button']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php Pjax::end(); ?>
