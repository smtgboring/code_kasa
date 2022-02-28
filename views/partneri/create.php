<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Partneri */

$this->title = 'Create Partneri';
$this->params['breadcrumbs'][] = ['label' => 'Partneri', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="partneri-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
