<?php
/**
 * Created by PhpStorm.
 * User: Simon
 * Date: 4/11/16
 * Time: 8:43 PM
 */

namespace app\models;


use yii\base\Model;

class EmailForm extends Model
{

    public $name;
    public $email;
    public $feedback;

    public function rules()
    {
        return [
            // name 和 email 都是必填字段
            [['name', 'email'], 'required'],
            // email必须符合email格式
            ['email', 'email'],
            ['feedback', 'string'],
        ];
    }

}