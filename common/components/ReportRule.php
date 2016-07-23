<?php
namespace common\components;
use common\models\Report;
use Yii;
use yii\rbac\Rule;
use yii\web\User;
/**
 * Created by PhpStorm.
 * User: xq
 * Date: 16-7-19
 * Time: 下午2:01
 */

class ReportRule extends Rule
{
    public $name = '报告';


    /**
     * @param string|integer $user 当前登录用户的uid
     * @param Item $item 所属规则rule，也就是我们后面要进行的新增规则
     * @param array $params 当前请求携带的参数.
     * @return true或false.true用户可访问 false用户不可访问
     */
    public function execute($user, $item, $params)
    {
        //return false;
        //var_dump($params);die();
        $id =  isset($params['id']) ? $params['id'] : null;

        if (!$id) {
            return false;
        }
        //var_dump(Yii::$app->user->can('发布信息')); die();
        $model = Report::findOne(['id'=>$id]);
        if (!$model) {
            return false;
        }

        $user_id = Yii::$app->user->id;
        //$role = Yii::$app->authManager->getRolesByUser($user_id);
        //var_dump($role);die();
        if (Yii::$app->user->can('管理报告') || $user_id == $model->user_id) {
            return true;
        }
        return false;
    }
}
