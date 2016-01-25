<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><![endif]-->
<lang="<?= Yii::$app->language ?>" >
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<?php $this->beginBody() ?>


<!--[if lt IE 9]>
<script src="frontend/web/libs/html5shiv/es5-shim.min.js"></script>
<script src="frontend/web/libs/html5shiv/html5shiv.min.js"></script>
<script src="frontend/web/libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="frontend/web/libs/respond/respond.min.js"></script>
<![endif]-->
<header class="top_header">

    <div class="header_topline">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <button class="auth_buttons hidden-sm hidden-md hidden-lg"><i class="fa fa-user"></i></button>
                    <?php if(Yii::$app->user->isGuest) {?>
                        <div class="top_links">
                            <a href="<?= Url::to(['/dprch/default/signup'])?>">Регістрація</a> /
                            <a href="<?= Url::to(['/dprch/default/login'])?>">Зайти</a>
                        </div>
                    <?php } else {?>
                        <div class="logout">
                            <?= Html::beginForm(['/dprch/default/logout'], 'post') ?>
                                  <?= Html::submitButton('Logout ('. Yii::$app->user->identity->username.')') ?>
                            <?= Html::endForm() ?>
                        </div>
                    <?php }?>
                    <div class="soc_buttons">
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-vk"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="grad_top">

    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="#" class="logo">DPRCH</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <nav class="main_mnu clearfix">
                        <button class="main_mnu_button hidden-md hidden-lg">
                            <i class="fa fa-bars"></i>
                        </button>
                        <ul>
                            <li class="active"><a href="<?= Url::to(['/dprch/default/index'])?>">Main page</a></li>
                            <li><a href="<?= Url::to(['/dprch/default/articles'])?>">Новини</a></li>
                            <li><a href="<?= Url::to(['default/photogallery'])?>">Фотогалерея</a></li>
                            <li><a href="<?= Url::to(['/dprch/default/incharge']) ?>">Керівництво</a></li>
                            <li><a href="<?= Url::to(['/dprch/default/contacts']) ?>">Контакти</a></li>
                        </ul>
                        <div class="top_contacts">
                            <i class="fa fa-phone"></i> 8-800-000-000
                        </div>
                    </nav>
                    <div class="header_title">
                        <h1>Сектор Головного управління державної служби НС</h1>
                    </div>
                    <div class="slider_container">
                        <div class="next_button"><i class="fa fa-angle-right"></i></div>
                        <div class="prev_button"><i class="fa fa-angle-left"></i></div>
                        <div id="owl-example" class="carousel">
                            <div class="slide_item"> <?php echo Html::img('@web/images/IMG_0685.JPG') ?></div>
                            <div class="slide_item"> <?php echo Html::img('@web/images/IMG_0792.JPG') ?></div>
                            <div class="slide_item"> <?php echo Html::img('@web/images/IMG_0794.JPG') ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="grad_header_order"></div>

<section class="order">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="description">
                    Безпека в будь-якій ситуації. Ми завжди поруч.
                </div>
            </div>
            <div class="col-md-4">
                <div class="send_msg">
                    <button class="button">Написати повідомлення</button>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="grad_order_main_content"></div>

<section class="main_content">
    <div class="container">
        <div class="col-md-8">
            <?= $content ?>
        </div>
        <div class="col-md-4">
            <aside class="right_aside">
                <ul>
                    <li><a href="#">Lorem ipsum dolor sit.</a></li>
                    <li><a href="#">Sit ex cupiditate, perspiciatis?</a></li>
                    <li><a href="#">Officia in, iure unde.</a></li>
                    <li><a href="#">Illum sapiente voluptate ipsam!</a></li>
                    <li><a href="#">Vel modi, ipsum aut.</a></li>
                    <li><a href="#">Ipsam illum sed nesciunt.</a></li>
                    <li><a href="#">Magnam sint culpa, quos.</a></li>
                    <li><a href="#">Corporis tempora, ratione soluta.</a></li>
                    <li><a href="#">Quas provident quia, repudiandae!</a></li>
                    <li><a href="#">Deserunt nemo inventore voluptas.</a></li>
                </ul>
            </aside>
        </div>
    </div>
</section>




<div class="grad_footer"></div>
<footer class="main_footer">
    <div class="container">
        <div class="row"><div class="col-md-12"><p>Footer & copyrights</br></br></p></div></div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
