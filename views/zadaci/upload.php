<?php
use yii\widgets\ActiveForm;

$form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]);
?>

<?= $form->field($modelUpload, 'file[]')->fileInput(['multiple' => true]) ?>

    <button>Submit</button>

<?php ActiveForm::end(); ?>