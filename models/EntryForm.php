<?php
/**
 * Created by PhpStorm.
 * User: Simon
 * Date: 4/7/16
 * Time: 3:21 PM
 */

namespace app\models;


use yii\base\Model;

class EntryForm extends Model
{

    public $name;
    public $email;

    public function rules()
    {
        return [
            // name 和 email 都是必填字段
            [['name', 'email'], 'required'],
            // email必须符合email格式
            ['email', 'email']
        ];
    }

}