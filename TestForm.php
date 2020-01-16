<?php
namespace frontend\models;

use Codeception\Lib\Actor\Shared\Retry;
use yii\base\Model;

class TestForm extends Model {
    public $fname;
    public $lname;

    public function rules()
    {
       return [
           [['fname', 'lname'], 'required']
    ];
    }
    public function attributeLabels()
    {
        return [
            'fname' => 'name',
            'lname' => 'lastname',
        ];
    }
}