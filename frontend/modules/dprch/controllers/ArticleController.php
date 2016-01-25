<?php
namespace frontend\modules\dprch\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\dprch\Article;
use common\models\dprch\Gallery;

/**
 * Site controller
 */
class ArticleController extends Controller
{
    /**
     * @inheritdoc
     */
      public $layout='@app/modules/dprch/views/layouts/dprch';

//    public function behaviors()
//    {
//        return [
//            'access' => [
//                'class' => AccessControl::className(),
//                'only' => ['logout', 'signup'],
//                'rules' => [
//                    [
//                        'actions' => ['signup'],
//                        'allow' => true,
//                        'roles' => ['?'],
//                    ],
//                    [
//                        'actions' => ['logout'],
//                        'allow' => true,
//                        'roles' => ['@'],
//                    ],
//                ],
//            ],
//            'verbs' => [
//                'class' => VerbFilter::className(),
//                'actions' => [
//                    'logout' => ['post'],
//                ],
//            ],
//        ];
//    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */

    public function actionIndex()
    {
        $model=Article::find()->all();
        return $this->render('index', ['model'=>$model]);
    }

    public function actionShow($id=1)
    {
        $model=Article::find()->where(['id'=>$id])->one();
        return $this->render('showArticle', ['model'=>$model]);
    }

    public function actionLeaders()
    {
        $model=Article::find()->where(['category_id'=>2])->one();
        $imgs=$model->getImages();
        return $this->render('leadership', ['model'=>$model, 'images'=>$imgs]);
    }

    public function actionPhotogallery()
    {
        $galleries=Gallery::find()->all();
        //echo var_dump($galleries); die;
        return $this->render('photogallery', ['model' => $galleries]);
    }

}
