<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $model app\models\Komentari */
/* @var $form yii\widgets\ActiveForm */
?>
<?php Pjax::begin(['enablePushState' => false,'id' => 'zadaci-uredaji']); ?>
<div class="uredaji-form">

<div class="komentari-form">

     <?php 
$form = ActiveForm::begin([
    'action' => ['zadaci/ajax-komentari'],
    'options' => [
        'data-pjax' => true,
        'class' => 'zadacikomentari'
    ]
]); 
?>
    <?= $form->field($modelKomentari, 'komentar')->textarea(['rows' => 6]) ?>

    <?= $form->field($modelKomentari, 'odgovorna_osoba_komentar_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
    <?php Pjax::end(); ?>
