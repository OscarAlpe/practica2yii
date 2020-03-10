<?php 
use yii\widgets\ListView;
?>

<?= ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_articulos',
    'layout' => '{items}',
]) ?>