<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;


class BackendController extends Controller
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
                        'roles' => ['admin','theCreator'],
                    ],
                    [
                        'controllers' => ['user'],
                        'actions' => ['index', 'view', 'create', 'create-ambassador', 'update', 'delete'],
                        'allow' => true,
                        'roles' => ['admin','theCreator'],
                    ],
                    [
                        'controllers' => ['setting-attributes'],
                        'actions' => ['index', 'globalsetting'],
                        'allow' => true,
                        'roles' => ['admin','theCreator'],
                    ],
                    [
                        'controllers' => ['chapters'],
                        'actions' => ['index', 'create'],
                        'allow' => true,
                        'roles' => ['admin','theCreator'],
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

    public function actionUpdateAnyStatus(){


        if(Yii::$app->request->isAjax && Yii::$app->request->post('status_token')){
            $add = 'Inactive';
            $remove = 'Active';

            $id = Yii::$app->request->post('id');
            $field = Yii::$app->request->post('field');
            if($field == 'status'){
                $add = 'Inactive';
                $remove = 'Active';
            }

            $model = Yii::$app->request->post('model');

            if($model){
                $model = 'app\modules\admin\models\\'.$model;
                $model = $model::findOne($id);
            }else{
                $model = $this->findModel($id);
            }

            if($model->$field == 1){

                $result = (bool)$model->updateAttributes([$field => 0]);
                Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
                return [
                    'result' => $result,
                    'action' => $add,
                ];
            } else {

                $result = (bool)$model->updateAttributes([$field => 1]);
                Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
                return [
                    'result' => $result,
                    'action' => $remove,
                ];
            }
        }
    }

} // BackendController