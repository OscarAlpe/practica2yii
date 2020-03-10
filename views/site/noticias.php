<?php 
use yii\widgets\ListView;
?>

<?= ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_noticias',
    'layout' => '{items}',
]) ?>