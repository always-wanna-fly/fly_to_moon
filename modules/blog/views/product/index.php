<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\blog\models\SearchProduct */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Авто';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Додати нову модель', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        'id',
           'title',
           'description',

        [
            'attribute'=>'image_path',
            'label'=>'Фото',
            'format'=>'html',
            'content' => function($data){
                $url = $data->getParentName();
                return Html::img($url, ['alt'=>'yii','width'=>'250','height'=>'150']);
            }
        ],

          'count',
        'category_id',
        ['class' => 'yii\grid\ActionColumn'],

    ],
]); ?>
</div>
