<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use Yii;
use app\models\User;

class DefaultController extends Controller
{
    public function actionIndex() {
        $id = Yii::$app->user->id;
        $user=user::find()->asArray()->where(['id'=>$id])->one();
        if (($user['id_group'] != 2) || ($id == null)) {
            return $this->goHome();
        } else {
            return $this->render('index');
        }
    }

}
?>