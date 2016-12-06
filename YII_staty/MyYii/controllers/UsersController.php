<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Users;

/*
 * ��������,
 * �ļ������շ�����������,HelloWorldController.php
 * ��������actionIndex(),��action��ʼ,ͬ��һ�շ�����������
 * ����Ӧ����ͼ��views�µ�hello-world�ļ��µ�index.php�ļ�
 */
class UsersController extends Controller
{
    public function actionIndex()
    {
        $query = Users::find();
        $pagination = new Pagination([
            'defaultPageSize'=>5,
            'totalCount'=>$query->count()
        ]);

        $users = $query ->select('id,name,phone')
                        ->offset($pagination->offset)
                        ->limit($pagination->limit)
                        ->all();

        return $this -> render('index',[
            'users'=>$users,
            'page'=>$pagination,
        ]);
    }
}