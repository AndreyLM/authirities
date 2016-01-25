<?php

namespace frontend\modules\dprch\controllers;

use common\models\dprch\Gallery;

class GalleryController extends \yii\web\Controller
{
    public $layout='@app/modules/dprch/views/layouts/dprch';

    public function actionIndex($id)
    {
        $model=Gallery::find()->where(['id'=>$id])->one();
        $images=$model->getImages();
        $items=[];
        foreach($images as $image){
            $items[]=[
                    'url' => $image->getUrl('x600'),
                    'src' => $image->getUrl('150x150'),
                    'title' => 'images',
                   ];
        }

        return $this->render('index', ['model'=>$model, 'items'=>$items]);
    }

}
