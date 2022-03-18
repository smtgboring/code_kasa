<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\zadaci */

$this->title = 'Create Zadaci';
$this->params['breadcrumbs'][] = ['label' => 'Zadaci', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zadaci-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'turaarray' => $turaarray,
        'prioritetarray' => $prioritetarray,
        'statusarray' => $statusarray,
        'partnerarray' => $partnerarray,
        'projektarray' => $projektarray,
        'odgovornaOsobaarray' => $odgovornaOsobaarray,
    ]) ?>

</div>
