<?php
/**
 * Created by PhpStorm.
 * User: sky
 * Date: 2017/3/7
 * Time: 18:06
 */
namespace console\controllers;

use yii\console\Controller;
use common\models\Post;

class HelloController extends Controller
{
    public function actionIndex()
    {
        echo 'hello world \n';
    }

    public function actionList()
    {
        $post = Post::find()->all();
        foreach($post as $v){
            var_dump($v['id']."--".$v['title']."\n");
        }
    }

}