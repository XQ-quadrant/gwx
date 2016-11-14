<?php
namespace backend\controllers;

use backend\models\Pic;
use common\models\Cate;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use backend\models\LoginForm;
use yii\filters\VerbFilter;

/**
 * Site controller
 */
class SiteController extends Controller
{
    public $layout = 'main_nav';

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            /*'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error','index'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout',],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],*/
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        $pic = Pic::findAll(['status'=>1,'category'=>39]);
        $pic_bottom = Pic::findAll(['status'=>1,'category'=>41]);


        $link_bottom = Cate::findAll(['status'=>Cate::$STATUS_AOLLOW,'pre_cate'=>46]);

        return $this->render('index',[
            'pic'=>$pic,
            'pic_bottom'=>$pic_bottom,
            'link_bottom'=>$link_bottom
        ]);
    }

    public function actionLogin()
    {
        $this->layout = 'login.php';
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goHome();
            //echo "hah";
            //return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
