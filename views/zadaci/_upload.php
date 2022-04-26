<?php

use yii\widgets\ActiveForm;
use yii\widgets\Pjax;
use kartik\widgets\FileInput;

?>

<?php  Pjax::begin(['enablePushState' => false,'id' => 'zadaci-upload']); ?>

     <?php 
     
$form = ActiveForm::begin([
    'action' => ['zadaci/upload'],
    'options' => [
        'data-pjax' => true,
        'class' => 'zadaciupload',
        'enctype' => 'multipart/form-data'
    ]
]); 
?>
<?php $form->field($modelUpload, 'file[]')->widget(FileInput::classname(), [
    'options' => ['accept' => 'image/*'],
]); ?>

<button class="btn btn-success">Submit</button>

<?php ActiveForm::end(); ?>

<?php  Pjax::end(); ?>

