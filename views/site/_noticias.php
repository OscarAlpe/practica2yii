<?php
use yii\helpers\Html;
?>

<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
  <div class="thumbnail">
    <?= Html::img("@web/imgs/" . $model->foto) ?>
    <div class="caption">
      <h3><?= $model->titulo ?></h3>
      <p><?= $model->texto ?></p>
    </div>
  </div>
</div>
