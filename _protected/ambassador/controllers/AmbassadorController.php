<?php
namespace ambassador\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;


class AmbassadorController extends Controller
{
    /**
     * Returns a list of behaviors that this component should behave as.
     * Here we use RBAC in combination with AccessControl filter.
     *
     * @return array
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'controllers' => ['site'],
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'controllers' => ['site'],
                        'actions' => ['logout','index'],
                        'allow' => true,
                        'roles' => ['ambassador'],
                    ],
                    [
                        'controllers' => ['profile'],
                        'actions' => ['index','update','change-password','update-profile'],
                        'allow' => true,
                        'roles' => ['ambassador'],
                    ],
                    [
                        // other rules
                    ],

                ], // rules
                'denyCallback' => function ($rule, $action) {
                    if(Yii::$app->user->isGuest){
                        return $this->redirect(['site/login']);
                    }else{
                        return $this->redirect(Yii::$app->params['baseurl']);
                    }
                },

            ], // access

            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ], // verbs

        ]; // return

    } // behaviors

} // BackendController