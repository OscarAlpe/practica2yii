<?php

namespace app\widgets;

use yii\helpers\Html;

/**
 * Description of Noticias
 *
 * @author Oscar
 */
class Noticias extends \yii\bootstrap\Widget {
    public $foto;
    public $titulo;
    public $texto;
    
    public function init() {
        parent::init();
        
    }
    
    public function run() {
        $salida = '';

        $salida .= '<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">';
        $salida .= '<div class="thumbnail">';
        $salida .= Html::img("@web/imgs/" . $this->foto);
        $salida .= '<div class="caption">';
        $salida .= '<h3>' . $this->titulo . '</h3>';
        $salida .= '<p>' . $this->texto . '</p>';
        $salida .= '</div>';
        $salida .= '</div>';
        $salida .= '</div>';
        
        return $salida;
    }
}
