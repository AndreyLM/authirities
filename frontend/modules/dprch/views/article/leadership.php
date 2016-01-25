<?php

/* @var $this yii\web\View */
/* @var $model common\models\Article */
/* @var $images rico\yii2images\Module */

    $this->title='Керівництво';
    $this->params['breadcrumbs'][] = $this->title;
?>

<div class="article">
    <h1><?= $model->title;?></h1>
    <div class="art_img">
        <?php foreach($images as $img) :?>
            <img src="<?= $img->getUrl('x150')?>" alt="" align="left"/>
        <?php endforeach; ?>
    </div>
    <div class="art_text">
        <?= $model->description?>
    </div>


</div>

