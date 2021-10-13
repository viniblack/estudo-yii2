<?php

namespace app\controllers;

use yii\base\Controller;


class HelloController extends Controller
{
  public function actionSaySomething()
  {
    return $this->render('say-something',[
      
    ]);
  }
}