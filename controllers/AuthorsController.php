<?php


namespace app\controllers;

use Yii;
use app\models\Authors;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

class AuthorsController extends Controller
{

    public function actionIndex ()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Authors::find(),
            'pagination' => [
                'forcePageParam' => false,
                'pageSizeParam' => false,
                'pageSize' => 2
            ]
            ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider
            ]);
    }

    public function actionCreate ()
    {
        $model = new Authors();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->render('view', ['model' => $model]);
        }

            return $this->render('create', [
                'model' => $model,
            ]);


    }

}