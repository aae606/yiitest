<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\TestForm;
class TestController extends Controller
{
    public function actionForm(){
        $model = new TestForm;
if($model->load(Yii::$app->request->post()) && $model->validate())
{
    Yii::$app->session->setFlash('success','HEllO '
    .$model->fname.' '.$model->lname);
}
return $this->render('form',['model'=>$model]);
    }
}