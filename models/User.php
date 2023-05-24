<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $nickname
 * @property string $login
 * @property string $password
 * @property int $group_id
 * @property string $avatar
 * @property int $role_id
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nickname', 'login', 'password', 'group_id', 'avatar', 'role_id'], 'required'],
            [['group_id', 'role_id'], 'integer'],
            [['nickname', 'login', 'password', 'avatar'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nickname' => 'Nickname',
            'login' => 'Login',
            'password' => 'Password',
            'group_id' => 'Group ID',
            'avatar' => 'Avatar',
            'role_id' => 'Role ID',
        ];
    }
}
