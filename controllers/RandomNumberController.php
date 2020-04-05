<?php

namespace app\controllers;

use app\models\RandomNumber;
use Yii;
use yii\filters\VerbFilter;
use yii\web\Controller;

class RandomNumberController extends Controller
{
    public $route = 'random-number';

    public $id = 'random-number';

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'create' => ['post'],
                    'list'   => ['get']
                ],
            ],
        ];
    }

    public function actionCreate() {
        $number = new RandomNumber();
        $number->setAttribute('value', rand(0, 10000));
        $number->save();

        return json_encode(['id' => $number->getAttribute('id')]);
    }

    public function actionList() {
        $numbers = RandomNumber::find()->asArray()->all();
        return json_encode($numbers);
    }

    public function actionGet() {
        $id = Yii::$app->request->get('id');

        if ($id) {
            $number = RandomNumber::find()->where([
                'id' => $id
            ])->asArray()->one();

            if (!is_null($number)) {
                return json_encode($number);
            }
            else {
                $response = Yii::$app->getResponse();
                $response->setStatusCode(404);
                $response->data = json_encode([
                    'error' => 'Record not found'
                ]);

                return $response;
            }
        }
    }
}
