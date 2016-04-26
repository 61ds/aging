<?php
namespace ambassador\controllers;

use common\models\User;
use common\models\UserSearch;
use common\rbac\models\Role;
use Yii;
use yii\base\Model;
use yii\web\NotFoundHttpException;

/**
 * UserController implements the CRUD actions for User model.
 */
class ProfileController extends AmbassadorController
{
    /**
     * Lists all User models.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('view', [
            'model' => $this->findModel(Yii::$app->user->id),
        ]);
    }


    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     *
     * @param  integer $id The user id.
     * @return string|\yii\web\Response
     *
     * @throws NotFoundHttpException
     */
    public function actionUpdate()
    {


        // get user details
        $user = $this->findModel(Yii::$app->user->id);


        // load user data with role and validate them
        if ($user->load(Yii::$app->request->post()) && Model::validateMultiple([$user]))
        {
            // only if user entered new password we want to hash and save it
            if ($user->password) 
            {
                $user->setPassword($user->password);
            }

            // if admin is activating user manually we want to remove account activation token
            if ($user->status == User::STATUS_ACTIVE && $user->account_activation_token != null) 
            {
                $user->removeAccountActivationToken();
            }            

            $user->save(false);
            Yii::$app->session->setFlash('success','Profile updated successfully! .');

            return $this->redirect(['index']);
        }
        else 
        {
            return $this->render('update', [
                'user' => $user
            ]);
        }
    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     *
     * @param  integer $id The user id.
     * @return string|\yii\web\Response
     *
     * @throws NotFoundHttpException
     */
    public function actionChangePassword()
    {
        // get user details
        $user = $this->findModel(Yii::$app->user->id);


        // load user data with role and validate them
        if ($user->load(Yii::$app->request->post()) && Model::validateMultiple([$user]))
        {
            // only if user entered new password we want to hash and save it
            if ($user->password)
            {
                $user->setPassword($user->password);
            }

            // if admin is activating user manually we want to remove account activation token
            if ($user->status == User::STATUS_ACTIVE && $user->account_activation_token != null)
            {
                $user->removeAccountActivationToken();
            }

            $user->save(false);
            Yii::$app->session->setFlash('success','Password updated successfully! .');
            return $this->redirect(['index']);
        }
        else
        {
            return $this->render('update-pass', [
                'user' => $user
            ]);
        }
    }
    /**
     * Deletes an existing User model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     *
     * @param  integer $id The user id.
     * @return \yii\web\Response
     *
     * @throws NotFoundHttpException
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        // delete this user's role from auth_assignment table
        if ($role = Role::find()->where(['user_id'=>$id])->one()) 
        {
            $role->delete();
        }

        return $this->redirect(['index']);
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     *
     * @param  integer $id The user id.
     * @return User The loaded model.
     *
     * @throws NotFoundHttpException
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) 
        {
            return $model;
        } 
        else 
        {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
