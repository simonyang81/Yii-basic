<?php
/**
 * Created by PhpStorm.
 * User: Simon
 * Date: 4/10/16
 * Time: 10:15 PM
 */

namespace app\controllers;


use app\models\Country;
use yii\data\Pagination;
use yii\web\Controller;

class CountryController extends Controller
{

    public function actionIndex()
    {
        $query = Country::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $countries = $query -> all();

        return $this->render('index', [
            'countries' => $countries,
        ]);

    }

}