<?php

namespace app\frontend\models;

use Yii;

/**
 * This is the model class for table "subscriber".
 *
 * @property integer $id
 * @property string $username
 * @property string $email
 * @property string $pwd
 * @property integer $status
 */
class Subscriber extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subscriber';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'email', 'pwd', 'status'], 'required'],
            [['status'], 'integer'],
            [['username', 'pwd'], 'string', 'max' => 50],
            [['email'], 'string', 'max' => 60]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'email' => 'Email',
            'pwd' => 'Pwd',
            'status' => 'Status',
        ];
    }
}
