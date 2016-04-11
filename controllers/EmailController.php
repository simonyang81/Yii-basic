<?php
/**
 * Created by PhpStorm.
 * User: Simon
 * Date: 4/11/16
 * Time: 8:28 PM
 */

namespace app\controllers;


use app\models\EmailForm;
use Yii;
use yii\web\Controller;

class EmailController extends Controller
{

    public function actionIndexform()
    {
        $model = new EmailForm();

        return $this->render('index', [
            'model' => $model,
        ]);
    }

    public function actionSend()
    {
        $model = new EmailForm();

        if ($model->load(Yii::$app->request->post())
            && $model->validate()) {

            Yii::info($model->email);
            Yii::info($model->feedback);

            return $this->render('email-confirm', [
                'model' => $model,
            ]);

        } else {
            return $this->render('index', [
                'model' => $model,
            ]);
        }
    }

}