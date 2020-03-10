<?php

namespace app\widgets;

use yii\helpers\Html;

/**
 * Description of Articulos
 *
 * @author Oscar
 */
class Articulos extends \yii\bootstrap\Widget {
    public $id;
    public $foto;
    public $titulo;
    public $texto_corto;
    
    public function init() {
        parent::init();
    }
    
    public function run() {
        $retorno = "";
        $retorno .= '<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">';
        $retorno .= '<div class="thumbnail">';
        $retorno .= Html::img("@web/imgs/" . $this->foto);
        $retorno .= '<div class="caption">';
        $retorno .= '<h3>' . $this->titulo . '</h3>';
        $retorno .= '<p>' . $this->texto_corto . '</p>';
        //$retorno .= '<p><a href="' . 'site/mostrar_detalle_articulo', 'id' => $this->id]). '" class="btn btn-primary" role="button">Leer mas</a></p>';
        $retorno .= '<p>' . Html::a('Leer mas', ['mostrar_articulo_texto_largo', 'id'=> $this->id], ['class'=>"btn btn-primary", 'role'=>"button"]) . '</p>';
        $retorno .= '</div>';
        $retorno .= '</div>';
        $retorno .= '</div>';
        
        return $retorno;
    }
}