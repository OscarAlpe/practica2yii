<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Noticias;
use yii\data\ActiveDataProvider;
use app\models\Articulos;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionNoticias()
    {
        $query = Noticias::find()->select("noticias.*");
        
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        
        return $this->render('noticias',[
            "dataProvider" => $dataProvider,
        ]);
    }

    public function actionArticulos()
    {
        $query = Articulos::find()->select("articulos.*");
        
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        
        return $this->render('articulos',[
            "dataProvider" => $dataProvider,
        ]);
    }

    public function actionMostrar_articulo_texto_largo($id) {
        $articulo = Articulos::findOne($id);
        return $this->render("articulo_texto_largo",[
            "articulo" => $articulo,
        ]);
    }
}
