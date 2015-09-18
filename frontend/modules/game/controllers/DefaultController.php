<?php

namespace frontend\modules\game\controllers;

use common\modules\chess\models\Game;
use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionNew() {
        $game = new Game();
    }

    public function actionLoad($id) {

    }

    public function actionSave($id) {

    }
}
