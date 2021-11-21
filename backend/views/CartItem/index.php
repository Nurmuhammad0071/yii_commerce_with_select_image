<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\CartItemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cart Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cart-item-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Cart Item', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'product_id',
            'quantity',
            'created_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
