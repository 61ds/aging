<?php

namespace backend\controllers;

use common\models\AmbassadorProfile;
use Yii;
use common\models\AmbsOnboarding;
use common\models\AmbsOnboardingSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AmbsOnboardingController implements the CRUD actions for AmbsOnboarding model.
 */
class AmbsOnboardingController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all AmbsOnboarding models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AmbsOnboardingSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $main_model = new AmbsOnboarding();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'main_model' => $main_model,
        ]);
    }
    public function actionApprove()
    {
        $searchModel = new AmbsOnboardingSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams,1);
        $main_model = new AmbsOnboarding();
        return $this->render('approved', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'main_model' => $main_model,
        ]);
    }

    /**
     * Displays a single AmbsOnboarding model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        if ($model->preferred_payment == 1) {
            $model->preferred_payment = 'By Check';
        }else if($model->preferred_payment == 2) {
            $model->preferred_payment =  'Electronic Bank Transfer';
        }else if($model->preferred_payment == 3){
            $model->preferred_payment = 'By Paypal';
        }
        return $this->render('view', [
            'model' => $model,
        ]);
    }

    public function actionViewApproved($id)
    {
        $model = $this->findModel($id);
        $profile = new AmbassadorProfile();
        $profile = $profile->find()->where(['onboarding_id' => $id])->one();
        if ($model->preferred_payment == 1) {
            $model->preferred_payment = 'By Check';
        }else if($model->preferred_payment == 2) {
            $model->preferred_payment =  'Electronic Bank Transfer';
        }else if($model->preferred_payment == 3){
            $model->preferred_payment = 'By Paypal';
        }
        return $this->render('viewapproved', [
            'model' => $model,
            'userid' => $profile->user_id,
        ]);
    }
    /**
     * Creates a new AmbsOnboarding model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AmbsOnboarding();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing AmbsOnboarding model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing AmbsOnboarding model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AmbsOnboarding model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AmbsOnboarding the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AmbsOnboarding::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
