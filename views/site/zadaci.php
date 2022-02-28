<?php


/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Zadaci';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-zadaci">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="card border-success mb-3" style="max-width: 18rem;">
        <div class="card-header bg-transparent border-success">Ime</div>
        <div class="card-body text-success">
            <h5 class="card-title">Naziv Projekta</h5>
            <p class="card-text">Opis projekta</p>
        </div>
        <div class="card-footer bg-transparent border-success">ID</div>
    </div>

    <code><?= __FILE__ ?></code>
</div>
