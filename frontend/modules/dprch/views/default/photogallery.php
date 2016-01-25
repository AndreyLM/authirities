<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 03.12.2015
 * Time: 16:14
 *
 * @var $gallery common\models\Gallery
 */

?>
<div class="container">
    <div class="row">

        <?php foreach($model as $gallery): ?>
            <div class="gal_block">
                <a href="<?= \yii\helpers\Url::toRoute(['gallery/index', 'id'=>$gallery->id]) ?>">
                    <h3><?= $gallery->name;?></h3>
                    <img src="<?= $gallery->getImage()->getUrl('130x130') ?>">
                </a>

            </div>
        <?php endforeach; ?>

    </div>
</div>

