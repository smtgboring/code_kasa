<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\zadaci */

$this->title = 'Napravi Zadatak';
// $this->params['breadcrumbs'][] = ['label' => 'Zadaci', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="zadaci-create">

   <!-- <h1><?= Html::encode($this->title)  ?></h1> -->

</div>

<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Napravi Zadatak</a>
    <a class="nav-item nav-link" id="nav-uraditi-tab" data-toggle="tab" href="#nav-uraditi" role="tab" aria-controls="nav-uraditi" aria-selected="false">Uraditi</a>
    <a class="nav-item nav-link" id="nav-uredaji-tab" data-toggle="tab" href="#nav-uredaji" role="tab" aria-controls="nav-uredaji" aria-selected="false">Uređaji</a>
    <a class="nav-item nav-link" id="nav-radovi-tab" data-toggle="tab" href="#nav-radovi" role="tab" aria-controls="nav-radovi" aria-selected="false">Radovi</a>
    <a class="nav-item nav-link" id="nav-komentari-tab" data-toggle="tab" href="#nav-komentari" role="tab" aria-controls="nav-komentari" aria-selected="false">Komentari</a>
    <a class="nav-item nav-link" id="nav-fileovi-tab" data-toggle="tab" href="#nav-fileovi" role="tab" aria-controls="nav-fileovi" aria-selected="false">Fileovi</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
    <!-- tab 1(Napravi Zadatak) begin -->
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"> 
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
     </div> 
    <!-- tab 1 end -->
    
  <div class="tab-pane fade" id="nav-uraditi" role="tabpanel" aria-labelledby="nav-uraditi-tab"> 
    
      <!-- tab 2(Uraditi) begin -->
      <?= $this->render('_formUraditi', [
        'model2' => $model2,
    ]) ?>
   </div> 
      <!-- tab 2 end -->
            <!-- tab 4(Uredaji) begin -->
  <div class="tab-pane fade" id="nav-uredaji" role="tabpanel" aria-labelledby="nav-uredaji-tab">
  <?= $this->render('_formUredaji', [
        'modelUredaji' => $modelUredaji,
    ]) ?>
  </div>
      <!-- tab 4 end -->
                  <!-- tab 5(Radovi) begin -->
  <div class="tab-pane fade" id="nav-radovi" role="tabpanel" aria-labelledby="nav-radovi-tab">
  <?= $this->render('_formRadovi', [
        'modelRadovi' => $modelRadovi,
    ]) ?>
  </div>
      <!-- tab 5 end -->
      
                        <!-- tab 8(Fileovi) begin -->
  <div class="tab-pane fade" id="nav-fileovi" role="tabpanel" aria-labelledby="nav-fileovi-tab">
  <?= $this->render('uploaddoc', [
        'modeldoc' => $modeldoc,
    ]) ?>
  </div>
      <!-- tab 8 end -->
                  
                  <!-- tab 7(Komentari) begin -->
  <div class="tab-pane fade" id="nav-komentari" role="tabpanel" aria-labelledby="nav-komentari-tab">
  <?= $this->render('_formKomentari', [
        'modelKomentari' => $modelKomentari,
    ]) ?>
  </div>
      <!-- tab 7 end -->

  
</div>
