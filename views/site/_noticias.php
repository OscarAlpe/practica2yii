<?php
use app\widgets\Noticias;
?>

<?= Noticias::widget([
    'titulo' => $model->titulo,
    'texto' => $model->texto,
    'foto' => $model->foto,
]) ?>
