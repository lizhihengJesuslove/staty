<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Users;

/*
 * 命名规则,
 * 文件名以驼峰命名法命名,HelloWorldController.php
 * 方法名以actionIndex(),以action开始,同样一驼峰命名法命名
 * 所对应的视图在views下的hello-world文件下的index.php文件
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