<?php
namespace app\models;

use yii\db\ActiveRecord;

class Users extends ActiveRecord
{
	/*
	 *��дtableName����,ֱ�ӷ��ر���,����б�ǰ׺�Ļ�return '{{%user}}',yii���Զ����ǰ׺,���������ı���
	 */
    public static function tableName()
    {
        return 'user';
    }
}