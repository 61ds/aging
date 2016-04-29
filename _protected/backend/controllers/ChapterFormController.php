<?php

namespace backend\controllers;

use Yii;
use common\models\ChapterForm;
use common\models\ChapterFormSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ChapterFormController implements the CRUD actions for ChapterForm model.
 */
class ChapterFormController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all ChapterForm models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ChapterFormSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ChapterForm model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new ChapterForm model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ChapterForm();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ChapterForm model.
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

    public function actionOnboarding($id)
    {
        $model = $this->findModel($id);

        if ($model->updateAttributes(['onboarding_status' => 1])) {
            $body = 'Congratulations on being approved to run an Aging2.0 Chapter! Please complete this form which includes the License Agreement and financial information so that we can ensure that you receive Chapter revenues. Please review the Chapter rules here: http://j.mp/a2chapter-groundrules';
            $subject = "Onboarding form Aging2.0 Chapter";
            $name = 'Aging2.0 Chapter';
            //if ($model->contact(Yii::$app->params['adminEmail'])) {
            if ($model->contact($model->email,$body,$subject,Yii::$app->params['adminEmail'],$name)) {
                Yii::$app->session->setFlash('success','Onboarding form link successfully sent!.');
            }
            return $this->redirect(['view', 'id' => $model->id]);
        } else {

            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }
    /**
     * Deletes an existing ChapterForm model.
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
     * Finds the ChapterForm model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ChapterForm the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ChapterForm::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
