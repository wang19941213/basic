<?php
/**
 * Created by PhpStorm.
 * User: youth
 * Date: 15-12-12
 * Time: 下午5:58
 */
namespace app\util;
use yii\base\Object;
use yii\helpers\Url;

class IntentUtil extends Object{

    public static function sendParams($name,$head){
        if($name === ''){
            throw new \Exception("util IntentUtil sendParams方法的name参数不可以是空");
        }
        if($head === ''){
            throw new \Exception("util IntentUtil sendParams方法的head参数不可以是空");
        }
        $view = \Yii::$app->view;
        $view->params['name']=\Yii::$app->user->getId().'ddddd';
        $view->params['head']=Url::to($head,true);
        $view->params['back']=Url::to('@web/img/fond.png',true);
    }

}