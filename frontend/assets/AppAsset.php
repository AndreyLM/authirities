<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */
namespace frontend\assets;
use yii\web\AssetBundle;
/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/fonts.css',
        'css/main.css',
        'css/media.css',
        'css/site.css',
        'libs/bootstrap/bootstrap-grid-3.3.1.min.css',
        'libs/font-awesome-4.2.0/css/font-awesome.min.css',
        'libs/fancybox/jquery.fancybox.css',
        'libs/owl-carousel/owl.carousel.css',
        'libs/owl-carousel/owl.theme.css',
    ];
    public $js = [
        'libs/jquery/jquery-1.11.1.min.js',
        'libs/owl-carousel/owl.carousel.min.js',
        'js/common.js',
        'libs/jquery-mousewheel/jquery.mousewheel.min.js',
        'libs/fancybox/jquery.fancybox.pack.js',
        'libs/waypoints/waypoints-1.6.2.min.js',
        'libs/scrollto/jquery.scrollTo.min.js',
        'libs/landing-nav/navigation.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}