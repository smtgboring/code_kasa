<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\zadaci */

$this->title = 'Napravi Zadatak';
$this->params['breadcrumbs'][] = ['label' => 'Zadaci', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zadaci-create">

   <!-- <h1><?= Html::encode($this->title)  ?></h1> -->

</div>

<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Napravi Zadatak</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Uraditi</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Radnici</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Uređaji</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Radovi</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Robe i Usluge</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Komentari</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Fileovi</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Historija</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Print</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
    
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"> <!-- tab 1 begin -->

    <?= $this->render('_form', [
        'model' => $model,
        'turaarray' => $turaarray,
        'prioritetarray' => $prioritetarray,
        'statusarray' => $statusarray,
        'partnerarray' => $partnerarray,
        'projektarray' => $projektarray,
        'odgovornaOsobaarray' => $odgovornaOsobaarray,
        'zadaciuraditiarray' => $zadaciuraditiarray,
    ]) ?>
  
    </div> <!-- tab 1 end -->
    
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"> <!-- tab 2 begin -->
      <?= $this->render('_formUraditi', [
        'model2' => $model2,
    ]) ?>
  </div> <!-- tab 1 end -->
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">3</div>
</div>
