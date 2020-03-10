<?php
use yii\grid\GridView;
use yii\helpers\Html;
?>

<?= GridView::widget([
    'dataProvider' => $dataProviderNoticias,
    'columns' => [
        'id',
        'titulo',
        'texto',
        [
            'label' => 'Foto',
            'format' => 'raw',
            'value' => function($data) {
                return Html::img("@web/imgs/" . $data->foto, ['alt' => $data->foto, 'width' => '100px']);
            }
        ]
    ]
]) ?>

<?= GridView::widget([
    'dataProvider' => $dataProviderArticulos,
    'columns' => [
        'titulo',
        'texto_corto',
    ]
]) ?>