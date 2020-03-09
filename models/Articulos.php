<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "articulos".
 *
 * @property int $id
 * @property string|null $titulo
 * @property string|null $texto_corto
 * @property string|null $texto_largo
 * @property string|null $foto
 */
class Articulos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'articulos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['titulo', 'texto_corto', 'texto_largo', 'foto'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo' => 'Titulo',
            'texto_corto' => 'Texto Corto',
            'texto_largo' => 'Texto Largo',
            'foto' => 'Foto',
        ];
    }
}
