<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $model app\models\ZadaciUraditi */
/* @var $form yii\widgets\ActiveForm */
?>
<?php Pjax::begin(['enablePushState' => false,'id' => 'zadaci-uraditi']); ?>
<div class="zadaci-uraditi-form">

    <?php 
$form = ActiveForm::begin([
    'action' => ['zadaci/ajax-uraditi'],
    'options' => [
        'data-pjax' => true,
        'class' => 'zadaciUraditi'
    ]
]); 
?>

    <?= $form->field($model2, 'ime')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model2, 'status')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success','id' => 'radnici_js_button']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php Pjax::end(); ?>

