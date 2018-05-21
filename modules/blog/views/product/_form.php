<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\modules\blog\models\Category;

/* @var $this yii\web\View */
/* @var $model app\modules\blog\models\Product */
/* @var $form yii\widgets\ActiveForm */



    ?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'count')->textInput() ?>

    <?php $categories = ArrayHelper::map(Category::find()->orderBy('title')->all(), 'id', 'title') ?>
    <?= $form->field($model, 'category_id')->dropDownList($categories, ['prompt' => '---- Select category ----'])->label('category') ?>

    <div class="form-group">
        <?= Html::submitButton('Зберегти', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>




</div>
