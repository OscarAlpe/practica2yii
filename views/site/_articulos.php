<?php
use app\widgets\Articulos;
?>

<?= Articulos::widget([
      'id' => $model->id,
      'foto' => $model->foto,
      'titulo' => $model->titulo,
      'texto_corto' => $model->texto_corto,
    ]) ?>
