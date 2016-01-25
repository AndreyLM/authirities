<?php
/* @var $this yii\web\View */
/* @var $model common\models\Gallery*/
/* @var $images[] rico\yii2images\models\Image*/
?>

<h1><?= $model->name?></h1>

<?= dosamigos\gallery\Gallery::widget(['items' => $items]);?>
