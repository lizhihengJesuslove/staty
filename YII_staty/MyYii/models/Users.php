<?php
namespace app\models;

use yii\db\ActiveRecord;

class Users extends ActiveRecord
{
	/*
	 *重写tableName方法,直接返回表名,如果有表前缀的话return '{{%user}}',yii会自动添加前缀,返回完整的表名
	 */
    public static function tableName()
    {
        return 'user';
    }
}