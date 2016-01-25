<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 23.11.2015
 * Time: 14:26
 */
$this->title = 'Home page';
?>


<h1><?= $this->title ?></h1>
<?php
foreach ($model as $key=>$value) {
    echo $value->title.'</br>'. $value->description.'</br>';
} ?>