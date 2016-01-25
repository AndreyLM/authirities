<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Gallery */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gallery-form">

    <?php $form = ActiveForm::begin(
        ['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imageFiles[]')->fileInput(['multiple'=>true, 'accept'=>'image/*']) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>


    <?php if(isset($imgs)):?>
        <?php foreach($imgs as $images): ?>
            <div class="backend_upl_img">
                <?= Html::checkbox('deleteImg[]', false, ['label' => 'Delete', 'value' => $images->id]); ?>
                <img src="<?= $images->getUrl('200x200') ?>">
            </div>
        <?php endforeach; ?>
    <?php endif ?>

    <?php ActiveForm::end(); ?>

</div>
